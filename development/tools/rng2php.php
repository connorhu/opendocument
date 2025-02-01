<?php

require __DIR__.'/../../vendor/autoload.php';

use \Symfony\Component\Filesystem\Filesystem;

$fs = new Filesystem();
$file = __DIR__.'/../OpenDocument-v1.3-schema.rng';
$dom = new DOMDocument();
$dom->load($file);
$xpath = new DOMXPath($dom);
$xpath->registerNamespace('rng', 'http://relaxng.org/ns/structure/1.0');

$geninfo = json_decode(file_get_contents(__DIR__.'/geninfo.json'), true);

class PHPAttribute
{
    public $name;
    public $type;
    public $optional;
    public $readonly;
}

class PHPCodeGenerator
{
    public const string INDENT = '    ';
    protected Filesystem $fs;

    public function __construct()
    {
        $this->fs = new Filesystem();
    }

    public static function indent($code, $amount = 1): string
    {
        $result = preg_replace('/^/m', str_repeat(self::INDENT, $amount), $code);
        return $result === null ? '' : $result;
    }

    public function generateGetter(string $propertyName, string $returnType, bool $optional = true): string
    {
        $getterName = 'get'.ucfirst($propertyName);

        $buffer = self::indent('/**
 * @return '.$returnType. ($optional ? '|null' : '').'
 */'. PHP_EOL);
        $buffer .= self::INDENT.'public function '.$getterName.'()';
        $buffer .= ': '.self::getPhpType($returnType, $optional);

        $buffer .= PHP_EOL;

        $buffer .= self::INDENT .'{'. PHP_EOL;
        $buffer .= str_repeat(self::INDENT, 2) .'return $this->'.$propertyName.';'. PHP_EOL;
        $buffer .= self::INDENT .'}'. PHP_EOL;

        return $buffer;
    }

    public function generateGetterInterface(string $propertyName, string $returnType, bool $optional = true): string
    {
        $getterName = 'get'.ucfirst($propertyName);

        $buffer = self::indent('/**
 * @return '.$returnType. ($optional ? '|null' : '') .' returns '. $propertyName .'
 */'. PHP_EOL);
        $buffer .= self::INDENT.'public function '.$getterName.'()';
        $buffer .= ': '.($optional ? '?': '').$returnType;

        $buffer .= ';'.PHP_EOL;

        return $buffer;
    }

    public function generateSetter(
        string $propertyName,
        string $type,
        ?string $defaultValue = null,
        bool $optional = true,
    ): string {
        $setterName = 'set'.ucfirst($propertyName);

        $buffer = 'public function '.$setterName.'('.self::getPhpType($type, $optional).' $'. $propertyName;
        if ($defaultValue === 'null') {
            $buffer .= ' = null';
        }
        $buffer .= ')'.PHP_EOL;
        $buffer .= '{'. PHP_EOL;
        $buffer .= self::INDENT .'$this->'.$propertyName.' = $'.$propertyName.';'. PHP_EOL. PHP_EOL;
        $buffer .= self::INDENT .'return $this;'. PHP_EOL;
        $buffer .= '}'. PHP_EOL;

        return self::indent($buffer);
    }

    public function generateSetterInterface(
        string $propertyName,
        string $type,
        ?string $defaultValue = null,
        bool $optional = true,
    ): string {
        $setterName = 'set'.ucfirst($propertyName);

        $buffer = 'public function '.$setterName.'('.($optional ? '?' : '').$type.' $'. $propertyName;
        if ($defaultValue === 'null') {
            $buffer .= ' = null';
        }
        $buffer .= ');'.PHP_EOL;

        return self::indent($buffer);
    }

    public function generateGetterAndSetter(
        string $propertyName,
        string $type,
        ?string $defaultValue = null,
        bool $optional = true,
    ): string {
        $buffer = $this->generateGetter($propertyName, $type, $optional);
        $buffer .= PHP_EOL;
        $buffer .= $this->generateSetter($propertyName, $type, $defaultValue, $optional);
        $buffer .= PHP_EOL;

        return $buffer;
    }

    public function generateGetterAndSetterInterfaces(string $proprtyName, string $type, ?string $defaultValue = null, bool $optional = true): string
    {
        $buffer = $this->generateGetterInterface($proprtyName, $type, $optional);
        $buffer .= PHP_EOL;
        $buffer .= $this->generateSetterInterface($proprtyName, $type, $defaultValue, $optional);
        $buffer .= PHP_EOL;

        return $buffer;
    }

    public static function getPhpType(string $type, bool $optional): string
    {
        return ($optional && !str_contains($type, '|') ? '?' : '').$type;
    }

    /**
     * @param string $namespace
     * @param string $className
     * @param array<string, array{
     *     name: string,
     *     type: string,
     *     optional: boolean
     * }> $attributes
     * @return string
     */
    public function generateTrait(string $namespace, string $className, array $attributes): string
    {
        $buffer = '<?php'.PHP_EOL.PHP_EOL;
        $buffer .= 'namespace '. $namespace .';'.PHP_EOL.PHP_EOL;
        $buffer .= 'trait '. $className . PHP_EOL;
        $buffer .= '{'.PHP_EOL;

        foreach ($attributes as $attribute) {
            $buffer .= self::INDENT.'protected '.self::getPhpType($attribute['type'], $attribute['optional']).' $'.$attribute['name'];

            if ($attribute['optional']) {
                $buffer .= ' = null';
            }

            $buffer .= ';'.PHP_EOL.PHP_EOL;
        }

        foreach ($attributes as $attribute) {
            $defaultValue = null;

            if ($attribute['optional']) {
                $defaultValue = 'null';
            }

            $buffer .= $this->generateGetterAndSetter($attribute['name'], $attribute['type'], $defaultValue, $attribute['optional']);
        }

        $buffer .= '}'.PHP_EOL;

        return $buffer;
    }

    public function generateClass(string $namespace, string $className, array $attributes, array $traits = [], array $interfaces = []): string
    {
        $buffer = '<?php'.PHP_EOL.PHP_EOL;
        $buffer .= 'namespace '. $namespace .';'.PHP_EOL.PHP_EOL;
        $buffer .= <<<PHPDOC
/**
 * @see https://docs.oasis-open.org/office/OpenDocument/v1.3/os/part3-schema/OpenDocument-v1.3-os-part3-schema.html
 */

PHPDOC;
        $buffer .= 'class '. $className .' extends Style'. (count($interfaces) > 0 ? ' implements' : ''). PHP_EOL;
        if (count($interfaces) > 0) {
            $buffer .= self::INDENT.implode(','.PHP_EOL.self::INDENT, $interfaces).PHP_EOL;
        }
        $buffer .= '{'.PHP_EOL;

        if (count($traits) > 0) {
            $buffer .= self::INDENT.'use '.implode(';'.PHP_EOL.self::INDENT.'use ', $traits).';'.PHP_EOL.PHP_EOL;
        }

        foreach ($attributes as $attribute) {
            $buffer .= self::INDENT.'protected '.self::getPhpType($attribute['type'], $attribute['optional']).' $'.$attribute['name'];

            if ($attribute['optional']) {
                $buffer .= ' = null';
            }

            $buffer .= ';'.PHP_EOL.PHP_EOL;
        }

        foreach ($attributes as $attribute) {
            $defaultValue = null;

            if ($attribute['optional']) {
                $defaultValue = 'null';
            }

            $buffer .= $this->generateGetterAndSetter($attribute['name'], $attribute['type'], $defaultValue, $attribute['optional']);
        }

        $buffer .= '}'.PHP_EOL;

        return $buffer;
    }

    public function generateInterface(string $namespace, string $className, array $attributes): string
    {
        $buffer = '<?php'.PHP_EOL.PHP_EOL;
        $buffer .= 'namespace '. $namespace .';'.PHP_EOL.PHP_EOL;
        $buffer .= 'interface '. $className . PHP_EOL;
        $buffer .= '{'.PHP_EOL;

        foreach ($attributes as $attribute) {
            $defaultValue = null;

            if ($attribute['optional']) {
                $defaultValue = 'null';
            }

            $buffer .= $this->generateGetterAndSetterInterfaces($attribute['name'], 'string', $defaultValue, true);
        }

        $buffer .= '}'.PHP_EOL;

        return $buffer;
    }

    public function writeFile(string $fullpath, string $code)
    {
        $this->fs->mkdir(dirname($fullpath));

        file_put_contents($fullpath, $code);
    }

    public function phpPropertyName(string $xmlNodeName): string
    {
        $propertyName = substr($xmlNodeName, strpos($xmlNodeName, ':')+1);

        return preg_replace_callback('/\-([a-zA-Z])/', function ($m) {
            return strtoupper($m[1]);
        }, $propertyName);
    }

    public function mapPhpType(string $propertyName, string $type): string
    {
        return match ($propertyName) {
            'border', 'borderTop', 'borderBottom', 'borderLeft', 'borderRight' => $type,
            'backgroundColor' => 'string',
            default => match ($type) {
                'boolean' => 'bool',
                default => 'string',
            },
        };
    }
}

$gen = new PHPCodeGenerator();

$length = count($geninfo);

for ($i = 0; $i < $length; $i++) {
    $info = $geninfo[$i];

    $nodes = $xpath->query('//rng:define[@name="'.$info['rng_define_name'].'"]');
    $node = $nodes->item(0);

    $dir = realpath(__DIR__.'/../../src');
    $namespace = 'OpenDocument';
    $filename = $info['class'];
    $classname = $info['class'];

    if ($info['section'] === 'style') {
        $dir .= '/Style';
        $namespace .= '\\Style';
    }

    if ($info['type'] === 'trait') {
        $dir .= '/Traits';
        $namespace .= '\\Traits';
        $filename .= 'Trait';
        $classname .= 'Trait';

        $interfaceInfo = $info;
        $interfaceInfo['type'] = 'interface';
        $geninfo[] = $interfaceInfo;
        $length++;
    } elseif ($info['type'] === 'interface') {
        $dir .= '/Interfaces';
        $namespace .= '\\Interfaces';
        $filename .= 'Interface';
        $classname .= 'Interface';
    }

    $filename .= '.php';

    $attributes = [];

    /** @var \Dom\Element $attributeNode */
    foreach ($xpath->query('.//rng:attribute', $node) as $attributeNode) {
        $optional = $attributeNode->parentNode->nodeName === 'rng:optional';
        $name = $gen->phpPropertyName($attributeNode->getAttribute('name'));
        $type = $gen->mapPhpType($name, $attributeNode->childNodes[1]->getAttribute('name')); // rng:ref name="..."

        if (isset($attributes[$name])) {
            continue;
        }

        $attributes[$name] = [
            'name' => $name,
            'type' => $type,
            'optional' => $optional,
        ];
    }

    $code = '';
    if ($info['type'] === 'trait') {
        $code = $gen->generateTrait($namespace, $classname, $attributes);
    } elseif ($info['type'] === 'interface') {
        $code = $gen->generateInterface($namespace, $classname, $attributes);
    } elseif ($info['type'] === 'class') {
        $traits = [];
        $interfaces = [];
        foreach ($xpath->query('./rng:interleave/rng:ref', $node) as $reference) {
            $rngReferences = $reference->getAttribute('name');

            foreach ($geninfo as $item) {
                if ($item['rng_define_name'] === $rngReferences) {
                    $traits[sprintf('Traits\\%sTrait', $item['class'])] = 1;
                    $interfaces[sprintf('Interfaces\\%sInterface', $item['class'])] = 1;
                }
            }
        }

        $traits = array_keys($traits);
        $interfaces = array_keys($interfaces);

        sort($traits);
        sort($interfaces);

        $code = $gen->generateClass($namespace, $classname, $attributes, traits: $traits, interfaces: $interfaces);
    }

    $gen->writeFile($dir.'/'.$filename, $code);
}

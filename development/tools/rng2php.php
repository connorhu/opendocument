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
 * it returns '. $propertyName .'
 *
 * @return '.$returnType. ($optional ? '|null' : '') .' it returns '. $propertyName .'
 */'. PHP_EOL);
        $buffer .= self::INDENT.'public function '.$getterName.'()';
        $buffer .= ': '.($optional ? '?': '').$returnType;

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
 * it returns '. $propertyName .'
 *
 * @return '.$returnType. ($optional ? '|null' : '') .' it returns '. $propertyName .'
 */'. PHP_EOL);
        $buffer .= self::INDENT.'public function '.$getterName.'()';
        $buffer .= ': '.($optional ? '?': '').$returnType;

        $buffer .= ';'.PHP_EOL;

        return $buffer;
    }

    public function generateSetter(string $proprtyName, string $type, string $defaultValue = null, bool $optional = true): string
    {
        $setterName = 'set'.ucfirst($proprtyName);

        $buffer = 'public function '.$setterName.'($'. $proprtyName;
        if ($defaultValue === 'null') {
            $buffer .= ' = null';
        }
        $buffer .= ')'.PHP_EOL;
        $buffer .= '{'. PHP_EOL;
        $buffer .= self::INDENT .'$this->'.$proprtyName.' = $'.$proprtyName.';'. PHP_EOL;
        $buffer .= '}'. PHP_EOL;

        return self::indent($buffer);
    }

    public function generateSetterInterface(string $proprtyName, string $type, string $defaultValue = null, bool $optional = true): string
    {
        $setterName = 'set'.ucfirst($proprtyName);

        $buffer = 'public function '.$setterName.'($'. $proprtyName;
        if ($defaultValue === 'null') {
            $buffer .= ' = null';
        }
        $buffer .= ');'.PHP_EOL;

        return self::indent($buffer);
    }

    public function generateGetterAndSetter(string $proprtyName, string $type, string $defaultValue = null, bool $optional = true): string
    {
        $buffer = $this->generateGetter($proprtyName, $type, $optional);
        $buffer .= PHP_EOL;
        $buffer .= $this->generateSetter($proprtyName, $type, $defaultValue, $optional);
        $buffer .= PHP_EOL;

        return $buffer;
    }

    public function generateGetterAndSetterInterfaces(string $proprtyName, string $type, string $defaultValue = null, bool $optional = true): string
    {
        $buffer = $this->generateGetterInterface($proprtyName, $type, $optional);
        $buffer .= PHP_EOL;
        $buffer .= $this->generateSetterInterface($proprtyName, $type, $defaultValue, $optional);
        $buffer .= PHP_EOL;

        return $buffer;
    }

    public function generateTrait(string $namespace, string $className, array $attributes): string
    {
        $buffer = '<?php'.PHP_EOL.PHP_EOL;
        $buffer .= 'namespace '. $namespace .';'.PHP_EOL.PHP_EOL;
        $buffer .= 'trait '. $className . PHP_EOL;
        $buffer .= '{'.PHP_EOL;

        foreach ($attributes as $attribute) {
            $buffer .= self::INDENT.'protected $'.$attribute['name'];

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

            $buffer .= $this->generateGetterAndSetter($attribute['name'], 'string', $defaultValue, true);
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

        $interaceInfo = $info;
        $interaceInfo['type'] = 'interface';
        $geninfo[] = $interaceInfo;
        $length++;
    }
    elseif ($info['type'] === 'interface') {
        $dir .= '/Interfaces';
        $namespace .= '\\Interfaces';
        $filename .= 'Interface';
        $classname .= 'Interface';
    }

    $filename .= '.php';

    $attributes = [];

    foreach ($xpath->query('.//rng:attribute', $node) as $attributeNode) {
        $optional = $attributeNode->parentNode->nodeName === 'rng:optional';
        $name = $gen->phpPropertyName($attributeNode->getAttribute('name'));

        if (isset($attributes[$name])) {
            continue;
        }

        $attributes[$name] = [
            'name' => $name,
            'optional' => $optional,
        ];
    }

    $code = '';
    if ($info['type'] === 'trait') {
        $code = $gen->generateTrait($namespace, $classname, $attributes);
    }
    elseif ($info['type'] === 'interface') {
        $code = $gen->generateInterface($namespace, $classname, $attributes);
    }

    $gen->writeFile($dir.'/'.$filename, $code);
}

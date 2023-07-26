<?php

namespace Gendiff\Gendiff;


$autoloadPath1 = __DIR__ . '/../../../autoload.php';
// Путь для локальной работы с проектом
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';


if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}
function genDiff ()
{
$doc = <<<DOC
 
Generate diff

Usage:
  gendiff (-h|--help)
  gendiff (-v|--version)

Options:
  -h --help                     Show this screen
  -v --version                  Show version

DOC;

use Class \Gendiff\Gendiff\Docopt; 

$args = Docopt::handle($doc, array('version'=>'Gendiff 1.0'));
foreach ($args as $k=>$v)
	echo $k.': '.json_encode($v).PHP_EOL;

}

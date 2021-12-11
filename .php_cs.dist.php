<?php

use Shawnveltman\PhpcsfixerHelper\PhpcsfixerHelper;

$finder = Symfony\Component\Finder\Finder::create()
    ->in([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->name('*.php')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);


$helper = new PhpcsfixerHelper();
$rules = $helper->get_style_rules();

return (new PhpCsFixer\Config())
    ->setRules($rules)
    ->setFinder($finder);

<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src');

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony' => true,
        'ordered_imports' => true,
        'array_syntax' => ['syntax' => 'short'],
        'increment_style' => false,
        'blank_line_after_opening_tag' => true,
        'no_superfluous_phpdoc_tags' => false,
        'yoda_style' => false,
        'phpdoc_align' => false,
        'concat_space' => ['spacing' => 'one'],
               ])
    ->setFinder($finder)
    ->setUsingCache(true);

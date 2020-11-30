<?php
// see https://github.com/FriendsOfPHP/PHP-CS-Fixer

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in([__DIR__])
;

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PHP71Migration:risky' => true,
        '@PHPUnit60Migration:risky' => true,
        'array_syntax' => ['syntax' => 'short'],
        'ordered_imports' => true,
        'declare_strict_types' => false,
        'php_unit_mock_short_will_return' => true,
        'no_extra_blank_lines' => true,
        'no_unused_imports' => true,
    ])
    ->setFinder($finder)
;

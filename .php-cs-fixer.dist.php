<?php

use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

return (new PhpCsFixer\Config())
    ->setParallelConfig(ParallelConfigFactory::detect())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'concat_space' => ['spacing' => 'one'],
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in([
                __DIR__.'/src',
                __DIR__.'/tests',
            ])
    );

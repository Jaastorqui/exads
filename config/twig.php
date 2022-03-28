<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use Odan\Twig\TwigAssetsExtension;
use Psr\Container\ContainerInterface;
use Slim\Views\Twig;
use Twig\Loader\FilesystemLoader;

return function (ContainerBuilder $containerBuilder) {
    // Global Settings Object
    $containerBuilder->addDefinitions([
        Twig::class => function (ContainerInterface $container) {
            // Twig settings
            $settings['twig'] = [
                'path' => __DIR__ . '/../views',
                // Should be set to true in production
                'cache_enabled' => false,
                'cache_path' => __DIR__ . '/../views/tmp',
            ];

            // Twig assets cache
            $settings['assets'] = [
                // Public assets cache directory
                'path' => __DIR__ . '/../public/cache/',
                // Public url base path
                'url_base_path' => 'cache/',
                // Internal cache directory for the assets
                'cache_path' => __DIR__ . '/tmp/twig-assets',
                'cache_name' => 'assets-cache'
            ];

            $twigSettings = $settings['twig'];

            $twig = Twig::create($twigSettings['path'], [
                'cache' => $twigSettings['cache_enabled'] ? $twigSettings['cache_path'] : false,
            ]);

            $loader = $twig->getLoader();
            if ($loader instanceof FilesystemLoader) {
                $loader->addPath(__DIR__ . '/../public', 'public');
            }

            $environment = $twig->getEnvironment();

            // Add Twig extensions
            $twig->addExtension(new TwigAssetsExtension($environment, (array)$settings['assets']));

            return $twig;
        }
    ]);

};
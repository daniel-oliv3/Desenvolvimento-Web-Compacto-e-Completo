<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ce75c3cdaa3089be6bbc3fb41f12011
{
    public static $files = array (
        '9792b02da3111b62997015981f2467d4' => __DIR__ . '/../..' . '/app/config.php',
        'de98e88a9b7b9c3addc53d9f0301b332' => __DIR__ . '/../..' . '/app/helpers/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'b' => 
        array (
            'bng\\System\\' => 11,
            'bng\\Models\\' => 11,
            'bng\\Controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'bng\\System\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/system',
        ),
        'bng\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'bng\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'bng\\Controllers\\BaseController' => __DIR__ . '/../..' . '/app/controllers/BaseController.php',
        'bng\\Controllers\\Main' => __DIR__ . '/../..' . '/app/controllers/Main.php',
        'bng\\Models\\Agents' => __DIR__ . '/../..' . '/app/models/Agents.php',
        'bng\\Models\\BaseModel' => __DIR__ . '/../..' . '/app/models/BaseModel.php',
        'bng\\System\\Database' => __DIR__ . '/../..' . '/app/system/Database.php',
        'bng\\System\\Router' => __DIR__ . '/../..' . '/app/system/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ce75c3cdaa3089be6bbc3fb41f12011::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ce75c3cdaa3089be6bbc3fb41f12011::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5ce75c3cdaa3089be6bbc3fb41f12011::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

namespace Larabra\Str;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class LarabraStrServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $file = __DIR__ . DIRECTORY_SEPARATOR . "helpers.php";
        if (file_exists($file)) {
            require_once($file);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Str::macro('sanitizeName', 'str_sanitize_name');
        Str::macro('sanitizeNumber', 'str_sanitize_number');
        Str::macro('metaphone', 'str_metaphone');
    }
}

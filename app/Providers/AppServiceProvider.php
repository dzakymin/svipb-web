<?php


namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Artisan;
use Livewire\Livewire;
use App\Http\Middleware\InitializeTenancyByDomain;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $parsedUrl = parse_url(URL::current());
        $host = $parsedUrl['host'];

        if (! in_array($host, config('tenancy.central_domains', []))) {
            Livewire::setUpdateRoute(function ($handle) {
                return Route::post('/livewire/update', $handle)
                    ->middleware([
                        'web',
                        InitializeTenancyByDomain::class,
                    ]);
            });
        }

        Artisan::call('route:clear');

    }
}

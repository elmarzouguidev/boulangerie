<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
    
        $this->mapWebRoutes();

        $this->mapLoginRoutes();

        $this->mapUserRoutes();

        $this->mapAdminRoutes();

      
        $this->mapApiRoutes();
        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */

    private function getNameSpace()
    {
        if (request()->is(env('ADMIN_DASH_PREFIX') . '/*')) {

            return $this->namespace . '\Admin';
        }
        if (request()->is(env('ACCOUNT_DASH_PREFIX') . '/*')) {

            return $this->namespace . '\User';
        }
    }
    protected function mapLoginRoutes()
    {
        Route::middleware('web')

            ->namespace($this->getNameSpace())
            ->group(base_path('routes/login.php'));
    }

    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    protected function mapUserRoutes()
    {
        Route::middleware('auth')
            ->prefix(env('ACCOUNT_DASH_PREFIX'))
            ->name('user.')
            ->namespace($this->namespace . '\User')
            ->group(base_path('routes/user.php'));
    }

    protected function mapAdminRoutes()
    {
        Route::prefix(env('ADMIN_DASH_PREFIX'))

            ->middleware(['auth:admin'])
            ->namespace($this->namespace . '\Admin')
            ->name('admin.')
            ->group(base_path('routes/admin.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
}

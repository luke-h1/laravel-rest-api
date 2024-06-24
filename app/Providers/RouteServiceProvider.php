<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
  public function boot()
  {
    $this->routes(function () {
      Route::prefix("api")
        ->middleware("api")
        ->namespace($this->namespace)
        ->group(base_path('routes/api.php'));
    });
  }
};
<?php

namespace SimpleResponse;

use Illuminate\Support\ServiceProvider;

class ResponseServiceProvider extends ServiceProvider {
  /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind(Response::class, Response::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
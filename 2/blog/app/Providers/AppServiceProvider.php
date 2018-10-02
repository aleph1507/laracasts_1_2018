<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \App\Billing\Stripe;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // \View::composer();
        view()->composer('partials._sidebar', function($view) {
          $archives = \App\Post::archives();
          $tags = \App\Tag::has('posts')->pluck('name');
          $view->with(compact('archives', 'tags'));
          // $view->with('archives', \App\Post::archives());
          // $view->with('tags', \App\Tag::has('posts')->pluck('name'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Stripe::class, function() {
          return new \App\Billing\Stripe(config('services.stripe.secret'));
          // return new Stripe('asdasd');
        });
    }
}

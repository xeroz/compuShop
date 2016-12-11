<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
   /**
     * Bootstrap any application services.
     *
     * @return void
     */
   public function boot()
   {
      //
   }

   /**
     * Register any application services.
     *
     * @return void
     */
   public function register()
   {
      $path = 'App\Persistences';

      $this->app->bind($path.'\Laptop\LaptopPersistenceInterface', $path.'\Laptop\LaptopPersistenceEloquent');
      $this->app->bind($path.'\Product\ProductPersistenceInterface', $path.'\Product\ProductPersistenceEloquent');
      $this->app->bind($path.'\WishListProduct\WishListProductPersistenceInterface', $path.'\WishListProduct\WishListProductPersistenceEloquent');
      $this->app->bind($path.'\CategoryProduct\CategoryProductPersistenceInterface', $path.'\CategoryProduct\CategoryProductPersistenceEloquent');
      $this->app->bind($path.'\User\UserPersistenceInterface', $path.'\User\UserPersistenceEloquent');
   }
}

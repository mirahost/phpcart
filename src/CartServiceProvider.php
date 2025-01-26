<?php
namespace Mirahost\Phpcart;

use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('cart', function() {
            return new \Mirahost\Phpcart\Cart;
        });
    }
}

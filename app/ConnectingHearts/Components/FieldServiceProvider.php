<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/06/14
 * Time: 05:48 PM
 */

namespace ConnectingHearts\Components;

use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app['field'] = $this->app->share(function($app)
        {
           $fieldBuilder = new FieldBuilder($app['form'], $app['view'], $app['session.store']);
            return $fieldBuilder;
        });
    }

} 
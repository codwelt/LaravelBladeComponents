<?php
namespace Codwelt\LaravelBladeComponents;



use Illuminate\Support\ServiceProvider;

class LaravelBladeComponentsProvider extends ServiceProvider{

    const NAMESPACE_PROYECT = "laravel_blade_components";


    public function boot()
    {

        //Carga de laas vistas
        $this->loadViewsFrom(__DIR__."Views",self::NAMESPACE_PROYECT);

        //Se publiquen los resources
        $this->publishes([
            realpath(__DIR__.'/public') => public_path(self::NAMESPACE_PROYECT),
        ], self::NAMESPACE_PROYECT);

        $this->registerHelpers();
    }


    private function registerHelpers()
    {
        foreach (glob(__DIR__. "/Helpers/*.php") as $filename){
            require_once $filename;
        }

    }
}
<?php
namespace Codwelt\LaravelBladeComponents;



use Illuminate\Support\ServiceProvider;

class LaravelBladeComponentsProvider extends ServiceProvider{

    const NAMESPACE_PROYECT = "laravel_blade_components";


    public function boot()
    {

        //Carga de laas vistas
        $this->loadViewsFrom(__DIR__ . "/resources/views",self::NAMESPACE_PROYECT);


        //Registrar Lenguaje del paquete

        $this->app["lang"]->addNamespace(self::NAMESPACE_PROYECT, __DIR__ . "/resources/lang");

        //Se publiquen los resources
        $this->publishes([
            realpath(__DIR__.'/public') => public_path(self::NAMESPACE_PROYECT),
        ], self::NAMESPACE_PROYECT . "_assets") ;

        $this->registerHelpers();

    }


    private function registerHelpers()
    {
        foreach (glob(__DIR__ . "/helpers/*.php") as $filename){
            require_once $filename;
        }

    }
}
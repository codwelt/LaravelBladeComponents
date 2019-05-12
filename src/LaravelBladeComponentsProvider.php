<?php
namespace Codwelt\LaravelBladeComponents;



use Illuminate\Support\ServiceProvider;

class LaravelBladeComponentsProvider extends ServiceProvider{

    const NAMESPACE_PROYECT = "laravel_blade_components";


    public function boot()
    {

        //Carga de laas vistas
        $this->loadViewsFrom(__DIR__ . "/../resources/views",self::NAMESPACE_PROYECT);


        //Registrar Lenguaje del paquete

        $this->loadTranslationsFrom(__DIR__ . "/../resources/lang", self::NAMESPACE_PROYECT);


        //Se publiquen los resources
        $this->publishes([
            realpath(__DIR__ . '/public') => public_path(self::NAMESPACE_PROYECT),
        ], self::NAMESPACE_PROYECT . "_assets") ;

        //Por si los usuarios quieren modificar los mensajes de los lenguajes
        $this->publishes([
            realpath(__DIR__. '/../resources/lang') => resource_path("lang/vendor/" . self::NAMESPACE_PROYECT),
        ], self::NAMESPACE_PROYECT . "_lang") ;


        $this->registerHelpers();

    }


    private function registerHelpers()
    {
        foreach (glob(__DIR__ . "/../helpers/*.php") as $filename){
            require_once $filename;
        }

    }
}
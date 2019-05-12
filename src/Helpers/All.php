<?php
if(!function_exists('laravel_blade_components_asset')){
    /**
     * Devuleve la ruta completa de la ubicacion del paquete
     * @param string $path
     * @return string
     */
    function laravel_blade_components_asset($path = '')
    {
        return asset(\Codwelt\LaravelBladeComponents\LaravelBladeComponentsProvider::NAMESPACE_PROYECT . ($path ? DIRECTORY_SEPARATOR . $path : $path));

    }
}

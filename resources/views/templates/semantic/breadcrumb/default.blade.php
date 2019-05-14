

    @if (count($breadcrumbs))
        @component(\Codwelt\LaravelBladeComponents\LaravelBladeComponentsProvider::NAMESPACE_PROYECT . "::core.semantic.breadcrumb.default",["items" => $breadcrumbs])


    @endif
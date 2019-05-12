@if($errors->any())
    @component(\Codwelt\LaravelBladeComponents\LaravelBladeComponentsProvider::NAMESPACE_PROYECT."::templates.core.semantic.message.with-closed",['type' => "negative"])
        @slot("title")
            Errores
        @endslot

        <ul class="list">
            @foreach($errors->all() as $error)
                <li>{{$error}}.</li>
            @endforeach
        </ul>
    @endcomponent
@endif
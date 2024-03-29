@if($errors->any())
    @component(\Codwelt\LaravelBladeComponents\LaravelBladeComponentsProvider::NAMESPACE_PROYECT."::core.semantic.message.with_closed",['type' => "negative"])
        @slot("title")
            @isset($title)
                {{$title}}
            @endisset
        @endslot
        <ul class="list">
            @foreach($errors->all() as $error)
                <li>{{$error}}.</li>
            @endforeach
        </ul>
    @endcomponent
@endif
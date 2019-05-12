<div class="ui {{isset($vertical) ? 'vertical' : ''}} labeled icon menu">
    @isset($items)
        @if(is_array($items))
            @foreach($items as $item)
                <a class="item">
                    <i class="{{$item['icon']}} icon"></i>
                    {{$item['text']}}}
                </a>
            @endforeach
        @endif
    @endisset
</div>
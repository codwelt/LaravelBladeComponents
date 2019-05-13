<div id="{{isset($id) ? $id : ""}}" class="ui {{isset($size) ? $size : ""}} modal">
    @isset($header)
        <div class="header">{{$header}}</div>
    @endisset
    @isset($content)
            <div class="content">
                {{$content}}
            </div>
     @endisset
        @isset($actions)
        <div class="actions">
            {{$actions}}
        </div>
        @endisset
</div>
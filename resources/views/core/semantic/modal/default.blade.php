<div id="{{isset($id) ? $id : ""}}" class="ui {{isset($size) ? $size : ""}} modal">
    @isset($header)
    {{$header}}
    @endisset
    <div class="content">
        {{$slot}}
    </div>
        @isset($actions)
            {{$actions}}
        @endisset
</div>
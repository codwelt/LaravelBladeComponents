<div class="ui {{isset($type) ? $type : ''}} message">
    <i class="close icon"></i>
    <div class="header">
        @isset($header)
            {{$header}}
        @endisset
    </div>
    <p>{{$slot}}</p>
</div>
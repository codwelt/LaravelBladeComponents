<button class="ui {{isset($type) ? $type : ""}}  {{isset($color) ?  $color: "" }} button">
    {{$slot}}
</button>
<div class="ui breadcrumb">
    @isset($items)
        @foreach($items as $item)
            <a href="{{$item['url']}}" class="section">{{$item['title']}}</a>
            <i class="{{isset($divierIcon) ? $divierIcon : "right chevron"}} icon divider"></i>
        @endforeach
    @endisset
</div>
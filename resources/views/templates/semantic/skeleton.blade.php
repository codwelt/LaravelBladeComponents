<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{laravel_blade_components_asset('/semantic/semantic.css')}}" rel="stylesheet">
    <script src="{{laravel_blade_components_asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{laravel_blade_components_asset('/semantic/semantic.js')}}"></script>

    @yield("header")
</head>
<body>
@yield('body')

<script type="text/javascript">

    //Efecto de quitar para mensajes de error
    $('.message .close')
        .on('click', function() {
            $(this)
                .closest('.message')
                .transition('fade')
            ;
        });

    //Incializa Dropdowns
    $('.ui.dropdown').dropdown();

    $('.ui.checkbox').checkbox();
</script>
@yield('scripts')


</body>
</html>
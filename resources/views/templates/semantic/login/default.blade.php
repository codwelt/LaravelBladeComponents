@extends("laravel_blade_components::templates.semantic.skeleton")
@section("title",config('app.name',"Comidas Rapidas"))
@section("header")
    <style type="text/css">
        body {
            background-color: #DADADA;
        }
        body > .grid {
            height: 100%;
        }
        .image {
            margin-top: -100px;
        }
        .column {
            max-width: 450px;
        }
    </style>
@endsection
@section('body')
    <div class="ui container">
        <div class="ui middle aligned center aligned grid">
            <div class="column">
                <h2 class="ui {{isset($form_color) ? $form_color : "teal"}} image header">
                    @isset($url_form_image)
                        <img src="{{$url_form_image}}" class="image">
                    @endisset
                    <div class="content">
                        {{$title_panel}}
                    </div>
                </h2>
                @include(\Codwelt\LaravelBladeComponents\LaravelBladeComponentsProvider::NAMESPACE_PROYECT . "::templates.semantic.errorsValidation")
                <form class="ui large form" action="{{$action}}" method="POST">
                    @csrf
                    <div class="ui stacked segment">
                        <div class="field {{ $errors->has('email') ? 'error' : '' }} ">
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input type="text" name="email" value="{{ old('email') }}" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field {{ $errors->has('password') ? 'error' : '' }}">
                            <div class="ui left icon  input">
                                <i class="lock icon"></i>
                                <input type="password" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label>@lang(\Codwelt\LaravelBladeComponents\LaravelBladeComponentsProvider::NAMESPACE_PROYECT . "::login.remember")</label>
                            </div>
                        </div>

                        <button class="ui fluid large {{isset($form_color) ? $form_color : "teal"}} submit button" type="submit">@lang(\Codwelt\LaravelBladeComponents\LaravelBladeComponentsProvider::NAMESPACE_PROYECT . "::login.submit")</button>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                @lang(\Codwelt\LaravelBladeComponents\LaravelBladeComponentsProvider::NAMESPACE_PROYECT . "::login.forgot_password")
                            </a>
                        @endif
                    </div>
                </form>
                <div class="ui message">
                    @lang(\Codwelt\LaravelBladeComponents\LaravelBladeComponentsProvider::NAMESPACE_PROYECT . "::login.animated_register")? <a href="{{$route_register}}">@lang(\Codwelt\LaravelBladeComponents\LaravelBladeComponentsProvider::NAMESPACE_PROYECT . "::login.register")</a>
                </div>
            </div>
        </div>

@endsection



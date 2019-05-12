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
                <h2 class="ui orange image header">
                    <img src="" class="image">
                    <div class="content">
                        Autenticacion Administrador
                    </div>
                </h2>
                @include(\Codwelt\LaravelBladeComponents\LaravelBladeComponentsProvider::NAMESPACE_PROYECT . "::templates.semantic.errorsValidation")
                <form class="ui large form" action="{{$action}}" method="POST">
                    @csrf
                    <div class="ui stacked segment">
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input type="text" name="username" placeholder="UserName">
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="lock icon"></i>
                                <input type="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <button class="ui fluid large orange submit button" type="submit">@lang(\Codwelt\LaravelBladeComponents\LaravelBladeComponentsProvider::NAMESPACE_PROYECT . "::login.submit")</button>
                    </div>
                </form>

            </div>
        </div>

@endsection



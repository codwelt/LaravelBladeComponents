<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui orange image header">
            <img src="" class="image">
            <div class="content">
                Autenticacion Administrador
            </div>
        </h2>
        @include('Partes.ErrroresValidation')
        <form class="ui large form" action="{{route('admin.login.login')}}" method="POST">
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
                <button class="ui fluid large orange submit button" type="submit">Login</button>
            </div>
        </form>

    </div>
</div>
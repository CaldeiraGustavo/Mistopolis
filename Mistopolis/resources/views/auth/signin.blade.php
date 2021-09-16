@section('content')
    <div class="row">
        <div class="col s12 l10 offset-l1">

            <h5>Autenticação</h5>

            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <form class="col s12" method="POST" action="{{ action('AuthController@login') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="username" name="username" type="text" autocomplete="new-usuario" />
                                    <label for="username">Usuário</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" name="password" type="password" autocomplete="new-senha" />
                                    <label for="password">Senha</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <button type="submit" class="waves-effect waves-light btn">Entrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
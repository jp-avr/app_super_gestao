<link href="{{ asset('css/app2.css') }}" rel="stylesheet">
    <main class="content">

        @if(session('sucesso'))
            <div class="alert alert-success">
                <p>{{session('sucesso')}}</p>
            </div>
         @endif
            <div>
                <a href="{{ route('home') }}">
                    <i class="align-middle me-1" data-feather="arrow-left"></i>
                    Voltar para página inicial
                </a>
            </div>
        <div class="container-fluid p-0 col-8">
            <div class="d-flex justify-content-center">
            <div class="my-3 text-center">
                <h2><b>Login</b></h2>
                <h4 style="font-size: 1rem;">
                    Entre e aproveite
                </h4>
            </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form method="POST" action=" {{ route('post_login') }} " autocomplete="off">
                        @csrf
                        <div class="d-flex justify-content-center">
                        <div class="card col-12 col-md-4 col-sm-16">
                            
                            <div class="card-body d-flex flex-column gap-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <input id="password_usuario" type="password_usuario" placeholder="Senha" class="form-control @error('password_usuario') is-invalid @enderror" name="password_usuario" autocomplete="new-password">
                                        @error('password_usuario')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="mt-2 d-flex justify-content-around">
                                        <button type="submit" id="bt_validar_cpf"class="btn btn-success">Login</button>
                                        
                                        <a href="{{route('registro')}}" class="btn btn-primary px-4">Criar conta</a>
                                    </div> 
                                </div>
                                
                                
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </main>

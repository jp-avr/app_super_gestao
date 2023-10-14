<link href="{{ asset('css/app2.css') }}" rel="stylesheet">
    <main class="content">
        <div class="container-fluid p-0 col-12">

            <a href="{{ route('home') }}">
                <i class="align-middle me-1" data-feather="arrow-left"></i>
                Voltar para página inicial
            </a>
            <div class="d-flex justify-content-center">
            <div class="my-3 text-center">
                <h2><b>Cadastre-se</b></h2>
                <h4 style="font-size: 1rem;">
                    É rápido e fácil
                </h4>
            </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form method="post" action=" {{ route('registro') }} " autocomplete="off">
                        @csrf
                        <div class="d-flex justify-content-center">
                        <div class="card col-12 col-md-4 col-sm-16">
                            
                            <div class="card-body d-flex flex-column gap-3">

                                <div class="row">
                                    <div class="col-md-6">
                                        <input id="name" placeholder="Nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" autocomplete="nome" autofocus>
                                        @error('nome')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <input id="sobrenome" placeholder="Sobrenome" type="text" class="form-control @error('sobrenome') is-invalid @enderror" name="sobrenome" value="{{ old('sobrenome') }}" autocomplete="sobrenome" autofocus>
                                        @error('sobrenome')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

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
                                        <input id="password" type="password" placeholder="Senha" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div>
                                        Data de nascimento
                                    </div>
                                    <div class="col-md-4">                                    
                                        <select class="form-control @error('dia_id') is-invalid @enderror" name="dia_id" id="day" title="dia">
                                            <option value="" selected disabled> Dia </option>
                                            @foreach($dias as $dia)
                                            <option value="{{ $dia->dia_id}}" @if($dia) {{ '' }} @endif>
                                                {{ $dia->dia_nascimento }}
                                            </option>
                                            @endforeach
                                        </select>
                                            @error('dia_id')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>

                                    <div class="col-md-4">          
                                        <select class="form-control @error('mes_id') is-invalid @enderror" aria-label="Month" name="mes_id" id="month" title="month">
                                            <option value="" selected disabled> Mês </option>
                                            @foreach($meses as $mes)
                                            <option value="{{ $mes->mes_id}}" @if($mes) {{ '' }} @endif>
                                                {{ $mes->mes_nascimento }}
                                            </option>
                                            @endforeach
                                        </select>
                                            @error('mes_id')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <select class="form-control @error('ano_id') is-invalid @enderror" aria-label="Year" name="ano_id" id="year" title="year">
                                            <option value="" selected disabled> Ano </option>
                                            @foreach($anos as $ano)
                                            <option value="{{ $ano->ano_id}}" @if($ano) {{ '' }} @endif>
                                                {{ $ano->ano_nascimento }}
                                            </option>
                                            @endforeach
                                        </select>
                                            @error('ano_id')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div> 
                                </div>

                                <div class="row">
                                    <div>
                                        Gênero
                                    </div>
                                    <div class="col-md-4">                                   
                                        <span>
                                            <label class="form-control @error('sexo') is-invalid @enderror">Feminino
                                                <input class="radio" type="radio" value="1" name="sexo">
                                            </label>
                                        </span>
                                    </div>

                                    <div class="col-md-4">          
                                        <span>
                                            <label class="form-control @error('sexo') is-invalid @enderror">Masculino
                                                <input class="radio" type="radio" value="2" name="sexo">
                                            </label>
                                        </span>
                                    </div>

                                    <div class="col-md-4">
                                        <span>
                                            <label class="form-control @error('sexo') is-invalid @enderror">Personalizar
                                                <input class="radio" type="radio" value="3" name="sexo">
                                            </label>
                                        </span>
                                    </div> 
                                </div>

                                <div>
                                    Ao clicar em Cadastre-se, você concorda com nossos Termos, Política de Privacidade e Política de Cookies. Você poderá receber notificações por SMS e cancelar isso quando quiser.
                                </div>

                                <div class="mt-3 d-flex justify-content-center ">
                                    <button type="submit" id="bt_validar_cpf"class="btn btn-success">Cadastre-se</button>
                                </div> 
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </main>

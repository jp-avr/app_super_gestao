<form method="post" action=" {{ route('contatos.store') }}">
    @csrf
    <div>
        <input type="text" placeholder="Nome" name="site_contato_nome" value="{{ old('site_contato_nome')}}" class="{{ $classe }} form-control @error('name') is-invalid @enderror">
        @error('site_contato_nome')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div>
        <input type="text" placeholder="Telefone" name="site_contato_telefone" value="{{ old('site_contato_telefone')}}" class="{{ $classe }}">
        @error('site_contato_telefone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    
    <div>
        <input type="text" placeholder="E-mail" name="site_contato_email" value="{{ old('site_contato_email')}}" class="{{ $classe }}">
        @error('site_contato_email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div>
        <select name="site_contato_motivo_contato" class="{{ $classe }}">            
            <option value="" selected disabled>Qual o motivo do contato?</option>
            <option value="1" {{ old('site_contato_motivo_contato') == 1 ? 'selected' : '' }}>Dúvida</option>
            <option value="2" {{ old('site_contato_motivo_contato') == 2 ? 'selected' : '' }}>Elogio</option>
            <option value="3" {{ old('site_contato_motivo_contato') == 3 ? 'selected' : '' }}>Reclamação</option>
        </select>
            @error('site_contato_motivo_contato')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>

    <div>
        <input type="text" name="site_contato_mensagem" placeholder="Preencha aqui a sua mensagem" class="{{ $classe }}" value="{{ old('site_contato_mensagem')}}">
        @error('site_contato_mensagem')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div>
        <button type="submit" class="{{ $classe }}">ENVIAR</button>
    </div>
</form>
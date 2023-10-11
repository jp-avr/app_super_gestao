<form method="post" action=" {{ route('contatos.store') }} ">
    @csrf
    <input type="text" placeholder="Nome" name="name" class="{{ $classe }}">
    <br>
    <input type="text" placeholder="Telefone" name="celular" class="{{ $classe }}">
    <br>
    <input type="text" placeholder="E-mail" name="email" class="{{ $classe }}">
    <br>
    <select name="motivo_contato" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" placeholder="Preencha aqui a sua mensagem" class="{{ $classe }}"></textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
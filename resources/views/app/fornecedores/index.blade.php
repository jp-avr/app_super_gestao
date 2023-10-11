<h3>Fornecedor</h3>

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome']}}
    <br>
    Status: {{ $fornecedores[0]['status']}}
    <br>
    CNPJ : {{ $fornecedores[1]['cnpj'] ?? 'NÃO INFORMADO'}}
@endisset
<?php

use App\Models\Fornecedor;
use Illuminate\Database\Seeder;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fornecedor::create([
            'fornecedor_nome' => 'Google',
            'fornecedor_uf' => 'MA',
            'fornecedor_email' => 'google@dev.com',
            'fornecedor_site' => 'www.google.com',
        ]);

        Fornecedor::create([
            'fornecedor_nome' => 'Amazon',
            'fornecedor_uf' => 'MA',
            'fornecedor_email' => 'amazon@dev.com',
            'fornecedor_site' => 'www.amazon.com',
        ]);
    }
}

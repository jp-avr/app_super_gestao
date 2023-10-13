<?php

use App\Models\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteContato::create([
            'site_contato_nome' => 'João Pedro',
            'motivo_contato_id' => 1,
            'site_contato_mensagem' => 'Olá. Como vai?',
            'site_contato_telefone' => '(98) 99111-9229',
            'site_contato_email' => 'dev@dev.com'
        ]);
    }
}

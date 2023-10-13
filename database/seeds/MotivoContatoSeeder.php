<?php

use App\Models\MotivoContato;
use Illuminate\Database\Seeder;

class MotivoContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $motivos = ['Dúvida','Elogio','Reclamação'];

        foreach($motivos as $motivo){
            MotivoContato::create([
                'motivo_contato_descricao' => $motivo,
            ]);
        }
    }
}

<?php

use App\Models\Unidade;
use Illuminate\Database\Seeder;

class UnidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unidades = [
            'Miligramas',
            'Gramas',
            'Quilogramas',
        ];

        foreach($unidades as $unidade){
            Unidade::create([
                'unidade' => 'UN',
                'unidade_descricao' => $unidade,
            ]);
        }
    }
}

<?php

use App\Models\Ano;
use Illuminate\Database\Seeder;

class AnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anos = [
            '1995',
            '1996',
            '1997',
            '1998',
            '1999',
            '2000',
            '2001',
            '2002',
            '2003',
            '2004',
            '2005',
            '2006',
        ];

        foreach($anos as $ano) {
            Ano::create([
                'ano_nascimento' => $ano
            ]);
        }
    }
}

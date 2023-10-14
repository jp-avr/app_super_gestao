<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nome' => 'João Pedro',
            'sobrenome' => 'Veras',
            'dia_id' => 25,
            'mes_id' => 4,
            'ano_id' => 6,
            'email' => 'dev@dev.com',
            'sexo' => 2,
            'password' => Hash::make('123'),
        ]);
    }
}

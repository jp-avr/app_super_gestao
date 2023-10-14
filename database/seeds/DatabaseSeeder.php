<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SiteContatoSeeder::class);
        $this->call(FornecedorSeeder::class);
        $this->call(MotivoContatoSeeder::class);
        $this->call(AnoSeeder::class);
        $this->call(MesSeeder::class);
        $this->call(DiaSeeder::class);
        $this->call(UserSeeder::class);
    }
}

<?php

namespace Database\Seeders;

use Database\Factories\PersonaFactory;
use Database\Factories\ProductoFactory;
use Database\Factories\VentaFactory;
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
        PersonaFactory::factoryForModel('persona')->count(15)->create();
        ProductoFactory::factoryForModel('producto')->count(6)->create();
        VentaFactory::factoryForModel('venta')->count(15)->create();
    }
}

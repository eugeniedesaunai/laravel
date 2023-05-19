<?php

namespace Database\Seeders;

use App\Models\Argument;
use Illuminate\Database\Seeder;
use Database\Factories\ArgumentFactory;

class ArgumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Argument::Factory(10)->create();
    }
}

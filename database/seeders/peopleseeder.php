<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\people;

class peopleseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        people::factory()->count(200)->create();
    }
}

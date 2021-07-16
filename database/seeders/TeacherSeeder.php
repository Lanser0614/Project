<?php

namespace Database\Seeders;

use App\Models\teecher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        teecher::factory()->count(15)->create();
    }
}

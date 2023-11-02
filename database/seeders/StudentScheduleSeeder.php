<?php

namespace Database\Seeders;

use App\Models\StudentSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudentSchedule::factory(150)->create();
    }
}

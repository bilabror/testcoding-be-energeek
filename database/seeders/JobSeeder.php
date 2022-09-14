<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = ['Fullstack Developer', 'Frontend Developer', 'Backend Developer', 'UI UX Design', 'DevOps Developer'];

        foreach ($jobs as $job) {
            Job::create([
                'name' => $job,
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Candidate;
use App\Models\SkillSet;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skillsUser1 = [1,2,3,4,5,6,7];
        $skillsUser2 = [2,5,6];


        $user1 = Candidate::create([
            'job_id' => 1,
            'name' => 'Bil Abror',
            'email' => 'bilabror@example.com',
            'phone' => '089533123123',
            'year' => 2004
        ]);

        foreach ($skillsUser1 as $item) {
            SkillSet::create([
                'skill_id' => $item,
                'candidate_id' => $user1->id,
            ]);
        }

        $user2 = Candidate::create([
            'job_id' => 2,
            'name' => 'Budiman',
            'email' => 'budiman@example.com',
            'phone' => '089133153123',
            'year' => 1999
        ]);

        foreach ($skillsUser2 as $item) {
            SkillSet::create([
                'skill_id' => $item,
                'candidate_id' => $user2->id,
            ]);
        }



        

        
    }
}

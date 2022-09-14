<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\ApplyRequest;

// helpers
use App\Helpers\ResponseFormatter;

// models
use App\Models\Candidate;
use App\Models\SkillSet;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ResponseFormatter::success(
            Candidate::with('job')->get(),
            'data successfully displayed'
        );
    }


    public function apply(ApplyRequest $request) {
        try {
        

            $candidate = Candidate::create([
                'job_id' => $request->job_id,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'year' => $request->year,
            ]);

            foreach (explode(',', $request->skill_sets) as $skill) {
                SkillSet::create([
                    'skill_id' => $skill,
                    'candidate_id' => $candidate->id
                ]);
            }
            

            return ResponseFormatter::success([
                'candidate_id' => $candidate->id
            ],'data saved successfully');

        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'There is something wrong',
                'error' => $error,
            ],'ERROR', 500);
        }
    }
}

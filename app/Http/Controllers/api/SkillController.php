<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// helpers
use App\Helpers\ResponseFormatter;

// models
use App\Models\Skill;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ResponseFormatter::success(
            Skill::all(),
            'Data successfully displayed'
        );
    }


}

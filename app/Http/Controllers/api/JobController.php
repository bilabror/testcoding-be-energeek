<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// helpers
use App\Helpers\ResponseFormatter;

// models
use App\Models\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ResponseFormatter::success(
            Job::all(),
            'data successfully displayed'
        );
    }

}

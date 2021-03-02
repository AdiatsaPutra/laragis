<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class DataSurvey extends Controller
{
    public function index()
    {
        $datasurvey = Survey::all();
        return view('datatable', compact('datasurvey'));
    }
}

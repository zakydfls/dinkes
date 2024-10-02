<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function sekertariat()
    {
        return view('departments.sekertariat');
    }
    public function kesmas()
    {
        return view('departments.kesmas');
    }
    public function pelkes()
    {
        return view('departments.pelkes');
    }
    public function pencegahan_pengendalian_penyakit()
    {
        return view('departments.pencegahan_pengendalian_penyakit');
    }
    public function sumber_daya_kesehatan()
    {
        return view('departments.sumber_daya_kesehatan');
    }
}

<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function view(Project $obProject, ProjectType $obProjectType)
    {
        return view('profile', ['obProject' => $obProject::where(['user_id' => Auth::user()->id])->get(), 'obProjectType' => ProjectType::all()]);
    }
}

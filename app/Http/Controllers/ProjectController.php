<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function create(Request $obRequest, Project $obProject)
    {
        if ($obRequest->method() == 'GET') {
            return view('create-project', ['obProjectType' => ProjectType::all()]);
        }

        $obRequest->validate([
            'name' => 'required|unique:project|max:255|min:3',
            'urgency' => 'required',
            'type_id' => 'required',
        ]);

        $obProject->fill([
            'name' => $obRequest->post('name'),
            'description' => $obRequest->post('description'),
            'urgency' => $obRequest->post('urgency') === "on",
            'user_id' => Auth::user()->id,
            'type_id' => ProjectType::where(['type' => $obRequest->post('type_id')])->first()->id,
        ])->save();

        return redirect('/profile');
    }
}

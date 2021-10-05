<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectType;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ApiController extends Controller
{

    public function login(Request $obRequest): JsonResponse
    {
        $obRequest->validate([
            'login' => 'required',
            'password' => 'required',
        ]);
        $bAuthRes = Auth::attempt($obRequest->only('login', 'password'));
        if (!$bAuthRes) return response()->json(['message' => 'failed', 'error' => 'Incorrect login or password.']);
        if (Auth::user()->api_token === "") {
            User::where(['login' => $obRequest->post('login')])->update(['api_token' => $sToken = Str::random(60)]);
            return response()->json(['message' => 'success', 'token' => $sToken]);
        }
        return response()->json(['message' => 'success', 'token' => Auth::user()->api_token]);
    }

    public function createProject(Request $obRequest, Project $obProject): JsonResponse
    {
        $obUser = $this->auth_token($obRequest->post('api_token'));
        if (!$obUser) {
            return response()->json(['message' => 'failed', 'error' => 'Incorrect token.']);
        }
        $obRequest->validate([
            'name' => 'required|unique:project|max:255|min:3',
            'description' => 'required|max:255|min:3',
            'urgency' => 'required',
            'type_id' => 'required',
        ]);

        $obProject->fill([
            'name' => $obRequest->post('name'),
            'description' => $obRequest->post('description'),
            'urgency' => $obRequest->post('urgency') != null || $obRequest->post('urgency') !== 0 ? 1 : 0,
            'user_id' => $obUser->id,
            'type_id' => ProjectType::where(['type' => $obRequest->post('type_id')])->first()->id,
        ])->save();

        return response()->json(['message' => 'success']);
    }

    public function auth_token($sToken)
    {
        if ($obUser = User::where(['api_token' => $sToken])->first()) return $obUser;
        return false;
    }

    public function regenerateToken(Request $obRequest) : JsonResponse
    {
        $obUser = $this->auth_token($obRequest->post('api_token'));
        if (!$obUser) {
            return response()->json(['message' => 'failed', 'error' => 'Incorrect token.']);
        }
        User::where(['api_token' => $obRequest->api_token])->update(['api_token' => $sToken = Str::random(60)]);
        return response()->json(['message' => 'success', 'token' => $sToken]);
    }

}

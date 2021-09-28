<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function register(Request $obRequest, User $obUser)
    {
        if ($obRequest->getMethod() === 'GET') {
            return view('register');
        }
        if (($obValidated = $this->validator($obRequest->post(), User::$rules, User::$messages, User::$ruLabels))->fails()) {

            return back()->withErrors($obValidated)->withInput();
        }
        $obResult = $obUser->fill([
            'login' => $obRequest->post('login'),
            'password' => Hash::make($obRequest->post('password')),
            'email' => $obRequest->post('email'),
            'name' => $obRequest->post('name'),
            'surname' => $obRequest->post('surname'),
            'thirdname' => $obRequest->post('thirdname'),
            'phone' => $obRequest->post('phone'),
            'id_role' => 3,
        ])->save();
        return redirect(route('login'));
    }

    public function login(Request $obRequest)
    {
        if ($obRequest->getMethod() === 'GET') {
            return view('auth');
        }
        if ($res = Auth::attempt($obRequest->only(['login', 'password']))) {
            return redirect('/');
        }
        return 'Выведи тут ошибку Гайд - *https://qna.habr.com/q/423283*';
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    protected function create(Request $request)
    {
        $data = ['name' => $request['user'],
            'email' => $request['email'],
            'password' => $request['password']
        ];
        $validator = validator($data);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        return User::create(['name' => $data['name'], 'email' => $data['email'], 'password' => Hash::make($data['password']),]);
    }

    protected function validator(array $data, array $rules, array $messages, array $ruLabels): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($data, $rules, $messages, $ruLabels);
    }


}

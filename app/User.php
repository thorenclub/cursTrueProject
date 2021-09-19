<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @method static where(array $array)
 */
class User extends Authenticatable
{
//    protected $table = 'user';
    use Notifiable;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login', 'name', 'surname', 'thirdname', 'email', 'password', 'phone',
        'id_role'
    ];
    public static $rules = [
        'login' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string'],
    ];
    public static $messages = [
        'required' => 'Вам необходимо запонить поле :attribute',
        'string' => 'Поле :attribute должно быть строкой'
    ];
    public static $ruLabels = [
        'login' => 'Логин',
        'email' => 'Почта',
        'password' => 'Пароль',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

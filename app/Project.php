<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(array $array)
 */
class Project extends Model
{
    protected $table = 'project';
    public $timestamps = false;
    protected $fillable = [
        "name", "description", "type_id", "urgency", "user_id",
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class languageModel extends Model
{
    protected $table = 'language_skills';
    protected $guarded = ['id'];

    public  function user()
    {
        return $this->hasMany(User::class,'id','user_id');
    }
}

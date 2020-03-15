<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_profiles extends Model
{
    protected $guarded = [''];
    protected $primaryKey = 'user_id';
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

}

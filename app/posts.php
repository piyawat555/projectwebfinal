<?php

namespace App;
use App\User;
use App\post_image;
use App\post_discriptions;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    protected $guarded = [''];
    protected $primaryKey = 'id';
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function postimage(){
        return $this->hasMany(post_image::class,'post_id')->orderBy('created_at','DESC');
    }

    public function postdiscription(){
        return $this->hasOne(post_discriptions::class,'post_id');
    }
}

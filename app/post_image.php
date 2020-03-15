<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\posts;

class post_image extends Model
{
    protected $guarded = [''];
    protected $primaryKey = 'post_id';
    public function post(){
        return $this->belongsTo(posts::class);
    }
}

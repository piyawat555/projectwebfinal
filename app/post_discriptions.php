<?php

namespace App;
use App\posts;
use Illuminate\Database\Eloquent\Model;

class post_discriptions extends Model
{
    protected $guarded = [''];
    protected $primaryKey = 'post_id';
    public function post(){
        return $this->belongsTo(posts::class,'post_id');
    }
}

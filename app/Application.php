<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ['status','observation'];

   public function user(){
       return $this->belongsTo(User::class);
   }

   public function type(){
       return $this->belongsTo(Type::class);
   }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function documents(){
        return $this->hasMany(Document::class);
    }
}

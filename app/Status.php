<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable=['name','description'];

    public function  applications(){
     return $this->hasMany(Application::class);
    }
}

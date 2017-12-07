<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable=['name','description','requiredDocs'];


    public function applications(){
       return $this->hasMany(Application::class);
    }
}

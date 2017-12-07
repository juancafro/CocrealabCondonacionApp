<?php

namespace App;
use \Illuminate\Http\Resources\Json;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable=['name','path'];


    public function application(){
        return $this->belongsTo(Application::class);
    }

    /*public function download(){
        $path=storage_path($this->name);
        return response()->download($path);
    }*/

}

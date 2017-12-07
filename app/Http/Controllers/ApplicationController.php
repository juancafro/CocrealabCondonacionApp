<?php

namespace App\Http\Controllers;

use App\Application;
use App\Role;
use App\Status;
use App\Type;
use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;
class ApplicationController extends Controller
{

    public function create(){
        $resultado =\Auth::user()->role_id == 1;
        if($resultado){
            $types=Type::all();
            return view('applications.create')->with(['user'=>\Auth::user(),'types'=>$types,'docnumber'=>1]);
        }
        return redirect()->route('home');

    }

    public function store(Request $request){

        $files = $request->file('file');
        $application=  new Application();
        $application->observations="";
        $application->status_id=1;
        $application->user_id=auth()->user()->id;
        $application->type_id=$request['type_id'];
        $application->save();

        if(!empty($files)):
           foreach($files as $file):
                 $filename="solicitud_".$application->id."-".$file->getClientOriginalName();
                 Storage::put($filename,file_get_contents($file));
                 $path=Storage::url($filename);

                 $document=new Document();
                 $document->name=$filename;
                 $document->application_id=$application->id;
                 $document->path=$path;
                 $document->save();
           endforeach;
        endif;
        return redirect()->route('home');
    }
    public function review(Application $application){
        $userrole=auth()->user()->role_id;
        if($userrole != 1){
            $documents=$application->documents;
            return view('applications.review')->with(['application'=>$application,'documents'=>$documents]);
        }
        return redirect()->route('home');
    }

    public function show(Application $application){
        return view('applications.show')->with(['application'=>$application]);
    }
    public function update(Application $application,Request $request){
        $application->status_id = $request->get('status_id');
        $application->observations = $request->get('observations');
        $application->save();
        return redirect()->route('home');
    }
}

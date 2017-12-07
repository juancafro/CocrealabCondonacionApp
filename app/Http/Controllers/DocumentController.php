<?php

namespace App\Http\Controllers;
use App\Document;
use \Illuminate\Http\Resources\Json;
class DocumentController extends Controller{


function downloadFile(Document $document){
    $path=storage_path("app/".$document->name);
    return response()->download($path);
}
}
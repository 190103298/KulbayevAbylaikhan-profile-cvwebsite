<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function index() {
        return view('file_upload');
    }
    public function showUploadFile(Request $req) {
        $file = $req->file('image');
        echo 'File name: '. $file -> getClientOriginalName();
        echo '<br>';
        
        echo 'File Extensions: '. $file ->getClientOriginalExtinsions();
        echo '<br>';

        echo 'File Real Path: '. $file ->getRealPath();
        echo '<br>';
        
    }
}

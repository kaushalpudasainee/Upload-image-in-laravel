<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function uploadImage(Request $req)
    {
       if  ($req->hasfile('image-upload'));{
        $image=$req->file('image-upload');
        $image->store('images','public');
        return back();
       }
    }
}

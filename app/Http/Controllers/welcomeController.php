<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function showImage()
    {
        $imagePath = public_path('/public/images/mainimg.png');
        return response()->file($imagePath);
    }

}

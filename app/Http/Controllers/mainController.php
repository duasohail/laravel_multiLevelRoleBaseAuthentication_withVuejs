<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mainModel;

class mainController extends Controller
{
    //

    public function store(Request $req)
    {
       $data = new mainModel();
       $data->name=$req->name;
       $data->email=$req->email;
       $data->password=$req->password;
       $data->save();

       return $data;
    }
}

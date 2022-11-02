<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Streamlabplan;

class StreamlabplanController extends Controller
{
    public function loadplan(){
       
        return response()->json(Streamlabplan::get(), 200);
    }
}

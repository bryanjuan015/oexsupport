<?php

namespace App\Http\Controllers;

use App\Models\supports;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(Request $request, supports $support){
        $search = $request->input('os');
        if($search):
            $showsearch = $support->where('ordem', '=' , $search)->get();
            return view('front.home.index', compact('showsearch'));
        else:
            return view('front.home.index');
        endif;
    }

}

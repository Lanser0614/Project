<?php

namespace App\Http\Controllers;


use App\Filters\GroupFilter;
use App\Models\Group;
use App\Models\teecher;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index(GroupFilter $request, Request $req){

        $teech = teecher::all();
        $group = Group::Filter($request)->paginate(5);




        return view('welcome', compact('teech', 'group'));
    }




}

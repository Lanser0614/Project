<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\teecher;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }


    public function logout(){
        Auth::logout();

        return redirect('/');
    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $group_count = Group::all()->count();
        $teecher_count = teecher::all()->count();
        return view('admin.home', compact('group_count', 'teecher_count'));
    }

    public function teechers()
    {
        $teech = teecher::paginate(7);
        return view('admin.teechers', compact('teech'));
    }

    public function teechersAdd()
    {
        return view('admin.add_teecher');
    }

    public function teechersStore(Request $req)
    {
       $teecher = new teecher();
       $teecher->name_teecher=$req->name_teecher;
       $teecher->name_scencie=$req->name_scencie;

       $teecher->save();

       return redirect('admin/teechers');
    }

    public function teechersSHow(Request $req)
    {
        $teecher = teecher::find($req->id);

        // dd($teecher);
       return view('admin/show_teecher', compact('teecher'));
    }

    public function teechersUpdate(Request $req)
    {
       $teecher = teecher::find($req->id);
       $teecher->name_teecher=$req->name_teecher;
       $teecher->name_scencie=$req->name_scencie;

       $teecher->save();

       return redirect('admin/teechers');
    }


    public function teechersDestroy($id){
        $teecher = teecher::find($id);

        $teecher->delete();
        return back();
    }



    public function table(){
        $group = Group::with('teecher')->get();
        // dd($group);
         return view('admin.table', compact('group'));
    }

    public function tableAdd(){
        $teecher = teecher::all();
        return view('admin.add_table', compact('teecher'));
    }

    public function tableStore(Request $req){

        $group = new Group();
        $group->number_room=$req->number_room;
        $group->teecher_id=$req->teecher_id;
        $group->group_number=$req->group_number;
        $group->science_time=$req->science_time;

        $group->save();

        return redirect('/admin/table');

    }


    public function tableShow($id){
        $group = Group::find($id);
         $teecher = teecher::all();
        //  dd($group);
        return view('admin.show_table', compact('teecher','group'));
    }

    public function tableUpdate(Request $req){

        $group =  Group::find($req->id);
        $group->number_room=$req->number_room;
        $group->teecher_id=$req->teecher_id;
        $group->group_number=$req->group_number;
        $group->science_time=$req->science_time;

        $group->save();

        return redirect('/admin/table');

    }

    public function tableDestroy($id){
        $group =  Group::find($id);
        $group->delete();
        return back();
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        $users = DB::table('members')->get();
        $users = Member::all();
        $men = $users->where('gender', 'Man');
        $women = $users->where('gender', 'Woman');
        return view('welcome', compact('users', 'men', 'women'));
    }

    public function create(){
        return view('pages.form');
    }

    public function store(Request $request){
        $store = new Member();
        $store->name = $request->name;
        $store->gender = $request->gender;
        $store->mail = $request->mail;
        $store->age = $request->age;
        $store->save();
        return redirect('/');
    }
}

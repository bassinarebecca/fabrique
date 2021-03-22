<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programs;

class Program extends Controller
{

    public function accueil()
    {
        return view('accueil');
    }
    public function reservt()
    {
        return view('reservation/reservt');
    }

    public function program(){
        return view('admin.dashboard');
        $program = Programs::all();
        dd($program);
    }


    public function create(Request $request){
        //return $request->input();
       /*$request->validate([
            'username' => 'required',
            'debut_heure' => 'required',
            'fin_heur' => 'required',
            'jour' => 'required',
            'reserve' => 'required',
            'place' => 'required'
        ]);*/

       // dd($request);

        $user = new Programs();
        $user -> id_programs = 1;
        $user -> username = $request -> username;
        $user -> debut_heure = $request->debut_heure;
        $user -> fin_heur = $request->fin_heur;
        $user -> jour = $request -> jour;
        $user -> reserve = 0;
        $user -> place = $request->place;
        $query = $user->save();
        if ($query){
            return redirect ('login');
        }else{
            return back()->with('echec','echec d inscription');
        }
    }
    function logout(){
        if(session()->has('LoggedUsers')){
            session()->pull('LoggedUsers');
            return redirect('dashboard');
        }
    }

}

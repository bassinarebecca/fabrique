<?php

namespace App\Http\Controllers;
use App\Reservation;

use Illuminate\Http\Request;

class Reservations extends Controller
{
    public function reserve(){
        return view('yeah le code marche');
    }



   public function create(Request $request){
    //return $request -> input();
        $request->validate([
            'username' => 'required',
            'debut_heure' => 'required',
            'fin_heur' => 'required',
            'jour' => 'required',
            'reserve' => 'required',
            'place' => 'required'
        ]);

        $user = new Reservation;
        $user -> username = $request -> username;
        $user -> debut_heure = $request->debut_heure;
        $user -> fin_heur = $request->fin_heure;
        $user -> jour = $request -> jour;
        $user -> reserve = $request->reserve;
        $user -> place = $request->place;
        $query = $user->save();
        if ($query){
            return redirect ('login');
        }else{
            return back()->with('echec','echec d inscription');
        }
    }







    // function create(){
    //     //return $request -> input();
    //     request()->validate([
    //         'username' => ['required'],
    //         'debut_heure' => ['required', ],
    //         'fin_heur' => ['required'],
    //         'jour' => ['required'],
    //         'reserve' => ['required'],
    //         'place' => ['required', 'string']
    //     ]);
    //     $reserve = Reservation::create([
    //         'username' =>request('username'),
    //         'debut_heure' =>request('debut_heure'),
    //         'fin_heur' =>request('fin_heur'),
    //         'jour' =>request('jour'),
    //         'reserve' =>request('reserve'),
    //         'place' =>request('place'),
    //     ]);
    // }
}

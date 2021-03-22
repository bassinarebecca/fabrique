<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Users;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class auth extends Controller
{
    public function compte(){
        return view('valide.compte');
    }
    public function reservations(){
        return view('valide.reservation');
    }
    public function login(){
        return view('pages.authentification');
    }
    function register(){
        return view('pages.inscription');
    }

    function create(Request $request){
        //return $request -> input();
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:16',
            'role' => 'required|confirmed'
        ]);
        // si c'est validé avec succès enregistre dans la table users
        $user = new Users;
        $user -> username = $request->username;
        $user -> email = $request->email;
        $user -> password =Hash::make( $request -> password);
        $user -> role = $request->role;
        $query = $user->save();



        //$query= DB::table('users')
                    //->insert([
                        //'username' => $required->username,
                       // 'email' => $required->email,
                       // 'password' => Hash::make($required->password),
                        //'role' => $required->role
                    //]);

        if ($query){
            return redirect ('send-email');
        }else{
            return back()->with('echec','echec d inscription');
        }
    }
    function check(Request $request){
        //return $request -> input();
        //valide requete
        $request -> validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:16',
        ]);
        // si c'est valide avec succes connecter avec succes
         $user = users::where('email','=', $request->email)->first();
         if($user){
                if (Hash::check($request->password, $user->password)){
                    //si le mot de passe marche redirige vers la page ...
                    $request->session()->put('LoggedUsers', $user->id);
                    if ($user='admin'){

                        return redirect('profile');
                    }else{
                        return redirect('accueil');
                    }

                }else{
                return back()->with('echec','echec de connexion password incorrect');
            }
         }else{
            return back()->with('echec','echec de connexion email incorrect');

    }
    }
    function profile(){
        if (session()->has('LoggedUsers')) {
            $user = users::where('id', '=', session('LoggedUsers'))->first();
            $date = [
                        'LoggedUsersInfo'=>$user,
            ];
    }

        return view('admin.dashboard', $date);
    }
    function logout(){
        if(session()->has('LoggedUsers')){
            session()->pull('LoggedUsers');
            return redirect('login');
        }
    }
    public function deconnexion(){
        auth()->logout();
        return redirect('/register');
    }



    public function admin(){
        return view('pages.authentification');
    }
    public function guard(){
        Auth::guard('admin');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    function generationMDP()
    {
        $tmpMDP = "";
        $rand = 0;
        for ($i=0; $i < 15; $i++) 
        { 
            $rand = chr(rand(33,126));
            $tmpMDP .= $rand;
        }
        return $tmpMDP;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required'
        ]);
        if($validator->fails() or $request->password!=$request->password2)
        {
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
         $mdp=$this->generationMDP();
        $user = new User();
        $user->name = $request->name;
        $user->password=$mdp;
        $user->email=$request->email;
        $user->expiration = date("Y-m-d", strtotime("+3 days"));
       $email = new mailController();
       $email->sendNewMDP($user);
        $user->password=Hash::make("fom");
        $user->save();
        return redirect("user-gestion");
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     function show($id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function edit(Request $request)
    {   
        
        if($request->mdp)
        {
            $mdp = $this->generationMDP();
            $validator = Validator::make($request->all(), [
                'mail' => 'required',
                'mail2' => 'required',
            ]);
            if($validator->fails() or $request->mail != $request->mail2 ){
                return back()->withInput($request->except('key'))
                ->withErrors($validator);
            }
            $user = User::where('email', $request->mail)->first();
            if($user==NULL)
                return back();
            $user->password = $mdp;
            $user->expiration = date("Y-m-d", strtotime("+3 days"));
           $email = new mailController();
           $email->sendMDP($user);
            $user->password=Hash::make("fom");
            $user->save();
            return redirect("admin");
        }
        else
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                "email" => "required",
            ]);
    
            if($validator->fails())
            {
                return back()->withInput($request->except('key'))
                ->withErrors($validator);
            }
            $user = User::where('id', $request->id)->first();
            $user->email = $request->email;
            $user->name = $request->name;
            $user->save();
            return redirect("user-gestion");
        }
    }
    
   function change(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'mdp1' => 'required',
                'mdp2' => 'required'
            ]);
            
            if($validator->fails() ){
                
                return back()->withInput($request->except('key'))
                ->withErrors($validator);
            }

        $user = User::where('email', $request->session()->get("email"))->first();
        
        if($request->mdp1!=$request->mdp2)
            return back();
        
        $user->password=Hash::make($request->mdp1);
        $user->expiration=NULL;
        Auth::logout();
        $user->save();   
       return redirect("admin");
    }
    
    function authenticate(Request $request)
  {
        
      if(!empty($request->email)){
          
            $credentials = $request->only('email','password');
          
            $exp = User::where('email', $request->email)->select('expiration')->first();
            if($exp!=NULL){
                $today=date("Y-m-d", strtotime("now"));
          
                if($today>$exp->expiration and $exp->expiration!=NULL)
                {
                    return redirect("mdp-oublie");
                }
          
                if (Auth::attempt($credentials) and $today<=$exp->expiration and $exp->expiration!=NULL) 
                {
                    Auth::logout();
                    $request->session()->regenerate();
                    $request->session()->put('email',$request->email);
                    return redirect()->intended('mdp-changement');
                }
          
                if (Auth::attempt($credentials) and $exp->expiration==NULL ) 
                {
                    Auth::logout();
                    Cookie::queue(Cookie::forget('souvenir'));
                    Cookie::queue(Cookie::forget('email'));
                    Cookie::queue(Cookie::forget('password'));
                    if($request->souvenir!=NULL)
                    {
                        Cookie::queue(Cookie::forever('souvenir',1)); 
                        Cookie::queue(Cookie::forever('email',$request->email));
                        Cookie::queue(Cookie::forever('password',$request->password));
                    }
                    $request->session()->regenerate();

                    return redirect()->intended('accueil-admin');
                }
            }
        }
        return back()->withErrors([
            'email' => "yes",
        ]);
    }

    
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     function destroy($id)
    {
        //
    }
        
    function deconnection(Request $request)
    {
        $request->session()->forget('email');
        Auth::logout();
        return redirect('admin');
    }
}
    
    


<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
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
            $user->password = $mdp;
            $user->expiration = date("Y-m-d", strtotime("+3 days"));
            $user->save();
            
            return redirect("admin");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

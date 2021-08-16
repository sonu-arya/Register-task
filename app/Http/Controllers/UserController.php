<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= Register::all();
        return view('manageUsers',["users"=>$users]);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->input('id');
        $editName=$request->input('editName');
        $editEmail=$request->input('editEmail');
        $editGender=$request->input('editGender');
        $editPassword=$request->input('password');
        $user=Register::find($id);
        if(!empty($user))
        {
                if($editName!=null)
                {
                    $user->name=$editName;
                    $user->save();
                }
                if($editEmail!=null)
                {
                    $user->email=$editEmail;
                    $user->save();
                }
                if($editGender!=null)
                {
                    $user->gender=$editGender;
                    $user->save();
                }
                if($editPassword!=null)
                {
                    $user->password=$editPassword;
                    $user->save();
                }
                $user->save();
                return back();
        }
        else
       {
           echo 'this user class not found';
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=Register::find($id);  
        if(!empty($user))
        {
                $user->delete();  
                return back();
         }
            
        
        else
        {
            echo 'this user class not found';
        }
    
    }
}

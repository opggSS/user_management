<?php

namespace App\Http\Controllers;

use App\User;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $users = User::all();
      return view('users.index')->withUsers($users);
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
          'last_name' => 'required|max:127',
          'email' => 'required|max:127|email|unique:users,email',
          'password' => 'required|max:127|min:6|required_with:password_confirm|same:password_confirm',
          'password_confirm' => 'required|max:127|min:6',
        ));

        $user = new User;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->disabled = $request->disabled;
        $user->password = Hash::make($request->password);

        $user->save();

        Session::flash('success', 'New user has been created');
        return redirect()->route('users.index');
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
      $user = User::find($id);
   
      $user->first_name = $request->first_name;
      $user->last_name = $request->last_name;
      $user->email = $request->email;
      $user->address_type = $request->address_type;
      $user->street = $request->street;
      $user->city = $request->city;
      $user->province = $request->province;
      $user->country = $request->country;
      $user->postal_code = $request->postal_code;
      $user->address_default = $request->address_default;
      $user->contact_type = $request->contact_type;
      $user->contact_value = $request->contact_value;
      $user->contact_default = $request->contact_default;
      $user->disabled = $request->disabled;

      $user->save();     
      Session::flash('success', 'User '.$user->last_name.' was successfully updated.');
      return redirect()->route('users.index');
      
    }

    public function show($id) {

      $user = User::find($id);
      return view('users.show')->withUser($user);
    }
    public function edit ($id) {
      $user = User::find($id);
      return view('users.edit')->withUser($user);
    }

    public function destroy($id) {
      
      $user = User::find($id);
      $username = $user->last_name;
      $user->delete();
      Session::flash('success', $username.' was successfully deleted.');
      return redirect()->route('users.index');    
    }

  }
<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as AuthUser;

class CommercialeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $commerciale = User::where('role_name','commerciale')->get();
        return view('admin.commerciale.commerciale',compact('commerciale'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.commerciale.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $password = Str::of($request->email)->before('@');
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'tel' => ['required','digits_between:10,12'],
            'ville' => ['required', 'string', 'max:255'],
            'pays' => ['required', 'string', 'max:255'],
            'zip_code' => ['required', 'string', 'max:255'],
        ]);
        $password = strtolower($password);
        $user = User::create([
            'name' => strtolower($request->name),
            'email' => strtolower($request->email),
            'password' => Hash::make($password),
            'phone_number' => $request->tel,
            'ville' => strtolower($request->ville),
            'pays' => strtolower($request->pays),
            'zip' => strtolower($request->zip_code),
            'status' => 1,
            'role_name'=> 'commerciale'
        ]);
        return redirect()->route('commerciale.index')->with('success','Votre Commerciale a été crée!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
    }
}

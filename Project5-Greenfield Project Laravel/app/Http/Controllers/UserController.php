<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $users = User::all();
        return view('dashboard.manage_users', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validForm($request);
        if ($request->hasFile('user_image')) {
            //save photo in to folder
            $file_exetension = $request->user_image->getClientOriginalExtension();
            $file_name = time() . "." . $file_exetension;
            $path = 'images/user_images';
            $request->user_image->move($path, $file_name);
        } else {
            $file_name = "default.png";
        }
        // insert in to database 
        $user = new User;
        $user->name           = $request->input('name');
        $user->email          = $request->input('email');
        $user->mobile         = $request->input('mobile');
        $user->is_admin       = $request->input('is_admin');
        $user->password       = $request->input('password');
        $user->user_image     = $file_name;
        $user->save();
        return redirect('/manage_users');
    }




    public function validForm(Request $request)
    {
        $request->validate([


            'name'         => 'required',
            'email'        => 'required',
            'mobile'       => 'required',
            'is_admin'     => 'required',
            'password'     => 'required',
        ]);
        /* $input= $request->input(); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.edit_users', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //save photo in to folder
        if ($request->hasFile('user_image')) {
            $file_exetension = $request->user_image->getClientOriginalExtension();
            $file_name = time() . "." . $file_exetension;
            $path = 'images/user_images';
            $request->user_image->move($path, $file_name);
        } else {
            $file_name = User::find($id)->user_image;
        }

        if ($request->filled(['is_admin'])) {
            $is_admin = $request->input('is_admin');
        } else {
            $is_admin = User::find($id)->is_admin;
        }

        User::where("id", $id)->update([

            'name'        => $request->input('name'),
            'email'       => $request->input('email'),
            'mobile'      => $request->input('mobile'),
            'password'    => $request->input('password'),
            'user_image'  => $file_name,
            'is_admin'    => $is_admin,


        ]);


        return redirect('/manage_users');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        User::destroy($id);

        return redirect('/manage_users');
    }
}

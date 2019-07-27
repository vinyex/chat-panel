<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendingEmail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modules.user.index');
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!empty($request->password)) {
            $update_user = User::find($id)->update([
                'name' => $request->fullname,
                'username' => $request->username,
                'password' => $request->password,
                'email' => $request->email,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        } else {
            $update_user = User::find($id)->update([
                'name' => $request->fullname,
                'username' => $request->username,
                'email' => $request->email,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }

        if ($update_user) {
            return response()->json('Data updated');
        } else {
            return response()->json('Data failed');
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
        //
    }

    /**
     * Sending Email with Mailtrap
     */
    public function sendEmail($user)
    {
        $userData = User::where('username',$user)->first();
        if (!empty($userData)) {
            $userEmail = $userData->email;
            Mail::to($userEmail)
                ->send(new SendingEmail($userData));
            return 'E-mail sent!';
        } else {
            return 'Something went wrong.';
        }
    }
}

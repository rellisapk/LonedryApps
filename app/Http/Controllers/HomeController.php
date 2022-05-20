<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function editProfile($id)
    {
        $user = User::findOrFail($id);

        return view("profile", compact("user"));
    }
    public function updateProfile(Request $request, $id) {
        // $this->validate($request, [
        //     "name" => "required|string",
        //     "address" => "required|string",
        //     "email" => "required|email|unique:users",
        //     "password" => "required",
        //     "birth" => "required",
        //     "gender" => "required",
        //     "phone" => "required|numeric"
        // ]);

        $user = User::where('id', $id)->first();

            if ($user->password != $request->password) {
                $user->update([
                    "name" => $request->name,
                    "address" => $request->address,
                    "email" => $request->email,
                    "password" => Hash::make($request->password),
                    "birth" => $request->birth,
                    "gender" => $request->gender,
                    "phone" => $request->phone
                ]);
            } else {
                // Jika user tidak mengganti passwordnya

                $user->update([
                    "name" => $request->name,
                    "address" => $request->address,
                    "email" => $request->email,
                    "password" => $request->password,
                    "birth" => $request->birth,
                    "gender" => $request->gender,
                    "phone" => $request->phone
                ]);
            }
        return redirect(route("profile.edit", $user->id))->with(["success" => "User berhasil diupdate!"]);
    }
}


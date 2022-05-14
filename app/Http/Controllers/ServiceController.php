<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function services()
    {
        // $user = User::findOrFail('id');
        return view('order.services');
    }
    public function riwayat()
    {
        return view('order.riwayat');
    }
}

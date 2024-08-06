<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function view()
    {
        $user = [
            'name' => 'Wade Wilson',
            'email' => 'dummy@cisco.com',
            'joined' => '2024-08-0'
        ];

        return view('user-profile', compact('user'));
    }
}

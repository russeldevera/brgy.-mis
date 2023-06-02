<?php

namespace App\Controllers;

class MIS extends BaseController
{
    public function Display_Dashboard()
    {
        return view('dashboard');
    }

    public function Display_Residents()
    {
        return view('residents_list');
    }

    public function Display_Users()
    {
        return view('users');
    }

    public function Display_Account()
    {
        return view('my_account');
    }

    public function Display_Map()
    {
        return view('brgy_map');
    }
}

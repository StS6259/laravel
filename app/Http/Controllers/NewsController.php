<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NewsController extends Controller
{
    public function index()
    {
        $users = [
            '0' => [
                'name' => 'Tanya',
                'email' => 'tanya@test.com'
            ],
            '1' => [
                'name' => 'Jora',
                'email' => 'jora@test.com'
            ]
        ];
        return view('news', compact('users'));
    }


}

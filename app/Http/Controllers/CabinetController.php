<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CabinetController extends Controller
{
    public function index() {
        $news = "This is user's news";
        return view('admin.users.index', compact('news'));
    }

    public function create()
    {
        return view('admin.users.add_article');
    }

    public function store()
    {

    }

}

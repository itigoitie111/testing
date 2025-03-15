<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use APp\Http\Requests\TestingRequest;


class TestingController extends Controller
{


    public function index()
    {
        return view('index');
    }


    public function login()
    {
        return view('login');
    }

    public function admin()
    {
        return view('admin');
    }


    public function register()
    {
        return view('register');
    }


    public function confirm(TestingRequest $request)
    {
        $content = $request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', compact('contact'));
    }

    public function store(TestingRequest $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        Contacts::create($contact);
        return view('thanks');
    }
}

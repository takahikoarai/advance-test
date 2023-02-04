<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\IndexRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(IndexRequest $request)
    {
        $inputs = $request->all();
        $request->session()->put('inputs', $inputs);
        var_dump($inputs);
        return view('confirm', ['inputs' => $inputs]);
    }

    public function edit()
    {

    }

    public function create(IndexRequest $request)
    {

    }

    public function getAll()
    {

    }

    public function delete()
    {

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\IndexRequest;

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
        return view('confirm', ['inputs' => $inputs]);
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

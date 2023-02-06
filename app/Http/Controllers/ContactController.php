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
        return view('confirm', ['inputs' => $inputs]);
    }

    // 「修正するというリンクを押すとお問い合わせページに戻してください。 その際に、入力データが保たれるようにしてください」
    // を実装したいけど悩み中
    public function edit(IndexRequest $request)
    {
    }

    public function create(Request $request)
    {
        $inputs = $request->all();
        Contact::create($inputs);
        $request->session()->forget('inputs');
        return view('thanks');
    }

    public function getAll()
    {

    }

    public function delete()
    {

    }

}

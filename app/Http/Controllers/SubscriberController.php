<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends Controller
{
    public function index()
    {
        $allSubscribers=Subscriber::orderBy('name','asc')->get();
        $subscribers=Subscriber::orderBy('name','asc')->paginate(2);
        $page=Page::where('code','subscribers')->first();
        return view('pages.subscribers',compact('allSubscribers','subscribers','page'));
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name'             =>  ['required'],
            'email'            =>  ['required','unique:subscribers','email'],
        ])->validate();

        Subscriber::create([
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'status'    =>  true,
        ]);

        return Redirect::back()->with('success','Subscribed!');
    }
}

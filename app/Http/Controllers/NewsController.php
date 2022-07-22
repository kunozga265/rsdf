<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);
        $page=Page::where('code','news')->first();
        return view('pages.news.index')->with('news',$news)->with('page',$page);
    }

    public function show($slug)
    {
        $news=News::where('slug',$slug)->first();
        $page=Page::where('code','news')->first();

        if(is_object($news)){
            $link=env('APP_URL')."/news/view/".$slug;
            $share = \Share::page(
                $link,
                '',
            )
                ->facebook()
                ->twitter()
                ->linkedin();
            /*->telegram()
            ->whatsapp()
            ->reddit();*/

            return view('pages.news.show',compact('news','page','share'));
        }else
            return Redirect::route('news')->with('error','News article not found');
    }

    public function create()
    {
        $page=Page::where('code','news')->first();
        return view('pages.news.create')->with('page',$page);

    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'photo'             =>  ['required'],
            'title'             =>  ['required'],
            'body'              =>  ['required'],
            'description'       =>  ['required'],
        ])->validate();

        $fileName=Str::slug($request->title)."-".uniqid().".".$request->photo->extension();
        $request->photo->move(public_path('images/news'), $fileName);

        $slug=Str::slug($request->title)."-".date("Y-m-d");

        News::create([
            'title'             =>  ucwords($request->title),
            'slug'              =>  $slug,
            'photo'             =>  'images/news/'.$fileName,
            'body'              =>  $request->body,
            'description'       =>  $request->description,
        ]);

        return Redirect::route('news')->with('success','News article created!');
    }

    public function edit($slug)
    {
        $news=News::where('slug',$slug)->first();
        $page=Page::where('code','news')->first();
        if(is_object($news)){
            return view('pages.news.edit')->with('news',$news)->with('page',$page);
        }else
            return Redirect::route('news')->with('error','News article not found');

    }

    public function update(Request $request, $slug)
    {

        $news=News::where('slug',$slug)->first();

        if(is_object($news)){

            Validator::make($request->all(), [
                'title'             =>  ['required'],
                'body'              =>  ['required'],
                'description'       =>  ['required'],
            ])->validate();

            // initialise photo
            $photo=$news->photo;

            //if photo is set then upload image
            if (isset($request->photo)){
                $fileName=Str::slug($request->title)."-".uniqid().".".$request->photo->extension();
                $request->photo->move(public_path('images/news'), $fileName);

                //delete old image
                File::delete($photo);
                $photo='images/news/'.$fileName;
            }

            $news->update([
                'title'             =>  ucwords($request->title),
                'photo'             =>  $photo,
                'body'              =>  $request->body,
                'description'       =>  $request->description,
            ]);

            return Redirect::route('news.show',['slug'=>$news->slug])->with('success','News article updated!');

        }else
            return Redirect::route('news')->with('error','News article not found');


    }

    public function destroy($slug)
    {
        $news=News::where('slug',$slug)->first();
        if(is_object($news)){

            //delete old image
            File::delete($news->photo);

            $news->delete();

            return Redirect::route('news')->with('success','News article deleted!');
        }else
            return Redirect::route('news')->with('error','News article not found');

    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('images/news'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/news/'.$fileName);
            $msg = 'Image successfully uploaded';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}

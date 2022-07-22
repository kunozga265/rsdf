<?php

namespace App\Http\Controllers;

use App\Mail\ContactUSMail;
use App\Models\News;
use App\Models\Page;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function home()
    {
        $page=Page::where('code','home')->first();
        $news = News::latest()->limit(3)->get();
        return view('pages.home')->with('page',$page)->with('news',$news);
    }
    public function ourActivities()
    {
        $page=Page::where('code','our-activities')->first();
        return view('pages.our-activities')->with('page',$page);
    }
    public function ourAchievements()
    {
        $page=Page::where('code','our-achievements')->first();
        return view('pages.our-achievements')->with('page',$page);
    }
    public function partnerships()
    {
        $page=Page::where('code','partnerships')->first();
        return view('pages.partnerships')->with('page',$page);
    }
    public function futurePlans()
    {
        $page=Page::where('code','future-plans')->first();
        return view('pages.future-plans')->with('page',$page);
    }
    public function contactInfo()
    {
        $page=Page::where('code','contact-info')->first();
        return view('pages.contact-info')->with('page',$page);
    }
    public function objectives()
    {
        $page=Page::where('code','objectives')->first();
        return view('pages.objectives')->with('page',$page);
    }
    public function ngoManagement()
    {
        $page=Page::where('code','ngo-management')->first();
        return view('pages.ngo-management')->with('page',$page);
    }
    public function fundingGuarantee()
    {
        $page=Page::where('code','funding-guarantee')->first();
        return view('pages.funding-guarantee')->with('page',$page);
    }
    public function rsdfRegionOffice()
    {
        $page=Page::where('code','rsdf-region-office')->first();
        return view('pages.rsdf-region-office')->with('page',$page);
    }

    public function uploadPhoto(Request $request)
    {
        Validator::make($request->all(), [
            'code'             =>  ['required'],
            'photo'            =>  ['required'],
        ])->validate();

        $page=Page::where('code',$request->code)->first();

        if(is_object($page)){

            // initialise photo
            $photo=$page->photo;

            //if photo is set then upload image
            if (isset($request->photo)){
                $fileName=$page->code."-".uniqid().".".$request->photo->extension();
                $request->photo->move(public_path('images/pages'), $fileName);

                //delete old image
                File::delete($photo);
                $photo='images/pages/'.$fileName;
            }

            $page->update([
                'photo'             =>  $photo,
            ]);

            return Redirect::back()->with('success','Photo updated!');

        }else
            return Redirect::back()->with('error','Error occurred');
    }

    public function contact(Request $request)
    {
        Validator::make($request->all(), [
            'name'             =>  ['required'],
            'email'            =>  ['required'],
            'message'          =>  ['required'],
        ])->validate();

        Mail::to('kunozgamlowoka@gmail.com')->send(new ContactUSMail($request->name,$request->message,$request->email));

        return Redirect::back()->with('success','Message sent!');

    }

    public function changePassword(Request $request)
    {
        $user=User::find(Auth::id());

        Validator::make($request->all(), [
            'password' => ['required', 'string','min:8'],
            'newPassword'=> ['required', 'string','min:8']
        ])->validate();

        if(Hash::check($request->password, $user->password)){
            $user->forceFill([
                'password' => Hash::make($request->newPassword),
            ])->save();
            return Redirect::back()->with('success','Password updated!');
        }else
            return Redirect::back()->with('error',"The provided password does not match your current password.");

    }
}

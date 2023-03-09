<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use File;

class AdController extends Controller
{
    public function index()
    {
        $ads = Ad::all();
        return view('pages.home', compact('ads'));
    }

    public function addAd()
    {
        return view('pages.add-ad');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name'=>'required|unique:ads',
            'describe'=>'required',
            'city'=>'required',
            'photo'=>'mimes:jpeg,png,gif'
        ]);
    //     if(request()->hasFile('photo')){
            $path = $request->file('photo')->store('public/images');
            $fileName = str_replace('public/', '', $path);
    //     }
        Ad::create([
            'name'=>request('name'),
            'describe'=>request('describe'),
            'city'=>request('city'),
            'photo'=>$fileName
        ]);
        return redirect('/');
    }

    public function showAd(Ad $ad){
        return view('pages.show-ad',compact('ad'));
    }

    public function editAd(Ad $ad){
        return view('pages.edit-ad',compact('ad'));
    }

    public function storeUpdate(Ad $ad,Request $request){
        if(request()->hasFile('photo')){
            File::delete(storage_path('app/public/'.$ad->photo));
            $path = $request->file('photo')->store('public/images');
            $fileName = str_replace('public/', '', $path);
            Ad::where('id', $ad->id)->update(['photo'=>$fileName]);
        }
        Ad::where('id', $ad->id)->update(
            $request->only(['name', 'describe', 'city'])
        );
        return redirect('/ad/'.$ad->id);
    }

    public function deleteAd(Ad $ad){
        $ad->delete();

        return redirect('/');
    }
}

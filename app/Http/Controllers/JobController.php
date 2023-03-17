<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function newJob(Request $request){

        $job = new Job();
        $job->title=$request->title;
        $job->desc=$request->desc;
        $job->location=$request->location;
        $job->type=$request->type;
        $job->category=$request->category;
        $job->date=$request->date;
        $job->company_name=$request->company_name;
        $job->company_website=$request->company_website;
        $job->comp_logo=$this->saveImage($request);
        $job->google=$request->google;
        $job->facebook=$request->facebook;
        $job->linkedin=$request->linkedin;
        $job->twitter=$request->twitter;
        $job->instagram=$request->instagram;
        $job->save();
        return back();
    }
    public function saveImage($request){
        $image=$request->file('comp_logo');
        $imageName=rand().".".$image->getClientOriginalName();
        $directory='adminAssets/upload/company-logo';
        $imgUrl=$directory.$imageName;
        $image->move($directory,$imageName);
        return $imgUrl;
    }
}

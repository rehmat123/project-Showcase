<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Project;
use App\User;
use Auth;
use Image;
use Route;
use Input;

class ProjectController extends Controller
{
     public function create(){
        if (Auth::check()) {
             $items = User::pluck('name', 'id');
        return view('project.create',compact('items'));
        }
        else{
        return redirect('/login');
        }
       
    }
     public function store(Request $request){
      
       $Project = new Project;


        $Project->project_title = $request->project_title;
        $Project->project_description = $request->project_description;
        $Project->project_type = $request->project_type;

        $avatar=$request->file('project_avatar');
        $filename=time(). "." . $avatar->getClientOriginalExtension();
         Image::make($avatar)->resize(500, 400)->save(public_path('/uploads/images/'. $filename));
        $Project->project_avatar=$filename;
        $Project->save();
        $request->session()->flash('alert-success', 'Project was successful added!');
         return redirect('project/create');
    
        
    }
     public function edit($id) {
    $project = Project::find($id);
    $items = User::pluck('name', 'id');


     return view('project.edit', compact('project'),compact('items'));
   }
    public function update(Request $request, $id)
    {
            // store
            $project = Project::find($id);
            $project->project_title = Input::get('project_title');
            $project->project_type = Input::get('project_type');
            $project->project_description = Input::get('project_description');
            $avatar=$request->file('project_avatar');
            if( $request->hasFile('project_avatar')){
             $filename=time(). "." . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(500, 400)->save(public_path('/uploads/images/'. $filename));
            $project->project_avatar=$filename;
              }
            else{ 
              }
            $project->save();
            $request->session()->flash('alert-success', 'Project was successful Updated!');
         return redirect('project/edit/'.$id);
    }
     public function all(Request $request)
    {
        $project = Project::paginate(6);

        if ($request->ajax()) {
            $view = view('data',compact('project'))->render();
            return response()->json(['html'=>$view]);
        }

        return view('project.search',compact('project'));
    }

     public function welcome(Request $request)
    {
        $project = Project::paginate(6);

        if ($request->ajax()) {
            $view = view('data',compact('project'))->render();
            return response()->json(['html'=>$view]);
        }

        return view('welcome',compact('project'));
    }




    
     public function delete(Request $request,$id){
       $deleteproject = Project::find($id);
       $deleteproject->delete();
     $request->session()->flash('alert-success', 'Project was successful Deleted!');
       return redirect('/home');
        
    }
}

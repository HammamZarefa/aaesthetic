<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    public function team(){
        $teams = Team::all();
        return view('team',compact('teams'));
    }

    public function admin() {
        $teams = Team::all();
        return view('admin.team',compact('teams'));
    }

    public function add() {
        return view('admin.team_add');
    }

    public function store(Request $request) {

        $name_ar = $request->name_ar;
        $name_en = $request->name_en;
        $job_ar = $request->job_ar;
        $job_en = $request->job_en;
        $slogan_en = $request->slogan_en;
        $slogan_ar = $request->slogan_ar;
        $desc_en = $request->desc_en;
        $desc_ar = $request->desc_ar;

        $data = [
            'ar' => [
                'name' => $name_ar,
                'job' => $job_ar,
                'slogan' => $slogan_ar,
                'team_desc' => $desc_ar
            ],

            'en' => [
                'name' => $name_en,
                'job' => $job_en,
                'slogan' => $slogan_en,
                'team_desc' => $desc_en
            ]
        ];

        if($request->file('image')){
            $file=$request->file('image');
            
            $path = 'images/team/';
            $name=$file->getClientOriginalName();
            $name = $path.$name;
            $file->move($path,$name);
            
            $data['team_img'] = $name;
        }

        $team = Team::create($data);
        
        return redirect('admin/team')->with('message', 'New Member has been added successfully');
    }

    public function destroy($id) {
        $team = Team::where('id',$id)->delete();
        return redirect()->back()->with('message', 'The member has been deleted Successfully.');
    }

    public function edit($id) {
        $team = Team::where('id',$id)->first();
        return view('admin/team_edit',compact('team'));
    }

    public function update(Request $request,$id) {

        $team = Team::where('id',$id)->first();

        $name_ar = $request->name_ar;
        $name_en = $request->name_en;
        $job_ar = $request->job_ar;
        $job_en = $request->job_en;
        $slogan_en = $request->slogan_en;
        $slogan_ar = $request->slogan_ar;
        $desc_en = $request->desc_en;
        $desc_ar = $request->desc_ar;

        $data = [
            'ar' => [
                'name' => $name_ar,
                'job' => $job_ar,
                'slogan' => $slogan_ar,
                'team_desc' => $desc_ar
            ],

            'en' => [
                'name' => $name_en,
                'job' => $job_en,
                'slogan' => $slogan_en,
                'team_desc' => $desc_en
            ]
        ];

        if($request->file('image')){
            $file=$request->file('image');
            
            $path = 'images/team/';
            $name=$file->getClientOriginalName();
            $name = $path.$name;
            $file->move($path,$name);
            
            $data['team_img'] = $name;
        }

        $team->update($data);
        
        return redirect()->back()->with('message', 'New Member has been added successfully');
    }

}

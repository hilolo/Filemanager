<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\File;
use App\Group;
use Storage;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('Files');   
    }


    public function fileindex()
    {
        $usser = Auth::user();
        $Grp = Group::all();
        return view('general.Files.index', compact('usser','Grp'));
    }



    public function fileadd()
    {
        $usser = Auth::user();
       
        return view('general.Files.add', compact('usser'));
    }



    
    public function Fileinsert(Request $request)
    {
       

        $flight = new Group;

        $flight->title = $request->title;
        $flight->projet = $request->projet;
        $flight->description = $request->description;
        $flight->user_id = Auth::user()->id;

        $flight->save();

        $file = $request->file('file');

        foreach($file as $files){
           

            $qra = new File;
            $qra->name =  $files->getClientOriginalName();
            $qra->size =  $files->getSize();
            $qra->path = $files->storeAs('public/storage',$flight->id . '-' .$files->getClientOriginalName());
       
            $qra->group_id = $flight->id;
           
            $qra->save();
      
    }



    return redirect('Files');



    }


    public function deletefile($id){
    
        $file = File::find($id);
        Storage::delete($file->path);
        $file->delete();
        return redirect('Files');
    }
    

    public function deleteGroup($id){
    
        $fr = Group::find($id);
        $fr->delete();
        return redirect('Files');
    }


    public function addfileindex($id)
    {
        $usser = Auth::user();
        return view('general.Files.addmore', compact('usser','id'));
    }


     public function addmorefilein(Request $request,$id)
    {
       

        $file = $request->file('file');
        foreach($file as $files){
           

            $qra = new File;
            $qra->name =  $files->getClientOriginalName();
            $qra->size =  $files->getSize();
            $qra->path = $files->storeAs('public/storage',$id . '-' .$files->getClientOriginalName());
       
            $qra->group_id = $id;
           
            $qra->save();
      
    }

    return redirect('Files');
    }

}

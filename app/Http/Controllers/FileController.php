<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::paginate(5);
        return view('activity2.showFiles', ["files"=> $files]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("activity2.addFile");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData =  $request->validate([
            'file' => 'required|max:2000',
        ]);

        $name = $request->file('file')->getClientOriginalName();
	    $type = $request->file('file')->getClientOriginalExtension();
        $type = strtoupper($type);
        $path = $request->file('file')->storeAs('files', $name, 'public');;

        $newFile = new File();

        $newFile->file_name = $name;
	    $newFile->file_type = $type;
        $newFile->file_path = $path;
        $newFile->save();

        return redirect("files")->with("Stored", "File has been added successfully"); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        return view('activity2.viewFile', ['file' => $file]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        return view('activity2.editFile', ["file" => $file]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        $validateData =  $request->validate([
            'file_name' => 'required',
        ]);

        $file->file_name = $request->file_name;
        $file->save();

        return redirect('files')->with("Updated", "File has been updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        $file->delete();
        return redirect('files')->with("Deleted", "File has been deleted successfully");
    }
}

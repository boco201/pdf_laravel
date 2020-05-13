<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FileUploadController extends Controller
{

    public function index()
    {
        $files = File::all();

        return view('files.index', compact('files'));
    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUpload()
    {
        return view('fileUpload');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv,zip,png,jpeg,jpg|max:2048',
        ]);

        $fileName = time().'.'.$request->file->extension();  
        $request->file->move(public_path('uploads'), $fileName);
        $form_data = array(

            'file'            =>   $fileName
        );

        File::create($form_data);

        return redirect('/')
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);
    }
}

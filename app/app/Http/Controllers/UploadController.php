<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dcblogdev\Dropbox\Facades\Dropbox;

class UploadController extends Controller
{

    public function index()
    {
        $list = Dropbox::files()->listContents('/myFile');
        // return $list;
        return view('layouts.contents.service', [
            'list' => $list['entries']
        ]);
    }

    public function upload(Request $request)
    {
        // dd($request->all());
        $path = '/myFile';
        $file = $request->file('file');

        // Upload File
        Dropbox::files()->upload($path, $file);

        // Rename File
        $fromPath = $path . '/' . $file->getFilename();
        $toPath = $path . '/' . $file->getClientOriginalName();
        Dropbox::files()->move($fromPath, $toPath);
        // return 'success';
        return redirect()->back();
    }
}

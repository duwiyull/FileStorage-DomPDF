<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UploadController extends Controller
{
    public function form()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        //  Validasi file
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        //  Ambil file dari form
        $file = $request->file('file');

        //  Ganti nama file sebelum disimpan
        $filename = time() . '_' . $file->getClientOriginalName();

        //  Simpan ke folder `storage/app/public/documents`
        $path = $file->storeAs('documents', $filename, 'public');

        return "File berhasil diupload ke: $path";
    }
}




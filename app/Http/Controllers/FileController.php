<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use App\Exceptions\NotFoundException;


class FileController extends Controller
{
    public function upload(Request $request)
    {
        $file = new File();
        $file->type = $request->input('type');
        $file->path = $request->file('image')->store('uploads','public');
        $file->obj_id = $request->input('obj_id');
        $file->save();

        return response()->json($file, 201);
    }

    public function list()
    {
        $file = File::get();
        return $file;
    }

    public function item($obj_id){
        $file = File::where('obj_id', $obj_id)->first();
        if(!empty($file) and isset($file)){
            return response()->json([$file], 200);
        }
        else{
            throw new NotFoundException();
        }
    }
}

<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\File;
use Illuminate\Http\Request;

class FileManagerController extends Controller
{
    public function upload(Request $request){

        $request->validate([
            'file'=>'required|image|max:1024'
        ]);
        

        if($request->file('file')->isValid()){

            $file = $request->file('file');
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads'),$fileName);

            $photoModel = new File();
            $photoModel->filepath = 'uploads/'. $fileName;
            $photoModel->save();

            return response()->json(File::all());

        }else{
            return response()->json('error');
        }
    }


    public function getFiles(){
        $files = File::all();
        return response()->json($files);
    }


    public function deleteFile(Request $request){

        $filesToDelete =    json_decode($request->input('files'));

        foreach($filesToDelete as $id){

             try{
            $file = File::findorFail($id);
            $filePath = public_path($file->filepath);
            
            if(file_exists($filePath)){
                unlink($filePath);
                $file->delete();
                
            }else{
                return response()->json('File does not exist', 404);
            }
        }
        
        catch(Exception $e){
            return response()->json($e->getMessage(), 500);
        }

        }


        $data['files'] = File::all();
        $data['message'] = 'File Deleted';

        return response()->json($data, 200);
    }
}

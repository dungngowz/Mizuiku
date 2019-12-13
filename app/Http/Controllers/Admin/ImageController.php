<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Helpers\CommonHelper;

class ImageController extends Controller
{
    function get_file_extension($file_name) {
        return substr(strrchr($file_name,'.'),1);
    }

    public function uploadImageBase64(Request $request)
    {
        $image = $request->image;
        if($image){
            $fileExt = $this->get_file_extension($request->file_name);
            list($type, $image) = explode(';', $image);
            list(, $image)      = explode(',', $image);

            $image = base64_decode($image);
            $imagePath= 'tmp/' . uniqid() . '.' . $fileExt;
            Storage::put($imagePath, $image);
            //CommonHelper::compress(public_path('storage/').$imagePath);
            
            return response()->json([
                'status' => 200,
                'pathTmpFile' => $imagePath,
                'url' => asset(Storage::url($imagePath))
            ]);
        }
        return response()->json(['status' => 500]);
    }
}
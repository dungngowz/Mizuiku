<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Helpers\CommonHelper;

class ImageController extends Controller
{
    public function uploadImageBase64(Request $request)
    {
        $image = $request->image;
        if($image){
            $fileName = $request->file_name;
            list($type, $image) = explode(';', $image);
            list(, $image)      = explode(',', $image);

            $image = base64_decode($image);
            $imagePath= 'tmp/' . uniqid() . '_' . $fileName;
            Storage::disk('public')->put($imagePath, $image);
            //CommonHelper::compress(public_path('storage/').$imagePath);
            
            return response()->json([
                'status' => 200,
                'pathTmpFile' => $imagePath,
                'url' => asset(Storage::disk('public')->url($imagePath))
            ]);
        }
        return response()->json(['status' => 500]);
    }
}
<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CommonHelper{

    public static function getQueryString($excepts = ['_token']){
        if(Input::except($excepts)){
            $queryString = array();
            foreach (Input::except($excepts) as $input => $value){
                if(!is_array($value)){
                    $queryString[] = $input . '=' . $value;
                }else{
                    $queryString[] = $input . '=' . implode(',', $value);
                }
            }
            return implode('&', $queryString);
        }
        return  '';
    }

    public static function getHomeImageUrl(){
        return $urlImage = 'admin/dist/img/noimage.jpg';
    }

    public static function getImageUrl($urlImage){

        if(strpos($urlImage, 'storage') != false){
            $urlImage = str_replace('/storage/', '', $urlImage);
        }

        $exists = Storage::exists($urlImage);
        if(!$exists){
            $urlImage = 'admin/dist/img/noimage.jpg';
        }else{
            $urlImage = trim(Storage::url($urlImage), '/');
        } 

        return $urlImage;
    }

    public static function resizeImage($urlImage, $w = 300){

        if(strpos($urlImage, 'storage') != false){
            $urlImage = str_replace('/storage/', '', $urlImage);
        }

        $exists = Storage::exists($urlImage);
        if(!$exists){
            $urlImage = 'admin/dist/img/noimage.jpg';
        }else{
            $urlImage = trim(Storage::url($urlImage), '/');
        }

        $image = Image::cache(function($image) use ($urlImage, $w) {
            $image->make($urlImage)->resize($w, null, function ($constraint) {
                $constraint->aspectRatio();
            });
        }, 60*24*30, true);//30 days

        return $image->encode('data-url');
    }

    public static function cleanData($txt){
        return strip_tags(trim($txt));
    }

    public static function convertArrayToString($array){
        if(empty($array)){
            return "[]";
        }

        $txt = "[";
        foreach ($array as $item) {
            $txt .= '"' . $item . '",';
        }

        return trim($txt, ",") . "]";
    }

    public static function convertDateExcelToDateDb($date, $format = 'Y-m-d H:i:s'){
        if(empty($date)){
            return null;
        }

        $date = str_replace('/', '-', $date);
        $date = str_replace(': ', ':', $date);
        return date($format, strtotime($date));
    }

    public static function isArrayMulti($array) {
        $rv = array_filter($array,'is_array');
        if(count($rv)>0) return true;
        return false;
    }

    public static function slugFilename($filename){
        $info = pathinfo(storage_path() . $filename);
        $ext = $info['extension'];

        $arr = explode('.', trim($filename));
        if(empty($arr) || count($arr) < 2){
            return '';
        }

        return str_slug($arr[0]) . '.' . $arr[1];
    }

    public static function replaceStringPermission($str){
        $str = str_replace('sims', 'sim', $str);
        $str = str_replace('cosmes', 'cosme', $str);
        return $str;
    }

    public static function cleanString($string) {
       $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

       return preg_replace('/[^A-Za-z0-9\-.]/', '', $string); // Removes special chars.
    }

    public static function urlParams($params){
        if($params){
            $queryString = array();
            foreach ($params as $input => $value){
                $queryString[] = $input . '=' . $value;
            }
            return implode('&', $queryString);
        }
        return  '';
    }

    /**
     * Crop image.
     *
     * @param  string  $type
     * @param  string  $path
     * @param  string  $image_path
     * @param  int  $cap_x
     * @param  int  $cap_y
     * @param  int  $cap_w
     * @param  int  $cap_h
     * @return 
     */
    public static function crop($type, $path, $image_path, $cap_x, $cap_y, $cap_w, $cap_h){

        $sourceImage = null;
        switch ($type) { 
            case 1 : 
                $sourceImage = imagecreatefromgif($path); 
            break; 
            case 2 : 
                $sourceImage = imagecreatefromjpeg($path); 
            break; 
            case 3 : 
                $sourceImage = imagecreatefrompng($path); 
            break; 
            case 6 : 
                $sourceImage = imagecreatefrombmp($path); 
            break; 
        }    

        $destImage = imagecrop($sourceImage, ['x' => $cap_x, 'y' => $cap_y, 'width' => $cap_w, 'height' => $cap_h]);
        imagejpeg($destImage, $image_path); 
        
        self::compress($image_path, null);
        imagedestroy($destImage);
        imagedestroy($sourceImage); 
    }

    /**
     * Compress image.
     *
     * @param  string  $old_image
     * @param  string  $new_image
     * @param  int  $quality
     * @return 
     */
    public static function compress($old_image, $new_image = null, $quality = 50){

        list($width, $height, $type, $attr) = getimagesize($old_image);
        if (empty($new_image)) $new_image = $old_image;
        $source_image = null;

        switch ($type) { 
            case 1 : 
                $source_image = imagecreatefromgif($old_image); 
            break; 
            case 2 : 
                $source_image = imagecreatefromjpeg($old_image); 
            break; 
            case 3 : 
                $source_image = imagecreatefrompng($old_image); 
            break; 
            case 6 : 
                $source_image = imagecreatefrombmp($old_image); 
            break; 
        } 

        imagejpeg($source_image, $new_image, $quality);
        imagedestroy($source_image);
    }

    //Ex: $this->updateFileRecord($params['thumbnail'], $record->thumbnail, 'products');
    public static function updateFileRecord(&$fileTmp, $fileOld, $folder){
        if(empty($fileTmp)){
            if(!empty($fileOld)){ //Delete file old
                Storage::delete($fileOld);
            }
        }else{
            if(Storage::exists($fileTmp)){
                if( $fileTmp != $fileOld ){//Add new file
                    $desFolder = $folder . '/' . date("Y") . '/' . date("m") . '/' . basename($fileTmp);
                    if(Storage::move($fileTmp, $desFolder)){
                        Storage::delete($fileOld);
                    }

                    $fileTmp = $desFolder;
                }
            }else{
                if( $fileTmp != $fileOld ){
                    $fileTmp = '';
                }
            }
        }
    }
}
<?php


namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use App\t_log;
use App\User;
use App\CustomClasses\Produit;
use File;

class FolderService {

    static public function getAllBlogImage(){
        return FolderService::findInFolder("/"."images/"."article");
    }

    static public function getAllAvatarImage(){
        return FolderService::findInFolder("/"."images/"."avatar");
    }

    static public function findInFolder($path){
        $all_files = [];
        $scan_path =  public_path().$path;
        $fileList = array_slice(scandir($scan_path),2);
        foreach($fileList as $filename){
            if ( exif_imagetype($scan_path.'/'.$filename) ){
            array_push($all_files,$path."/".$filename);
            }
        }
        return $all_files;
    
    }

}

?>
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

    static public function getAllMassageImage(){

    }

    static public function findInFolder($path){
        $all_files = [];
        //Get a list of file paths using the glob function.
        $path =  public_path().$path."\\"."images\\"."article";
        $fileList = array_slice(scandir($path),2);
        echo($path);
        //Loop through the array that glob returned.
        foreach($fileList as $filename){
            array_push();
            echo("<br><br>".$filename);
        }
    
    }

}

?>
<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/2/18
 * Time: 10:55 PM
 */
namespace App\Utils;

class Utilfunctions{

    public static function handleImage($ImageFile){


        $destinationPath = public_path('assets/img/'); // upload path
        $filename = $ImageFile->getClientOriginalName();// getting image extension
        $ImageFile->move($destinationPath, $filename); // uploading file to given path

        return $filename;

    }


}
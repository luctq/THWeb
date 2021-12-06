<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function proc() {
        return array("status" => "OK", "data" => [1, 2, 3]);
    }

    public function getByID($arr) {
        return array("status" => "OK", "data" => ["masv" => $arr[0]]);
    }

    public function updateOneStd($arr) {
        return array(
                "status" => "OK", 
            "data" => json_decode(file_get_contents("php://input"), true));
    }  
}

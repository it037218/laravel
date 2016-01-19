<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;


class SitesController extends Controller
{
    //
    public function index(){
        $name = "Ivan";
        $age = $_GET['age'];
        $results =  DB::getQueryLog();
        var_dump($results);exit;
        return view("sites.sites")->with("name",$name)->with("age",$age);
    }
}

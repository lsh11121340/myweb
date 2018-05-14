<?php
namespace App\http\Controllers;
use App\users;
class UsersController extends Controller{
    public function getInfo($id){
        return Users::getUserInfo();
    }
}
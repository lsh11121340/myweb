<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Users extends Model{
    public static function getUserInfo(){
        return 'user model';
    }
}
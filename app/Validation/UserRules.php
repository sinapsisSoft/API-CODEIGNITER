<?php

namespace App\Validation;

use App\Models\UserModel;

class UserRules
{
    // public function custom_rule(): bool
    // {
    //     return true;
    // }

    public function validateUser(string $str, string $fields, array $data){
        try{
            $model=new UserModel();
            $user=$model->findUserByEmailAddress($data['email']);
            return password_verify($data['password'],$user['password']);
        }
        catch(\Exception $e){

            return false;
        }
    }
}

<?php

namespace App\Models;
use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table='client';
    protected $useTimestamps =true;
    protected $updatedField='updated_at';
    protected $allowedFields=[
        'name','email','retainer_fee'
    ];
   

    public function findClientById($id){
        $client=$this->asArray()->where(['id'=>$id])->first();

        if(!$client){
            throw new \Exception('Client does not exist for specified email address');
        }

        return $client;
    }


}
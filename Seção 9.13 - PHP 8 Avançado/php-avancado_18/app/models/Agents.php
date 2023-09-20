<?php

namespace bng\Models;

use bng\Models\BaseModel;

class Agents extends BaseModel
{
    // --------------------------------------------------------------------------
    public function check_login($username, $password)
    {
        // check if the login is valid
        $params = [
            ':username' => $username
        ];

        // check if there is a user in the database
        $this->db_connect();
        $results = $this->query(
            "SELECT id, passwrd FROM agents " .
            "WHERE AES_ENCRYPT(:username, '" .MYSQL_AES_KEY."') = name"
        , $params);
        
        // if there is no user, returns false
        if($results->affected_rows == 0){
            return [
                'status' => false
            ];
        }

        // there is a user with that name (username)
        // check if the password is correct
        if(!password_verify($password, $results->results[0]->passwrd)){
            return [
                'status' => false
            ];
        }

        // login is ok
        return [
            'status' => true
        ];
    }
}


?>
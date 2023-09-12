<?php

namespace bng\Models;

use bng\Models\BaseModel;

class Agents extends BaseModel
{
    public function get_total_agents()
    {
        $this->db_connect();
        return $this->query("SELECT COUNT(*) total FROM agents");
    }

    public function get_results(){
        $params = [
            'profile' => 'admin'
        ];
        $this->db_connect();
        return $this->query("SELECT * FROM agents WHERE profile = :profile", $params);
    }
}


?>
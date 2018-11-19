<?php

class Model_Login extends CI_Model
{
    public function login($nomUser)
    {
        $sql = $this->db->query("select idUser, statutUser from user where nomUser='".$nomUser."'");
        return $sql->result();
    }
}

?>
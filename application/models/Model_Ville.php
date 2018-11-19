<?php

class Model_Ville extends CI_Model
{
    public function SelectVilleFromRegion($idRegion)
    {
        $sql = $this->db->query("SELECT idVille, nomVille, scoreVille FROM ville WHERE numRegion =" .$idRegion);
        return $sql->result();
    }

    public function SetScoreOfVille($idRegion)
    {
        $sql = $this->db->query("UPDATE ville SET scoreVille=scoreVille+5 WHERE numRegion=".$idRegion);
    }
}

?>
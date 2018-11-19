<?php

class Model_Region extends CI_Model
{
    public function selectAllRegion()
    {
        $sql = $this->db->query("SELECT idRegion, nomRegion, scoreRegion FROM region");
        return $sql->result();
    }

    public function selectBourgogneRegion()
    {
        $sql = $this->db->query("SELECT idRegion, nomRegion, scoreRegion FROM region WHERE nomRegion = 'Bourgogne'");
        return $sql->result();
    }

    public function SetScoreOfRegion($idRegion)
    {
        $sql = $this->db->query("UPDATE region SET scoreRegion=(SELECT SUM(scoreVille) FROM ville WHERE numRegion = ".$idRegion.") WHERE idRegion=".$idRegion);
    }
}

?>
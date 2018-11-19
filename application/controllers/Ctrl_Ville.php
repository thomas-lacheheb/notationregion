<?php
class Ctrl_Ville extends CI_Controller {

	public function VilleDeLaRegion()
	{
        $this->load->model("Model_Ville");
        $data['lesVilles'] = $this->Model_Ville->SelectVilleFromRegion($_GET['idRegion']);
        
        $this->load->view("view_ville", $data);
    }

	public function AjoutDuScore()
	{
        $this->load->model("Model_Ville");
        $data['lesVilles'] = $this->Model_Ville->SetScoreOfVille($_GET['idRegion']);

        $this->load->model("Model_Region");
        $data['lesRegions'] = $this->Model_Region->SetScoreOfRegion($_GET['idRegion']);
    }
}
<?php
class Ctrl_User extends CI_Controller {

	public function connection()
	{
        $this->load->model("Model_Login");
        $data['infosUser'] = $this->Model_Login->login($_GET['userName']);
        
        $statut = $data['infosUser'][0]->statutUser;

        if ($statut == "admin") {
            $this->load->model("Model_Region");
            $data['lesRegions'] = $this->Model_Region->selectAllRegion();

            $this->load->view("view_region", $data);
        }
        else {
            $this->load->model("Model_Region");
            $data['lesRegions'] = $this->Model_Region->selectBourgogneRegion();

            $this->load->view("view_region", $data);
        }
    }
}
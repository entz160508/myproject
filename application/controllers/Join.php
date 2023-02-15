<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Join extends CI_Controller {

        public function joinAccount()
        {
                $this->load->view('join/joinForm');
        }

        public function joinMem(){
                // $memID = $this->input->post("mem_id");
                // echo $memID;
                // var_dump($memID);
                var_dump($_POST);
        }

}

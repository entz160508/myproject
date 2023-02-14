<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Join extends CI_Controller {

        public function joinAccount()
        {
                $this->load->view('join/joinForm');
        }

}

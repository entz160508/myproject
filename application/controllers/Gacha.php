<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gacha extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function gachaView()
    {
            $this->load->view('gacha/gachaView');
    }

    public function gachaCon(){
        // $gachaid = $this->input->post("gachaid");
        // var_dump($gachaid);

        // console.log($('#gachaid').val());
        // console.log($('#gachacount').val());
        // console.log($('#count').val());
        $data = "";

        if ($this->input->post('submit') == true) {
            $data['value1'] = $this->input->post("gachaid");
            $data['value2'] = $this->input->post("gachacount");
            $data['value3'] = $this->input->post("count");
            $data['method'] = 'post';
        }
        else if($this->input->get('submit') == true){
            $data['value1'] = $this->input->get("gachaid");
            $data['value2'] = $this->input->get("gachacount");
            $this['value3'] = $this->input->get("count");
            $data['method'] = 'get';
        }
        $this->load->view('gacha/form_receive_view',$data);
    }


}

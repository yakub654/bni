<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
{
      
      public function product_details()
      {
        $this->load->view('product_details');
      }

      public function product_add()
      {
      	$this->load->view('product_add');
      }


}
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of supplies
 *
 * @author Justin
 */

//6 recipes
//12 pantry items
define('REST_SERVER', 'http://backend.local');  // the REST server host
define('REST_PORT', $_SERVER['SERVER_PORT']);   // the port you are running the server on
class Supplies extends CI_Model {
	// Constructor
	public function __construct()
	{
		parent::__construct();
                $this->load->library(['curl', 'format', 'rest']);
	} 
        function getPorts()
        {
                $this->rest->initialize(array('server' => REST_SERVER));
                $this->rest->option(CURLOPT_PORT, REST_PORT);
                $result = $this->rest->get('ports');
                return $result;
        }

        function rules() {
            $config = [
                ['field'=>'code', 'label'=>'name', 'rules'=> 'required|max_length[256]'],
                ['field'=>'description', 'label'=>'description', 'rules'=> 'required|max_length[256]'],
                ['field'=>'receivingUnit', 'label'=>'receiving unit', 'rules'=> 'required|integer'],
                ['field'=>'receivingCost', 'label'=>'receiving cost', 'rules'=> 'required|decimal'],
                ['field'=>'stockingUnit', 'label'=>'stocking unit', 'rules'=> 'required|integer'],
                ['field'=>'quantity', 'label'=>'quantity', 'rules'=> 'required|integer']
             ];
             return $config;
        }
        // Return all records as an array of objects
        function all()
        {
                $this->rest->initialize(array('server' => REST_SERVER));
                $this->rest->option(CURLOPT_PORT, REST_PORT);
                return $this->rest->get('/maintenance');
        }
}

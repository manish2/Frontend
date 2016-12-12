<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Stock
 *
 * @author Justin
 */
class Stock extends CI_Model{
    //put your code here
    var $data = array(
		array('code' => 'haircut', 
                      'description' => 'a simple haircut', 
                      'sellingPrice' => '$24.99',
                      'quantity' => '3'),
                array('code' => 'perm', 
                      'description' => 'a hairstyle produced by setting the hair in waves or curls and then treating it with chemicals so that the style lasts for several months', 
                      'sellingPrice' => '28.99',
                      'quantity' => '1'),
                array('code' => 'style', 
                      'description' => 'the styling of hair, usually on the human scalp', 
                      'sellingPrice' => '19.99',
                      'quantity' => '8'),
                array('code' => 'wax', 
                      'description' => 'sculpting the hair',
                      'sellingPrice' => '14.99',
                      'quantity' => '1'),
                array('code' => 'clean', 
                      'description' => 'removes excess sweat and oil, as well as unwanted products from the hair and scalp', 
                      'sellingPrice' => '21.99',
                      'quantity' => '12'),
                array('code' => 'buzzcut', 
                      'description' => 'a haircut in which all the hair is cut very close to the scalp.', 
                      'sellingPrice' => '15.99',
                      'quantity' => '9')          
	);

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve a single quote
	public function get($which)
	{
            $query = $this->db->query("select code,description,sellingPrice,quantity from stock WHERE code = '$which' LIMIT 1");
            if ($query->num_rows() > 0)
            {
                return $query->result_array();
            } else {
                throw new Exception("No records found");
            }
	}

	// retrieve all of the quotes
	public function all()
	{
            $query = $this->db->query("select code,description,sellingPrice,quantity from stock");
            if ($query->num_rows() > 0)
            {
                return $query->result_array();
            } else {
                throw new Exception("No records found");
            }
	}
}

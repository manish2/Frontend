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

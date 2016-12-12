<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Recipe
 *
 * @author Justin
 */
class Recipe extends CI_Model{
    
	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve a single quote
	public function get($which)
	{
            $query = $this->db->query("select distinct code, description from ingredients where code = '$which'");
            $recipes = array();
            foreach ($query->result_array() as $recipe) {
                $code = $recipe['code'];
                $newQuery = $this->db->query("select name, amount from ingredients where code = '$code'");
                $ingredients = array();
                $count = 1;
                foreach ($newQuery->result_array() as $ingredient) {
                    $ingredients[] = array ($count++ => array('name' => $ingredient['name'],
                                                          'amount' => $ingredient['amount']));
                }
                $recipes[] = array ('code' => $recipe['code'], 'description' => $recipe['description'], 'ingredients' => $ingredients);
                $count = 1;
            }
            if ($query->num_rows() > 0)
            {
                return $recipes;
            } else {
                throw new Exception("No records found");
            }
	}

	// retrieve all of the quotes
	public function all()
	{
            $query = $this->db->query("select distinct code, description from ingredients");
            $recipes = array();
            foreach ($query->result_array() as $recipe) {
                $code = $recipe['code'];
                $newQuery = $this->db->query("select name, amount from ingredients where code = '$code'");
                $ingredients = array();
                $count = 1;
                foreach ($newQuery->result_array() as $ingredient) {
                    $ingredients[] = array ($count++ => array('name' => $ingredient['name'],
                                                          'amount' => $ingredient['amount']));
                }
                $recipes[] = array ('code' => $recipe['code'], 'description' => $recipe['description'], 'ingredients' => $ingredients);
                $count = 1;
            }
            if ($query->num_rows() > 0)
            {
                return $recipes;
            } else {
                throw new Exception("No records found");
            }
	}
}
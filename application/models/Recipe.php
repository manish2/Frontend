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
    //put your code here
    var $data = array(
		array('code' => 'haircut', 
                      'description' => 'a simple haircut', 
                      'ingredients' => array('1' => array('name' => 'scissors',
                                                          'amount' => '1'),
                                             '2' => array('name' => 'gowns',
                                                          'amount' => '1'),
                                             '3' => array('name' => 'gel',
                                                          'amount' => '2'))),
                array('code' => 'perm', 
                      'description' => 'a hairstyle produced by setting the hair in waves or curls and then treating it with chemicals so that the style lasts for several months', 
                      'ingredients' => array('1' => array('name' => 'comb',
                                                          'amount' => '2'),
                                             '2' => array('name' => 'gowns',
                                                          'amount' => '1'),
                                             '3' => array('name' => 'mousse',
                                                          'amount' => '3'),
                                             '4' => array('name' => 'hair dryer',
                                                          'amount' => '1'),
                                             '5' => array('name' => 'hairspray',
                                                          'amount' => '1'))),
                array('code' => 'style', 
                      'description' => 'the styling of hair, usually on the human scalp', 
                      'ingredients' => array('1' => array('name' => 'shampoo',
                                                          'amount' => '1'),
                                             '2' => array('name' => 'conditioner',
                                                          'amount' => '1'),
                                             '3' => array('name' => 'hair dryer',
                                                          'amount' => '1'),
                                             '4' => array('name' => 'hairspray',
                                                          'amount' => '1'),
                                             '5' => array('name' => 'comb',
                                                          'amount' => '1'))),
                array('code' => 'wax', 
                      'description' => 'sculpting the hair',
                      'ingredients' => array('1' => array('name' => 'wax',
                                                          'amount' => '5'),
                                             '2' => array('name' => 'towel',
                                                          'amount' => '1'),
                                             '3' => array('name' => 'gowns',
                                                          'amount' => '1'))),
                array('code' => 'clean', 
                      'description' => 'removes excess sweat and oil, as well as unwanted products from the hair and scalp', 
                      'ingredients' => array('1' => array('name' => 'shampoo',
                                                          'amount' => '2'),
                                             '2' => array('name' => 'conditioner',
                                                          'amount' => '1'),
                                             '3' => array('name' => 'hair dryer',
                                                          'amount' => '1'))),
                array('code' => 'buzzcut', 
                      'description' => 'a haircut in which all the hair is cut very close to the scalp.', 
                      'ingredients' => array('1' => array('name' => 'buzzer',
                                                          'amount' => '1'),
                                             '2' => array('name' => 'gowns',
                                                          'amount' => '1')))
                
	);

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve a single quote
	public function get($which)
	{
		// iterate over the data until we find the one we want
		foreach ($this->data as $record) {
			if ($record['code'] == $which) {
				return $record;
                        }
                }
		return null;
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
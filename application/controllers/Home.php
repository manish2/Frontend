<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Homepage
 *
 * @author Justin
 */
class Home extends Application{
    
    //put your code here
    function __construct()
	{
		parent::__construct();
	}
        
    public function index() {

        $this->data['pagebody'] = 'Home';

        $supplies = $this->Supplies->all();
        $totalOfSuppliesAvailable = 0;
        $suppliesCount = 0;
        $count = 0; 
        foreach ($supplies as $supply) 
        { 
            foreach($supply as $item) { 
                
                if($item->quantity > 0) { 
                    $suppliesCount++; 
                }
                $totalOfSuppliesAvailable += (($item->receivingCost/$item->receivingUnit))*$item->quantity; 
            } 
        }
        
        $productsStocked = $this->Stock->all();
        $totalOfProductsStocked = 0;
        $productsCount = 0;
        
        foreach ($productsStocked as $stock)
        {
            $totalOfProductsStocked += ($stock['sellingPrice'] * $stock['quantity']);
            
            if ($stock['quantity'] > 0) {
                $productsCount++;
            }
        }
        
        $recipes = $this->Recipe->all();
        $recipesCount = 0;
        
        foreach ($recipes as $recipe)
        {
            $recipesCount++;
        }
        
        $dashboard = array ('worthOfMaterialsAvailable' => $totalOfSuppliesAvailable,
                            'worthOfProductsStocked' => $totalOfProductsStocked,
                            'uniqueSuppliesAvailable' => $suppliesCount,
                            'uniqueProductsStocked' => $productsCount,
                            'recipesKnown' => $recipesCount);
        
        $this->data = array_merge($this->data, $dashboard);

        $this->render();
    }
}

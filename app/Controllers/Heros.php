<?php

namespace App\Controllers;

class Heros extends \CodeIgniter\Controller {

public function index() {            
// connect to the model        
$heros = new \App\Models\Heros();           
// retrieve all the records  
$records = $heros->findAll();
// JSON encode and return the result     
return json_encode($records);
} 

 public function showme($id)    
         {
           // connect to the model 
              $heros = new \App\Models\Heros();   
          // retrieve all the records   
            $record = $heros->find($id);    
            
           // get a template parser  
               $parser = \Config\Services::parser();   
              // tell it about the substitions  
               return $parser->setData($record)      
                  // and have it render the template with those  
                 ->render('onehero'); 
             } 
 
}
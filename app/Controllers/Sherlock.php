<?php     namespace App\Controllers; 
 
    class Sherlock extends BaseController  
    {  
        public function index()     
        {    
             // connect to the model 
             $heros = new \App\Models\Heros();    
             // retrieve all the records
             $records = $heros->findAll(); 
             
              // get a template parser 未知
                 $parser = \Config\Services::parser(); 
             // tell it about the substitions
                 return $parser->setData(['records' => $records])  
             // and have it render the template with those  
                   ->render('heroslist');       
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
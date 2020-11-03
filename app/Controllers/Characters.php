<?php

namespace App\Controllers;

class Characters extends BaseController {

    public function index() {
        // connect to the model 
        $places = new \App\Models\People(); 
        // retrieve all the records    
        $records = $places->findAll(); 
    
     // get a template parser     
     $parser = \Config\Services::parser();    
     // tell it about the substitions
     return $parser->setData(['records' => $records])       
            // and have it render the template with those       
            ->render('peoplelist'); 
    }
    public function showme($id)     {     
        // connect to the model     
        $places = new \App\Models\People(); 
        // retrieve all the records    
        $record = $places->find($id);
        
        // get a template parser   
        $parser = \Config\Services::parser(); 
        // tell it about the substitions    
        return $parser->setData($record) 
                // and have it render the template with those
                ->render('onepeople'); 
    } 
}

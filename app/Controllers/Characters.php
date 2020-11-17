<?php

namespace App\Controllers;

class Characters extends BaseController {

    public function index() {
        $places = new \App\Models\People(); 
        $table = new \CodeIgniter\View\Table();
        $headings = $places->fields;
        $displayHeadings = array_slice($headings, 1, 2);
        $table->setHeading(array_map('ucfirst', $displayHeadings));
        $records = $places->findAll();
        foreach ($records as $record) {
            $imageString = '<img src="/image/'.$record->image.'"/>';
            $table->addRow($record->id, $record->name, $record->country, $record->brith, $record->setting, $record->description, $record->disposition, $record->link, $imageString);
        }
        return $table->generate(); 



        // connect to the model 
        $places = new \App\Models\People();
        // retrieve all the records    
        
        // get a template parser     
        $parser = \Config\Services::parser();
        // tell it about the substitions
        return $parser->setData(['records' => $records])
                        // and have it render the template with those       
                        ->render('peoplelist');
    }

    public function showme($id) {
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

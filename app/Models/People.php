<?php

namespace App\Models;
use App\Models\Simple\CSVModel;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class People extends CSVModel{ 

    protected $origin = WRITEPATH . 'data/peopleData.csv';
    protected $keyField = 'id';
    protected $validationRules = [];
}
    
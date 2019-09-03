<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DroneUser extends Model
{
    protected $tableAttributes
        = [
            'id' => 'integer',
            'tc'    => 'text',
            'image' => 'text',
        ];
}

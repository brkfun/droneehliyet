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

    public function getTcAttribute($va)
    {
        return $va;
    }

    public static function getTableAttributes()
    {
        return array_keys(app(static::class)->tableAttributes);
    }

    public function getImageAttribute($value)
    {
        return 'storage/images/' . $this->id . '-' . $this->tc . '.jpg';
    }
}

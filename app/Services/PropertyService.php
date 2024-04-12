<?php

namespace App\Services\Property;

use App\Models\Property;

class PropertyService {

    public static function create($data)
    {
        return Property::create($data);
    }
}
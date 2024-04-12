<?php

namespace App\Http\Controllers\Property;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Property\PropertyService;
use App\Http\Requests\Property\CreatePropertyRequest;

class PropertyController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        
    }

    public function store(CreatePropertyRequest $request)
    {
        $newProperty = PropertyService::create($request);
        return view(
            'create_property',
            ['property' => $newProperty]
        );
    }
}

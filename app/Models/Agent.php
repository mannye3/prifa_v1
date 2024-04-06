<?php

namespace App\Models;

use App\Models\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Agent extends Authenticatable
{
    use HasFactory, HasUuid;

    protected $guard = 'agent';

    protected $keyType = 'string';
    public $incrementing = false;

    protected $guarded = [];
}

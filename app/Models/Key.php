<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Key extends Model
{
    use HasFactory,HasRoles;

    public $timestamps = false;
    protected $guard_name = 'web';
}

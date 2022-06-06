<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        
        'option',
        'amount',
        'date',
        'name',
        'phone',
        'email',
        'create_at',
        'update_at',
        
    ];
}

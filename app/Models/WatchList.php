<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchList extends Model
{
    use HasFactory;
    protected $fillable = [
        'accessory_id',
        'customer_id',
        'token'


    ];
}

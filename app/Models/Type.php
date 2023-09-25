<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',

    ];
    public function accessories()
    {
        return $this->hasMany(Accessory::class, 'type_id', 'id');
    }
}

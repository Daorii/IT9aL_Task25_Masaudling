<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $primaryKey = 'country_id';
    public $incrementing = false; // because it's a char(2)
    protected $keyType = 'string';

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}

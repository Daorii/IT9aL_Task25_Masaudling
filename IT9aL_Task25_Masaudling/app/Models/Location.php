<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $primaryKey = 'location_id';

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}

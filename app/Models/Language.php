<?php

namespace App\Models;

use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Language extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function countries()
    {
        return $this->belongsToMany(Country::class);
    }
}

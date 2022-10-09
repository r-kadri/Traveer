<?php

namespace App\Models;

use App\Models\City;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function cities() {
        return $this->hasMany(City::class);
    }

    /**
     * The languages that belong to the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class);
    }
}

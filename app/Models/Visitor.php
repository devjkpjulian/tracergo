<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Visitor extends Model
{
    use HasFactory;
    use Searchable;

    protected $guarded = [];
    protected $table = 'visitors';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function symptom()
    {
        return $this->hasOne(Symptom::class);
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();
        return $array;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Symptom extends Model
{
    use HasFactory;
    use Searchable;

    protected $guarded = [];
    protected $table = 'symptoms';

    public function visitor()
    {
        return $this->belongsTo(Visitor::class);
    }
}

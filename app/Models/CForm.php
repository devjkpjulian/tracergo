<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CForm extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'c_forms';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

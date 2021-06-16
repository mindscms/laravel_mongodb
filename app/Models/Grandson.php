<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Grandson extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function son()
    {
        return $this->belongsTo(Son::class);
    }

}

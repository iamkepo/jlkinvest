<?php

namespace App\Models;

use App\Models\Activite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prospect extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function Activities(){
        return $this->hasMany(Activite::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

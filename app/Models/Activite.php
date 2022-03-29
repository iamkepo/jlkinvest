<?php

namespace App\Models;

use App\Models\Prospect;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activite extends Model
{
    protected $guarded = [];
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $dates = ['dateEcheance'];

    public function prospect()
    {
        return $this->belongsTo(Prospect::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BRT extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'brt_code', 'reserved_amount', 'status'];

    public function user() // Optional: if you want to define the inverse relationship
    {
        return $this->belongsTo(User::class);
    }
}

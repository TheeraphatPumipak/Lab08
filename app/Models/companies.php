<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    use HasFactory;
    public function User()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}

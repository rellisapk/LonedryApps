<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'treatment_id',
        'berat',
        'total',
        'deskripsi'
    ];

    public function treatments()
    {
        return $this->belongsToMany(Treatments::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

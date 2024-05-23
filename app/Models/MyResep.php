<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyResep extends Model
{
    // Define the table associated with the model
    protected $table = 'my_resep';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'Tipe',
        'id_user',
        'id_resep',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Define the relationship with the Resep model
    public function resep()
    {
        return $this->belongsTo(Resep::class, 'id_resep');
    }
}

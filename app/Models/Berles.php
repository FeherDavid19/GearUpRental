<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berles extends Model
{
    protected $table = 'berlesek';

    protected $fillable = [
        'user_name',
        'auto_tipus',
        'berles_kezdete',
        'berles_vege',
    ];

    // Kapcsolat a felhasználóval
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Kapcsolat az autóval
    public function flotta()
    {
        return $this->belongsTo(Flotta::class);
    }
   
}

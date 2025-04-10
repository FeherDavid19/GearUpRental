<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flotta extends Model
{
    use HasFactory;

    // Ha a tábla neve nem "flottas", akkor definiáld itt
    protected $table = 'flotta';

    // Engedélyezett mezők (ha mass assignment-et használsz)
    protected $fillable = [
        'tipus',
        'ar_naponta',
        'ajtok',
        'valto',
        'uzemanyag',
        'image',
        'created_at',
        'updated_at',
    ];
    
}

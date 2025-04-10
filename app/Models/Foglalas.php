<?php

namespace App\Models;

use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use App\Rules\TimeBetween;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Foglalas extends Model
{
    protected $fillable = [
        'idofel', 'idolet' 
    ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::creating(function ($foglalas) {
            $rules = [
                'idofel' => ['required', new TimeBetween()],
                'idolet' => ['required', new TimeBetween()],
            ];

            $validator = \Illuminate\Support\Facades\Validator::make($foglalas->toArray(), $rules);

            if ($validator->fails()) {
                throw new \Illuminate\Validation\ValidationException($validator);
            }
        });

        static::updating(function ($foglalas) {
            $rules = [
                'idofel' => ['required', new TimeBetween()],
                'idolet' => ['required', new TimeBetween()],
            ];

            $validator = \Illuminate\Support\Facades\Validator::make($foglalas->toArray(), $rules);

            if ($validator->fails()) {
                throw new \Illuminate\Validation\ValidationException($validator);
            }
        });
            
    }
}


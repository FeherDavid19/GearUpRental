<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class TimeBetween implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $startTime = Carbon::createFromTime(8, 0, 0);  // 8:00
        $endTime = Carbon::createFromTime(14, 0, 0);    // 14:00
        $checkTime = Carbon::parse($value);

        return $checkTime->between($startTime, $endTime);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Az időpontnak 8:00 és 14:00 között kell lennie.';
    }
}

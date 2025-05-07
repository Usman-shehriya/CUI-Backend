<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidComsatsRollNumber implements Rule
{
    public function passes($attribute, $value)
    {
        // Match formats like FA12-BCS-11 or SP20-BSE-03
        return preg_match('/^(FA|SP)\d{2}-(BCS|BSE)-\d{2}$/i', $value);
    }

    public function message()
    {
        return 'The roll number must be in a valid COMSATS format (e.g., FA12-BCS-11 or SP20-BSE-03).';
    }
}

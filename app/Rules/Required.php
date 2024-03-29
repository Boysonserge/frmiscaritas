<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class Required implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        if (empty($value)) {
            $fail('The :attribute igomba kuzuzwa.');
        }
    }
}

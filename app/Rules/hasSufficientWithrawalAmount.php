<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class hasSufficientWithrawalAmount implements Rule
{

    public $coin;

    public $amount;

    /**
     * Create a new rule instance.
     *
     * @return void
     */

    public function __construct($coin, $amount)
    {
        $this->coin = $coin;

        $this->amount = $amount;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $withdrawable_deposit = auth()->user()->withdrawable_depsoit;
        return $value <= $withdrawable_deposit;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}

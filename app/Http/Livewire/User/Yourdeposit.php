<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use App\Traits\CryptoTrait;

class Yourdeposit extends Component
{
    use CryptoTrait;

    public function render()
    {
        $usersinvestedcurrency = User::find(auth()->id())->transactions()->where('status', 1)->pluck('currency_code');

        $selectedCryptos = $this->getCryptoData()->filter(function ($value, $key) use($usersinvestedcurrency){
            return in_array($value['currency'], $usersinvestedcurrency->toArray());
        });

        return view('livewire.user.yourdeposit', ['selectedCryptos' => $selectedCryptos]);
    }
}

<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Traits\CryptoTrait;

class Dashboard extends Component
{
    use CryptoTrait;
    
    public function render()
    {
        $selectedCryptos = $this->getCryptoData()->filter(function ($value, $key){
            return in_array($value['currency'], ['BTC','ETH','LTC','XRP','BCH']);
        });
        return view('livewire.user.dashboard',['selectedCryptos' =>  $selectedCryptos]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Traits\CryptoTrait;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Livewire\WithPagination;

class Cryptocurrencies extends Component
{
    use WithPagination;

    use CryptoTrait;
    
    public function render()
    {
        return view('livewire.cryptocurrencies',['response' => $this->getCryptoData()]);
    }
}

<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Livewire\WithPagination;

class Walletstat extends Component
{
    use WithPagination;
    
    public function render()
    {
        $response = Http::get('http://api.nomics.com/v1/currencies/ticker?key=5ddbf2e5730bd126796cb638abf01eed&ids=BTC,ETH,LTC,XRP,BNB,DOGE,BCH,ADA,USDC,BSV,EOS,BUSD,TRX,THETA&interval=1d&convert=USD&per-page=100&page=1')->collect();
        return view('livewire.user.walletstat',['responses' => $response->paginate(10)]);
    }
}

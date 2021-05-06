<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;

trait CryptoTrait
{
    public function getCryptoData()
    {
        $response = Http::get('http://api.nomics.com/v1/currencies/ticker?key=5ddbf2e5730bd126796cb638abf01eed&ids=BTC,ETH,LTC,XRP,BNB,DOGE,BCH,ADA,USDC,BSV,EOS,BUSD,TRX,THETA&interval=1d&convert=USD&per-page=100&page=1')->collect();
        
        return $response;
    }

    public function getCryptoEquivalent($currency, $amount)
    {
        $events = array_filter($this->getCryptoData()->toArray(), function ($event) use ($currency) {
            return $event['currency'] === $currency;
        });

        return (int)$amount / (int)$events[0]['price'];

    }

    public function getMoneyAttribute()
    {
        return $this->price / 100;
    }

    public function getMoneyAsStringAttribute()
    {
        return sprintf('$ %s, $this->money');
    }
}
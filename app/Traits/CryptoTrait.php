<?php

namespace App\Traits;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

trait CryptoTrait
{
    public function getCryptoData()
    {
        $response = Http::retry(5,200)->get('http://api.nomics.com/v1/currencies/ticker?key=5ddbf2e5730bd126796cb638abf01eed&ids=BTC,ETH,LTC,XRP,BNB,DOGE,BCH,ADA,USDC,BSV,EOS,BUSD,TRX,THETA&interval=1d&convert=USD&per-page=100&page=1')->collect();
        
        return $response;
    }

    public function getCryptoEquivalent($currency = 'BTC', $amount = 0)
    {
        if(is_null($currency) || is_null($amount)){

            return;

        }

        $events = array_filter($this->getCryptoData()->toArray(), function ($event, $key) use ($currency) {
            return $event['currency'] === $currency;
        }, ARRAY_FILTER_USE_BOTH);

        return (float)$amount / (float)Arr::collapse($events)['price'];

    }

    public function getMoneyAttribute()
    {
        return $this->price / 100;
    }

    public function getMoneyAsStringAttribute()
    {
        return sprintf('$ %s, $this->money');
    }

    public function selectedCryptos($selected)
    {
        $this->getCryptoData()->filter(function ($value, $key) use($selected){
            return in_array($value['currency'], $selected);
        });
    }
}
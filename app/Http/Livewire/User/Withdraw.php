<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Traits\CryptoTrait;
use Illuminate\Http\Request;

class Withdraw extends Component
{
    use CryptoTrait;

    // public $coin = "BTC";

    public $selectedCoin = "BTC";

    public $activeWallet;

    public $selectedCrypto;

    public $amount = "";

    public $walletAddress = "";

    public $cryptoequivalent;

    protected $rules = [
        'amount' => 'required|numeric|min:10|max:100000',

        'walletAddress' => 'required|min:20',

        'selectedCoin' => 'required'
    ];

    protected $messages = [
        'amount.required' => 'Amount field cannot be empty.',

        'amount.numeric' => 'Amount is not valid.',

        'amount.min' => 'Amount must be at least 10 usd.',

        'walletAddress.min' => 'check that the wallet address is valid.',
    ];

    public function refreshComponent()
    {
        return true;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $sessionData = session()->get('confirmwithdrawal');

        // $this->coin = $sessionData['selectedCoin'] ?? $this->coin;

        $this->amount = $sessionData['amount'] ?? $this->amount;

        $this->walletAddress = $sessionData['walletAddress'] ?? $this->walletAddress;

        $this->cryptoequivalent = $this->getCryptoEquivalent($this->selectedCoin, $this->amount);

        $this->selectedCrypto = $this->getCryptoData()->filter(function ($value, $key) use($sessionData){

            return ($value['id'] == ($sessionData['selectedCoin'] ?? $this->selectedCoin));

        })->first();

        $this->activeWallet = is_null($this->selectedCrypto) ? '' : $this->selectedCrypto['id'];

        $cryptos = $this->getCryptoData();
        
        return view('livewire.user.withdraw',[

            'cryptos' => $cryptos,

            'activeWallet' => $this->activeWallet,

            'amount' => $this->amount,

            ]);
    }

    public function selectCrypto($crypto)
    {
        $this->selectedCoin = $crypto;

        $this->selectedCrypto = $this->getCryptoData()->filter(function ($value, $key) {
            return ($value['id'] == $this->selectedCoin);
        })->first();
    }

    public function confirmWithdrawal(Request $request)
    {
        $validatedData = $this->validate();
    
        $request->session()->put('confirmwithdrawal', $validatedData);

        return redirect('/withdraw');
    }


    public function cancelWithdrawal()
    {
        request()->session()->forget('confirmwithdrawal');

        return redirect('/withdraw');
    }
}

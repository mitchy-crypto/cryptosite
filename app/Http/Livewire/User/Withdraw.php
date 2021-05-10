<?php

namespace App\Http\Livewire\User;

use App\Models\Wallet;
use Livewire\Component;
use App\Traits\CryptoTrait;
use Illuminate\Http\Request;

class Withdraw extends Component
{
    use CryptoTrait;

    public $coin = "BTC";

    public $activeWallet;

    public $selectedCrypto;

    public $amount = "";

    public $walletAddress = "";

    public $cryptoequivalent;

    protected $rules = [
        'amount' => 'required|numeric|min:10|max:100000',

        'walletAddress' => 'required|min:20',

        'coin' => 'required'
    ];

    protected $messages = [
        'amount.required' => 'Amount field cannot be empty.',

        'amount.numeric' => 'Amount is not valid.',

        'amount.min' => 'Amount must be at least 10 usd.',

        'walletAddress.min' => 'check that the wallet address is valid.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $this->coin = session()->get('confirmwithdrawal')['coin'] ?? 'BTC';

        $this->amount = session()->get('confirmwithdrawal')['amount'] ?? 50;

        $this->cryptoequivalent = $this->getCryptoEquivalent($this->coin, $this->amount);

        $this->selectedCrypto = $this->getCryptoData()->filter(function ($value, $key) {

            return ($value['id'] == $this->coin);

        })->first();

        $this->activeWallet = Wallet::where('code', $this->coin)->pluck('code')->first();
        
        return view('livewire.user.withdraw',[

            'cryptos' => $this->getCryptoData(),

            'activeWallet' => $this->activeWallet,

            'cryptoEquivalentOfDeposit' => number_format($this->cryptoequivalent, 5, '.', ''),

            'amount' => $this->amount

            ]);
    }

    public function selectCrypto($crypto)
    {
        $this->coin = $crypto;

        $this->selectedCrypto = $this->getCryptoData()->filter(function ($value, $key) {
            return ($value['id'] == $this->coin);
        })->first();
    }

    public function confirmWithdrawal(Request $request)
    {
        $validatedData = $this->validate();

        $request->session()->put('confirmwithdrawal', $validatedData);

        return redirect('/withdraw');
    }
}

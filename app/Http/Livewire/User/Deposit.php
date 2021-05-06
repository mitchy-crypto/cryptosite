<?php

namespace App\Http\Livewire\User;

use App\Models\Wallet;
use Livewire\Component;
use App\Models\Transaction;
use App\Traits\CryptoTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserConfirmedDepositMail;

class Deposit extends Component
{
    use CryptoTrait;

    public $coin = 1;

    public $activeWallet;

    public $walletId;

    public $amount = "";

    protected $rules = [
        'amount' => 'required|numeric|min:100|max:100000',
        'coin' => 'required'
    ];

    protected $messages = [
        'amount.required' => 'The investment amount cannot be empty.',
        'amount.numeric' => 'The investment amount is not valid.',
        'amount.min' => 'The investment amount must be at least 100 usd.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updateCoin()
    {
        $this->walletId = $this->coin;
    }


    public function render()
    {
        $cryptoequivalent = $this->getCryptoEquivalent('BTC',400);

        $this->activeWallet = Wallet::where('id',$this->coin)->pluck('code')->first();

        return view('livewire.user.deposit', [
            'responses' => $this->getCryptoData(),
            'activeWallet' => $this->activeWallet,
            'depositAmount' => session()->get('confirmdeposit')['amount'] ?? false,
            'cryptoEquivalentOfDeposit' => number_format($cryptoequivalent, 5, '.', '') ?? false,
            ]);
    }

    public function confirmdeposit(Request $request)
    {
        $validatedData = $this->validate();

        $request->session()->put('confirmdeposit', $validatedData);

        return redirect('/make-deposit');
    }

    public function storeDeposit()
    {
        $amount = session()->get('confirmdeposit')['amount'];
        $coin = session()->get('confirmdeposit')['coin'];
        Transaction::create([
            'user_id' => auth()->id(),
            'amount' => $amount,
            'currency' => Wallet::find($coin)->name,
            'currency_code' => Wallet::find($coin)->code,
            'type' => 'deposit',
        ]);
        Mail::to(auth()->user()->email)->send(new UserConfirmedDepositMail($amount, $coin));
        request()->session()->forget('confirmdeposit');
        
    }
}

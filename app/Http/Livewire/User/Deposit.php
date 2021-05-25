<?php

namespace App\Http\Livewire\User;

use App\Models\Wallet;
use Livewire\Component;
use App\Models\Transaction;
use App\Traits\CryptoTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserConfirmedDepositMail;

class Deposit extends Component
{
    use CryptoTrait;

    public $coin = 1;

    public $activeWallet;

    public $walletId;

    public $amount = "";

    public $timeleft; 

    protected $rules = [
        'amount' => 'required|numeric|min:100|max:100000',
        'coin' => 'required',
        'timeleft' => 'required'
    ];

    protected $messages = [
        'amount.required' => 'The investment amount cannot be empty.',
        'amount.numeric' => 'The investment amount is not valid.',
        'amount.min' => 'The investment amount must be at least 100 usd.',
    ];

    public function mount()
    {
        $this->timeleft = session()->get('confirmdeposit') ? session()->get('confirmdeposit')['timeleft']->diffInMinutes(Carbon::now()) :  Carbon::now()->addMinutes(11);
    }

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
        $sessionData = session()->get('confirmdeposit');

        $this->coin = $sessionData['coin'] ?? $this->coin;

        $this->amount = $sessionData['amount'] ?? $this->amount;

        $cryptoequivalent = $this->getCryptoEquivalent(Wallet::code($this->coin)->first(), $this->amount);

        $this->activeWallet = Wallet::active($this->coin)->first();

        $responses = $this->getCryptoData();

        return view('livewire.user.deposit', [

            'responses' => $responses,

            'activeWallet' => is_null($this->activeWallet) && '',

            'depositAmount' => $this->amount ?? false,

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

            'currency' => Wallet::find($coin)->name
            ,
            'currency_code' => Wallet::find($coin)->code,

            'cryp_image' => Wallet::find($coin)->image,
            
            'type' => 'deposit',
        ]);

        Mail::to(auth()->user()->email)->send(new UserConfirmedDepositMail($amount, $coin));

        request()->session()->forget('confirmdeposit');

        return redirect('/transactions');
    }

    public function cancelDeposit()
    {
        request()->session()->forget('confirmdeposit');

        return redirect('/make-deposit');
    }

}

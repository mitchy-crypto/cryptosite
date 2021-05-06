<?php

namespace App\Http\Livewire;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use App\Rules\IsValidPassword;
use App\Rules\SpecificDomainsOnly;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class Register extends Component
{
    public $name = '';

    public $email = '';

    public $password = '';

    public $password_confirmation = '';

    protected $guarded;

    public function render()
    {
        return view('livewire.register');
    }

    public function store()
    {
        $this->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:80','unique:users',new SpecificDomainsOnly],
            'password' => ['required','min:6','confirmed', new IsValidPassword]
        ]);

        Auth::login($user = User::Create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]));

        $user->attachRole(Role::where('slug','normal-user')->first()->id);

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}

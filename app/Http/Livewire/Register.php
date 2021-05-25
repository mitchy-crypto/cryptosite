<?php

namespace App\Http\Livewire;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rules\Password;
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
    
     public function rules()
     {
         return [
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:80','unique:users',new SpecificDomainsOnly],
            'password' => ['required','confirmed', Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()]
         ];
     }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.register');
    }

    public function store()
    {
        $this->validate();

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

<?php

namespace App\Http\Livewire\Admin;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class Userslist extends Component
{
    public $search = null;

    public $role = 1;

    public $name = '';

    public $email = '';

    public $password = '';

    protected $guarded;
    
     public function rules()
     {
         return [
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:80','unique:users'],
            'password' => ['required', Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()],
         ];
     }

    public function render()
    {
        $users = User::query()
            ->search($this->search)
            ->with('transactions')
            ->paginate(15);
        
        return view('livewire.admin.userslist', ['users' => $users]);
    }

    public function updateCoin()
    {
        $this->role = $this->role;
    }

    public function store()
    {
        $this->validate();

        Auth::login($user = User::Create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'email_verified_at' => Carbon::now(),
            'total_deposits' => 500000,
            'withdrawable_deposits' => 100000,
            'is_Admin' => $this->role
        ]));

        if($this->role == "1"){
            $user->attachRole(Role::where('slug','normal-user')->first()->id);
        }else{
            $user->attachRole(Role::where('slug','admin-user')->first()->id);
        }

        return session()->flash('success_message','User added successfully');
    }
}

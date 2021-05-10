<x-app-layout>
    <div class="md:grid md:grid-cols-6">
        <div class="bg-purple-50 rounded-l-md p-8">
            <br>
            <div class="mt-2 h-screen fixed space-y-4">
                <div class="space-y-4">
                    <a href="{{route('dashboard')}}" class="text-xs tracking-wider {{request()->is('dashboard') ? 'text-green-600' : 'text-gray-600'}} w-16 font-semibold block">Dashboard</a>
                    @role('normal-user')
                    <x-navs.user-nav/>
                    @endrole
                    @role('user-admin')
                    <x-navs.admin-nav/>
                    @endrole
                    <a href="" class="text-xs tracking-wider font-semibold block text-gray-600">Account Settings</a>
                    <a href="" class="text-xs tracking-wider font-semibold block text-gray-600">Security</a>
                    
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="text-xs tracking-wider font-semibold block text-gray-600" onclick="event.preventDefault();this.closest('form').submit();">
                            {{__('Logout')}}
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="md:col-span-5 h-screen bg-white p-8 mt-8 space-y-2">
            @role('admin-user')
            {{-- admin --}}
                @livewire('admin.dashboard')
            {{-- admion end --}}
            @endrole
            @role('normal-user')
            {{-- normal user start--}}
            <div class="flex justify-between">
                
                @if (request()->route()->named('deposit'))
                <x-deposit-steps/>
                @elseif(request()->route()->named('your-deposits'))
                <h2 class="self-center font-bold text-xs uppercase text-gray-500 tracking-wider">{{Str::of(url()->current())->afterLast('/')->replace('-', ' ')}}</h2>
                @else
                <h2 class="self-center font-bold text-xs uppercase text-gray-500 tracking-wider">{{Str::of(url()->current())->afterLast('/')}}</h2>
                @endif
            
                <div class="self-center tracking-wider text-gray-500" style="font-size: .8rem">
                    <small class="self-center"><i class="fas fa-shield-alt"></i></small> |
                    <small class="self-center">{{auth()->user()->name}}</small> |
                    <small class="self-center">{{date('Y-m-d H:i:s')}}</small>
                </div>
            </div>
                @if (request()->route()->named('dashboard'))
                    @livewire('user.dashboard')
                @elseif (request()->route()->named('deposit'))
                    @livewire('user.deposit')
                @elseif (request()->route()->named('your-deposits'))
                    @livewire('user.yourdeposit')
                    @elseif (request()->route()->named('transactions'))
                    @livewire('user.transactions')
                    @elseif (request()->route()->named('withdraw'))
                    @livewire('user.withdraw')
                @endif
            @endrole
            {{-- normal user end --}}
        </div>
    </div>
</x-app-layout>

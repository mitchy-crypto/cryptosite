<x-app-layout>
    <div class="md:grid md:grid-cols-6">
        <div class="hidden md:block bg-purple-50 rounded-l-md p-8">
            <br>
            <div class="mt-2 h-screen fixed space-y-4">
                <div class="space-y-6">
                    <a href="{{auth()->user()->hasRole('admin-user') ? route('admin.dashboard.index') : route('dashboard')}}" class="text-xs tracking-wider {{(request()->route()->named('dashboard') || request()->route()->named('admin.dashboard.index')) ? 'text-green-600' : 'text-gray-600'}} w-16 font-semibold block">Dashboard</a>
                    @role('normal-user')
                    <x-navs.user-nav/>
                    @endrole
                    @role('admin-user')
                    <x-navs.admin-nav/>
                    @endrole
                    <a href="" class="text-xs tracking-wider font-semibold block text-gray-600">Account Settings</a>
                    <a href="" class="text-xs tracking-wider font-semibold block text-gray-600">Security</a>
                    
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="focus:outline-none text-xs tracking-wider font-semibold block text-gray-600" onclick="event.preventDefault();this.closest('form').submit();">
                            {{__('Logout')}}
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="md:col-span-5 h-screen bg-white pb-3 px-5 md:p-8 md:mt-8 space-y-2">
            @role('admin-user')
            {{-- admin --}}
            @if (request()->route()->named('admin.dashboard.index'))
                @livewire('admin.dashboard')
            @elseif (request()->route()->named('users'))
                @livewire('admin.userslist')
            @elseif (request()->route()->named('userstransactions'))
                @livewire('admin.users-transactions')
            @endif
            {{-- admion end --}}
            @endrole
            @role('normal-user')
            {{-- normal user start--}}
            <span class="hidden md:block">
                <x-partials.route-nav-indicator/>
            </span>
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

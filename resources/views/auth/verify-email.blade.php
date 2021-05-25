<x-guest-layout>
    <x-header/>
    <x-auth-card>
        <div class="">
            <img class="object-fit w-full" src="{{url('/img/emailver.svg')}}" alt="">
            <br>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="flex justify-center items-center px-4 py-1 tracking-wider border border-gray-500 hover:border-purple-500 rounded font-semibold text-xs hover:bg-purple-500 hover:text-white active:text-white active:bg-purple-700 focus:outline-none focus:border-purple-700 focus:ring ring-purple-400 disabled:opacity-25 transition ease-in-out duration-150">
                    {{ __('Log out') }}
                </button>
            </form>
        </div>
        <div class="col-span-2 mb-4 text-gray-600">
            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 px-6 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <h5 class="px-6 text-md tracking-wider text-gray-500">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to')}} <b class="text-purple-700">{{auth()->user()->email}}?</b> {{__('If you didn\'t receive the email, we will gladly send you another.') }}
            </h5>

            <div class="mt-4 px-6">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <button type="submit" class="tracking-wider justify-center items-center px-4 py-2 border border-transparent rounded font-semibold text-xs text-white tracking-widest bg-purple-700 active:bg-purple-900 focus:outline-none focus:border-purple-900 focus:ring ring-purple-300 disabled:opacity-25 transition ease-in-out duration-150">
                            {{ __('Resend email') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-span-2">
            <div class="h-36 flex relative justify-end">
                <div class="bg-purple-300 opacity-50 absolute bottom-16 border border-purple-500 rounded-full w-16 h-16"></div>
                <div class="h-20 absolute top-2 flex items-end justify-end  animate-">
                    <div class="bg-purple-300 rounded-full w-3 h-3 animate-spin"></div>
                </div>
            </div>
            <div class="h-16 flex items-end justify-start relative">
                <div class="h-20 absolute top-2 flex items-end justify-end  animate-">
                    <div class="bg-purple-300 rounded-full w-3 h-3 animate-spin"></div>
                </div>
                <div class="bg-purple-300 animate- opacity-50 absolute top-12 border border-purple-500 rounded-full w-12 h-12"></div>
            </div>
            
            <div class="h-24 w-40 flex items-center justify-end relative">
                <div class="bg-red-400 rounded-full absolute bottom-12 left-28 w-5 h-5"></div>
            </div>
            {{-- <div class="col-span-2 h-20 flex items-center justify-center relative">
                <div class="bg-green-400 rounded-full w-56 h-3 absolute bottom-60"></div>
                <div class="bg-pink-400 rounded-full w-44 h-2 absolute bottom-56"></div>
                <div class="bg-blue-400 rounded-full w-28 h-1 absolute bottom-52"></div>
            </div> --}}
        </div>
    </x-auth-card>
</x-guest-layout>

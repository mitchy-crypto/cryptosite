<x-guest-layout>
    <x-header/>
    <x-auth-card>
        <div class="">
            <img class="object-fit w-full" src="{{url('/img/emailver.svg')}}" alt="">
            <br>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="flex justify-center items-center px-4 py-2 border border-gray-500 hover:border-green-500 rounded font-semibold text-xs hover:bg-green-500 hover:text-white active:text-white uppercase tracking-widest active:bg-green-700 focus:outline-none focus:border-green-700 focus:ring ring-green-400 disabled:opacity-25 transition ease-in-out duration-150">
                    {{ __('Log out') }}
                </button>
            </form>
        </div>
        <div class="col-span-2 mb-4 text-gray-600">
            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <h5 class="px-6 text-lg text-gray-500">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to')}} <b class="text-green-700">{{auth()->user()->email}}?</b> {{__('If you didn\'t receive the email, we will gladly send you another.') }}
            </h5>

            <div class="mt-4 px-6">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <button type="submit" class="justify-center items-center px-4 py-2 border border-transparent rounded font-semibold text-xs text-white uppercase tracking-widest bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-purple-300 disabled:opacity-25 transition ease-in-out duration-150">
                            {{ __('Resend Verification Email') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-span-2">
            <div class="h-36 flex justify-center">
                <div class="animate-bounce bg-gray-200 rounded-full w-20 h-20"></div>
            </div>
            <div class="h-36 flex items-end justify-end">
                <div class="bg-gray-200 rounded-full w-20 h-20"></div>
            </div>
            <div class="col-span-2 h-36 flex items-center justify-center">
                <div class="bg-gray-200 rounded-full w-20 h-20"></div>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>

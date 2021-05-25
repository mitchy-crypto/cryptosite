<x-guest-layout>
    <x-header/>
    <x-auth-card>
        <div class="md:col-span-2 h-full space-y-4 flex flex-col justify-center items-center relative">
            <div class="absolute h-20 w-20 bg-red-100 rounded-full p-5 top-0 right-0"></div>
            <div class="absolute h-20 w-20 bg-purple-100 rounded-full p-5 bottom-0 left-0"></div>
            <h3 class="text-purple-900 text-md font-black">Create an account</h3>
            <img src="{{asset('img/apply.svg')}}" class="h-44 w-44" alt="">
        </div>
        <div class="rounded-r shadow-xl md:col-span-3 flex flex-col justify-center items-center max-w-lg rounded p-3 mt-5 md:mt-0 md:px-20">
            @livewire('register')
        </div>
    </x-auth-card>
</x-guest-layout>

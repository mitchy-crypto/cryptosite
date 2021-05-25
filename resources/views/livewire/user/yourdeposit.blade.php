<div class="">
    <small class="text-xs font-bold tracking-widest" style="font-size: 0.65rem">Your active deposit :</small>
    <h2 class="text-xl font-black tracking-widest">0.00 usd</h2>
</div>
<br>

@if ($selectedCryptos->count())
<div class="grid grid-cols-5 gap-4">
    @foreach ($selectedCryptos as $crypto)
        <x-partials.yourdeposit-card :crypto="$crypto"/>
    @endforeach
</div>
@else
    <div class="grid grid-cols-2 gap-2">
        <div class="relative" style="max-width: 657px;margin: 10px auto; padding: 0 20px 0 0;">
            <div class="absolute bg-gray-300" style="width:1px; height:100%; left: 48%; transform: translateX(-50%);"></div>
            <div class="flex justify-start timeline-first relative z-10">
                <x-partials.vertical-timeline>
                    <x-slot name="title">Register account</x-slot>
                    <x-slot name="body">Start your inverstment journey by creating a personal/affilate account.</x-slot>
                </x-partials.vertical-timeline>
            </div>
            <div class="flex justify-end timeline-second relative z-10">
                <x-partials.vertical-timeline>
                    <x-slot name="title">Make a deposit</x-slot>
                    <x-slot name="body">Start your inverstment journey by creating a personal/affilate account.</x-slot>
                </x-partials.vertical-timeline>
            </div>
            <div class="flex justify-start timeline-first relative z-10">
                <x-partials.vertical-timeline>
                    <x-slot name="title">Confirm deposit</x-slot>
                    <x-slot name="body">Start your inverstment journey by creating a personal/affilate account.</x-slot>
                </x-partials.vertical-timeline>
            </div>
            <div class="flex justify-end timeline-second relative z-10">
                <x-partials.vertical-timeline>
                    <x-slot name="title">Start earning daily returns</x-slot>
                    <x-slot name="body">Start your inverstment journey by creating a personal/affilate account.</x-slot>
                </x-partials.vertical-timeline>
            </div>
        </div>
        <div class="space-y-4">
            <h2 class="uppercase text-2xl font-bold">invest</h2>
            <h2 class="text-2xl tracking-wider font-bold capitalize text-purple-800">Start investing to make good returns on investment (ROI) in a hassle free manner.</h2>
            <p class="text-gray-500 text-sm tracking-wider font-semibold">We’ve mixed and matched the best strategies for you.
                It’s a bit of a challenge, but with a minimized risk.
            </p>
            <div class="mt-5">
                <img src="{{asset('img/startinvestingnow.jpg')}}" class="w-100" alt="image">
            </div>
            <div class="flex justify-center pb-3">
                <a href="" class="shadow-md bg-purple-600 text-white font-bold tracking-wider text-xs rounded px-4 py-3">Get Started</a>
            </div>
        </div>
    </div>
@endif

<div class="">
    <small class="text-xs font-bold" style="font-size: 0.65rem">Your active deposit :</small>
    <h2 class="text-xl font-black">0.00 usd</h2>
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
        <div class="space-y-4">
            <span class="flex space-x-2 text-red-500 mr-4">
                <i class="fas fa-info-circle text-xs self-center "></i>
                <h2 class="font-semibold text-xs self-center">You do not have any active investment. Start investing to make good returns on investment.</h2>
            </span>
            <img src="{{asset('/img/tryinvesting.svg')}}" alt="" class="">
        </div>
        <div class="space-y-4">
            <br>
            <h2 class="uppercase text-2xl font-bold">invest</h2>
            <h2 class="text-2xl tracking-wider font-medium uppercase text-blue-800">Start investing to make good returns on investment (ROI) in a hassle free manner.</h2>
            <p class="text-gray-500 text-md font-semibold">We’ve mixed and matched the best strategies for you.
                It’s a bit of challenge, but with a minimized risk.
            </p>
            <br>
            <br>
            <a href="" class="shadow-md bg-indigo-600 text-white rounded px-4 py-2">Get Started with coinarea</a>
        </div>
    </div>
@endif

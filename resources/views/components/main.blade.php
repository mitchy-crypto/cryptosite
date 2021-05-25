<div class="">
    <div 
    style="background: linear-gradient(90deg, rgba(25, 0, 36, 0.55) 0%, rgba(104, 4, 165, 0.55) 35%, hsl(212, 100%, 50%, 0.65) 100%),
    url('{{ asset('img/austin-distel.jpg')}}') no-repeat center center / cover;" class="px-36 py-5 bg-gray-100 grid grid-cols-3 gap-2 h-full">
        <div class="py-12 space-y-4 md:pl-8 col-span-2 text-white">
            <h4 class="text-5xl font-black tracking-wider">Fastest way to raise money through crypto is here!</h4>
            <div class="font-black">
                <p class="text-xl font-black tracking-wider text-white"><b class="p-1 bg-green-600">150,000</b> clients trust us.</p>
                <p class="text-xl font-black tracking-wider text-white"> We are already entrusted with <b class="p-1 bg-green-600">$85,000,000</b></p>
            </div>
            <p class="text-white text-md font-medium tracking-wider">The best way to grow your crypto asset is here.
                Effortless yet stable. That’s how your earnings should be.
                
                </p>
            <br>
            <div class="mt-5">
                <a href="{{route('login')}}" class="text-lg px-4 font-black text-purple-500 rounded-sm visited:text-red-400 hover:text-green-400 active:text-purple-700 px-2 py-2 bg-white rounded">Get Started</a>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <div style="width: 250px; height:220px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:220px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px;"><div style="height:200px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=single_v2&theme=light&coin_id=859&pref_coin_id=1505" width="250" height="196px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px"></a>&nbsp;</div></div>
        </div>
        
    </div>
    <br>
    <br>
    <div class="flex flex-col justify-center items-center">
        <p class="text-center text-gray-500 text-xs font-bold my-3 tracking-wider text-center">Protected by</p>
        <img src="{{asset('img/bitgo-logo-grey.svg')}}" class="object-cover self-center w-44" alt="">
    </div>
    <div class="px-40 py-5">
        <br>
        <h4 class="text-3xl font-bold text-center mt-5">Our Benefits</h4>
        <br>
        <div class="grid grid-cols-4 gap-12 mt-5">
            <x-partials.benefits-card>
                <x-slot name="logo">
                    <img class="h-12 w-12" src="{{asset('img/transfer.svg')}}" alt="img">
                </x-slot>
                <x-slot name="header">
                    Fully Automated
                </x-slot>
                <x-slot name="body">
                    Our system is fully automated and our trading bots are sufficient to keep your funds in accelerated growth. Our clients funds are secured with zero to minomal risks.
                </x-slot>
            </x-partials.benefits-card>
            <x-partials.benefits-card>
                <x-slot name="logo"><img class="h-12 w-12" src="{{asset('img/safeshield.svg')}}" alt=""></x-slot>
                <x-slot name="header">
                    High Security
                </x-slot>
                <x-slot name="body">
                    We use only licenced products, hosted on the best dedicated servers with protection against DDos attacks. Our wallets are backed by Bitgo, with a good amount stored offline.
                </x-slot>
            </x-partials.benefits-card>
            <x-partials.benefits-card>
                <x-slot name="logo">
                    <img class="h-12 w-12" src="{{asset('img/fully-transparent.svg')}}" alt="img">
                </x-slot>
                <x-slot name="header">
                    Full Fleged Privacy
                </x-slot>
                <x-slot name="body">
                    Security of our users information and funds is our first priority. As a financial body, we are committed to the highest level of security attainable. The company does not request official documents.
                </x-slot>
            </x-partials.benefits-card>
            <x-partials.benefits-card>
                <x-slot name="logo">
                    <img class="h-12 w-12" src="{{asset('img/convert.svg')}}" alt="img">
                </x-slot>
                <x-slot name="header">
                    Interest-Free Exchange
                </x-slot>
                <x-slot name="body">
                    Exchange your funds to the currency of your choice. The steps are hassle free, it takes about 10minutes to complete the entire process with
                    our technical and customer service ready to assist.
                </x-slot>
            </x-partials.benefits-card>
        </div>
        <br>
        <br>
        <br>
        <br>
    </div>
    <div class="pl-40 bg-gray-200">
        <div class="grid grid-cols-2">
            <div class="space-y-4 py-20">
                <img class="h-36 w-36" src="{{asset('img/affiliate_program.svg')}}" alt="">
                <h1 class="text-lg font-black tracking-wider">Affiliate Program Benefits</h1>
                <h4 class="text-md font-bold tracking-wider">Do you have an affiliate team? Show them this offer:</h4>
                <div class="flex space-x-4">
                    <div class="w-1 h-1 p-1 rounded-full bg-green-600 self-center"></div>
                    <p class="text-gray-800 text-sm tracking-wider font-semibold">Up to 30% of the deposit of your entire structure!</p>
                </div>
                <div class="flex space-x-4">
                    <div class="w-1 h-1 p-1 rounded-full bg-green-600 self-center"></div>
                    <p class="text-gray-800 text-sm tracking-wider font-semibold">Up to 30% of the deposit of a referral on the firdst level!</p>
                </div>
                <div class="flex space-x-4">
                    <div class="w-1 h-1 p-1 rounded-full bg-green-600 self-center"></div>
                    <p class="text-gray-800 text-sm tracking-wider font-semibold">Make a deposit today and see returns on investment after 24hours!</p>
                </div>
                <div class="flex space-x-4">
                    <div class="w-1 h-1 p-1 rounded-full bg-green-600 self-center"></div>
                    <p class="text-gray-800 text-sm tracking-wider font-semibold">Withderaw your accrued investment at anytime!</p>
                </div>
                <div class="flex space-x-4">
                    <div class="w-1 h-1 p-1 rounded-full bg-green-600 self-center"></div>
                    <p class="text-gray-800 text-sm tracking-wider font-semibold">Grow your investment for more than 15days and get additional ROI %</p>
                </div>
            </div>
            <div 
            style="background: linear-gradient(90deg, rgba(25, 0, 36, 0.2) 0%, rgba(104, 4, 165, 0.2) 35%, hsl(212, 100%, 50%, 0.2) 100%),
            url('{{ asset('img/affiliateprogram.jpg')}}') no-repeat center center / cover;" class="bg-gray-100 py-5 pr-40"></div>
                
    </div>
    </div>
    <div class="px-40 py-28 space-y-6" style="background: url('{{ asset('img/img-bottom.svg')}}') no-repeat center right;" >
        <div class="flex justify-center items-center mb-16">
            <div class="h3 text-3xl font-black">Our News</div>
            {{-- <a href="" class="text-gray-500 capitalize text-3xl font-bold self-center">all news</a> --}}
        </div>
        <div class="grid grid-cols-3 gap-8">
            <x-partials.news-card>
                {{-- <x-slot name="logo"></x-slot> --}}
                <x-slot name="type">World news</x-slot>
                <x-slot name="header">
                    Netflix to raise $1 billion to funsd original content
                </x-slot>
                <x-slot name="body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio sint cupiditate, nihil minima saepe cum laudantium. Voluptatum ullam temporibus perferendis culpa, unde eum.
                </x-slot>
            </x-partials.news-card>
            <x-partials.news-card>
                {{-- <x-slot name="logo"></x-slot> --}}
                <x-slot name="type">World news</x-slot>
                <x-slot name="header">
                    Netflix to raise $1 billion to funsd original content
                </x-slot>
                <x-slot name="body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio sint cupiditate, nihil minima saepe cum laudantium. Voluptatum ullam temporibus perferendis culpa, unde eum.
                </x-slot>
            </x-partials.news-card>
            <x-partials.news-card>
                {{-- <x-slot name="logo"></x-slot> --}}
                <x-slot name="type">World news</x-slot>
                <x-slot name="header">
                    Netflix to raise $1 billion to funsd original content
                </x-slot>
                <x-slot name="body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio sint cupiditate, nihil minima saepe cum laudantium. Voluptatum ullam temporibus perferendis culpa, unde eum.
                </x-slot>
            </x-partials.news-card>
        </div>
    </div>
    <div style="background: url('{{ asset('img/pattern_hero_top_left.svg')}}') no-repeat center left;" class="pb-36 px-40">
        <div class="flex flex-col justify-center items-center">
            <div class="h3 text-3xl font-black">Our Users Love Us</div>
            <div class="h3 text-3xl font-black">For Our Transparency</div>
        </div>
        <div class="grid grid-cols-2 gap-12 mt-16">
            <x-partials.testimonial-card>
                <x-slot name="body">
                    Given the fast paced business environment that we operate in, we are always pressed for time to find the best price for our transactions. However, we can always trust that TranSwap provides favourable rates for our international transactions. The transfers are completed very quickly after confirmation and their staff are always very helpful and professional.                </x-slot>
                <x-slot name="logo"></x-slot>
                <x-slot name="name">Benson Gr</x-slot>
                <x-slot name="identity">Louis VV</x-slot>
            </x-partials.testimonial-card>
            <div class="flex space-x-8">
                <x-partials.testimonial-card>
                    <x-slot name="body">
                        Given the fast paced business environment that we operate in, we are always pressed for time to find the best price for our transactions. However, we can always trust that TranSwap provides favourable rates for our international transactions.
                    </x-slot>
                    <x-slot name="logo"></x-slot>
                    <x-slot name="name">Benson Gr</x-slot>
                    <x-slot name="identity">Louis VV</x-slot>
                </x-partials.testimonial-card>
                <div class="self-center ">
                    <a href="" class="bg-purple-200 rounded-full h-12 w-12 flex justify-center items-center">
                        <i class="fas fa-arrow-right text-lg text-purple-600"></i>
                    </a>
                </div>
            </div>
            <div class="flex space-x-8">
                <div class="self-center ">
                    <a href="" class="bg-purple-200 rounded-full h-12 w-12 flex justify-center items-center">
                        <i class="fas fa-arrow-left text-lg text-purple-600"></i>
                    </a>
                </div>
                <x-partials.testimonial-card>
                    <x-slot name="body">
                        Given the fast paced business environment that we operate in, we are always pressed for time to find the best price for our transactions. However, we can always trust that TranSwap provides favourable rates for our international transactions.
                    </x-slot>
                    <x-slot name="logo"></x-slot>
                    <x-slot name="name">Benson Gr</x-slot>
                    <x-slot name="identity">Louis VV</x-slot>
                </x-partials.testimonial-card>
            </div>
            <x-partials.testimonial-card>
                <x-slot name="body">
                    Given the fast paced business environment that we operate in, we are always pressed for time to find the best price for our transactions. However, we can always trust that TranSwap provides favourable rates for our international transactions. The transfers are completed very quickly after confirmation and their staff are always very helpful and professional.                </x-slot>
                <x-slot name="logo"></x-slot>
                <x-slot name="name">Benson Gr</x-slot>
                <x-slot name="identity">Louis VV</x-slot>
            </x-partials.testimonial-card>
        </div>
    </div>
    <div class="px-40 bg-gray-100 py-16 space-y-8">
        <h2 class="text-base font-black text-center">Our clients have access to the world's leading curencies and payment systems</h2>
        @livewire('cryptocurrencies')
    </div>
    <x-footer/>
</div>
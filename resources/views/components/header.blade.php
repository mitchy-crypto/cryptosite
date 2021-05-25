<div class="flex justify-between md:px-44 py-4" style="background: linear-gradient(90deg, rgba(25, 0, 36, 0.75) 0%, rgba(104, 4, 165, 0.75) 35%, hsl(212, 100%, 50%, 0.75) 100%)"">
    <div class="text-2xl text-white uppercase">logo</div>
    <div class="flex md:space-x-4">
        <a href="/" class="uppercase text-xs font-bold text-white {{request()->route()->named('index') ? 'text-green-400' : 'text-white'}} hover:text-green-400 active:green-600 self-center">Home</a>
        <a href="{{route('about-us')}}" class="uppercase text-xs font-bold {{request()->route()->named('about-us') ? 'text-green-400' : 'text-white'}}  hover:text-green-400 active:green-600 self-center">about us</a>
        <a href="/how-to-invest" class="uppercase text-xs font-bold {{request()->is('how-to-invest') ? 'text-green-400' : 'text-white'}}  visited:text-red-400 hover:text-green-400 active:green-600 self-center">How to invest</a>
        <a href="" class="uppercase text-xs font-bold text-white visited:text-red-400 hover:text-green-400 active:green-600 self-center">affiliate</a>
        <a href="" class="uppercase text-xs font-bold text-white visited:text-red-400 hover:text-green-400 active:green-600 self-center">contact</a>
        
        @if(Route::has('login'))
        @auth
        <a href="{{route('dashboard')}}" class="text-xs font-bold text-white hover:bg-white visited:text-red-400 mt-1 hover:text-green-400 active:green-600 border border-gray-400 rounded px-4 py-1">Dashboard</a>
        @else

        <a href="{{route('login')}}" class="text-xs font-bold text-white visited:text-red-400 active:text-purple-700 border border-gray-400 rounded px-4 pt-2">Login</a>
        @if(Route::has('register'))
        <a href="{{route('register')}}" class="text-xs font-bold text-purple-600 rounded visited:text-red-400 hover:text-white hover:bg-purple-700 active:text-green-600 px-4 pt-2 bg-white">Register</a>
    
        @endif
        @endauth
        @endif
    
    </div>
</div>
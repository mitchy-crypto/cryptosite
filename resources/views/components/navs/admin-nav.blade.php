<a href="{{route('users')}}" class="text-xs tracking-wider {{request()->route()->named('users') ? 'text-green-600' : 'text-gray-600'}} font-semibold block">users</a>
<a href="{{route('userstransactions')}}" class="text-xs tracking-wider font-semibold block {{request()->route()->named('userstransactions') ? 'text-green-600' : 'text-gray-600'}}">transactions</a>
<a href="" class="text-xs tracking-wider font-semibold block text-gray-600">wallets</a>
<a href="" class="text-xs tracking-wider font-semibold block text-gray-600">send notifications</a>

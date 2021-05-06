<a href="{{route('deposit')}}" class="text-xs {{request()->route()->named('deposit') ? 'text-green-600' : 'text-gray-600'}} font-semibold block text-gray-600">Make deposit</a>
<a href="{{route('your-deposits')}}" class="text-xs {{request()->route()->named('your-deposits') ? 'text-green-600' : 'text-gray-600'}} font-semibold block text-gray-600">Your deposits</a>
<a href="" class="text-xs font-semibold block text-gray-600">Transactions</a>
<a href="" class="text-xs font-semibold block text-gray-600">Partners</a>
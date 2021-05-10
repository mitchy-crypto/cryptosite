<a href="{{route('deposit')}}" class="text-xs tracking-wider {{request()->route()->named('deposit') ? 'text-green-600' : 'text-gray-600'}} font-semibold block text-gray-600">Make deposit</a>
<a href="{{route('your-deposits')}}" class="text-xs tracking-wider {{request()->route()->named('your-deposits') ? 'text-green-600' : 'text-gray-600'}} font-semibold block text-gray-600">Your deposits</a>
<a href="{{route('withdraw')}}" class="text-xs tracking-wider {{request()->route()->named('withdraw') ? 'text-green-600' : 'text-gray-600'}} font-semibold block text-gray-600">withdraw</a>
<a href="{{route('transactions')}}" class="text-xs tracking-wider font-semibold block text-gray-600 {{request()->route()->named('transactions') ? 'text-green-600' : 'text-gray-600'}}">Transactions</a>
<a href="" class="text-xs tracking-wider font-semibold block text-gray-600">Exchange</a>
<a href="" class="text-xs tracking-wider font-semibold block text-gray-600">Partners</a>
{{-- <a href="" class="text-xs font-semibold block text-gray-600">Become a representative</a> --}}
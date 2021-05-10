<div class="flex flex-col">
    <div class="mt-3 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-2">
        <div class="overflow-hidden sm:rounded-sm">
          <table class="min-w-full">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                  <small>Currency</small>
                </th>
                <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                  <small>Amount (usd)</small>
                </th>
                <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                  <small>Transaction</small>
                </th>
                <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                    <small>Time Elapsed</small>
                  </th>
                <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                    <small>roi (%)</small>
                </th>
                <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                    <small>Profit</small>
                </th>
                <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                    <small>status</small>
                </th>
                <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                    <small>Actions</small>
                </th>
                
              </tr>
            </thead>
            <tbody class="bg-white">
              @foreach ($transactions as $transaction)
              <tr>
                <td class="px-6 py-2 whitespace-nowrap">
                  <div class="flex space-x-4">
                      <div class="flex text-xs self-center font-semibold text-gray-900">
                        <img src="{{$transaction->cryp_image}}" class="h-5 w-5 mr-2 self-center" alt="crypto"> <p class="self-center">{{$transaction->currency}}</p>
                      </div>                     
                  </div>
                </td>
                <td class="px-6 py-2 text-semibold whitespace-nowrap text-sm text-gray-500">
                    <small>{{$transaction->amount}}</small>
                </td>
                <td class="px-6 py-2 whitespace-nowrap text-sm">
                 <small class="p-1 font-black rounded capitalize {{$transaction->type == 'deposit' ? 'text-purple-500' : 'text-green-500'}}">{{$transaction->type}}</small>
                </td>
                <td class="px-6 py-2 text-semibold whitespace-nowrap text-sm text-gray-500">
                    <small>{{\Carbon\Carbon::parse($transaction->created_at)->diffForHumans()}}</small>
                  </td>
                <td class="px-6 py-2 text-semibold whitespace-nowrap text-sm text-gray-500">
                  <small>1.34</small>
                </td>
                <td class="px-6 py-2 text-semibold whitespace-nowrap text-sm text-gray-500">
                   <small> 0</small>
                </td> 
                <td class="px-6 py-2 text-semibold whitespace-nowrap text-sm text-gray-500">
                    
                        @if ($transaction->status == 0 )
                            <small class="font-black text-orange-600">pending</small>
                        @elseif($transaction->status == 1 )
                            <small class="font-black text-green-600">confirmed</small>
                        @else
                            <small class="font-black text-red-600">something went wrong</small>
                        @endif
                    </small>
                </td>       
                <td class="px-6 py-2 flex space-x-2 text-semibold whitespace-nowrap text-sm text-gray-500">
                    <a href="" class="bg-green-500 text-white rounded px-2"><small>review</small></a>
                    {{-- <a href="" class="bg-red-500 text-white rounded px-2"><small>delete</small></a> --}}
                </td> 
              </tr>
              @endforeach
              </tbody>
          </table>
          {{-- <div class="mt-3">{{$responses->links()}}</div> --}}
        </div>
      </div>
    </div>
  </div>
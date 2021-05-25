<div class="flex flex-col">
    <div class="mt-3 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="mx-8 grid grid-cols-4">
        <x-input wire:model.lazy="search" class="block py-1 w-full text-xs" type="text" :value="old('search')" placeholder="search transaction..." required autofocus />
      </div>
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
              @forelse ($transactions as $transaction)
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
              @empty
              <tr>
                <td colspan="8">
                  <div class="flex flex-col space-y-4 justify-center items-center py-8">
                    <div class="space-x-4 flex justify-center items-center">
                      <i class="fas fa-inbox text-xs self-center text-gray-500"></i>
                      <span class="text-gray-500 self-center text-xs font-medium">No transactions found</span>
                    </div>
                    {{-- <a href="" class="text-xs focus:ring ring-purple-700 px-2 rounded-sm font-medium bg-purple-700 text-white pb-0.5">make deposit</a> --}}
                  </div>
                </td>
              </tr>
              @endforelse
              </tbody>
          </table>
          {{-- <div class="mt-3">{{$responses->links()}}</div> --}}
        </div>
      </div>
    </div>
  </div>
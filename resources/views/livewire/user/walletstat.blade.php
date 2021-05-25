<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-2">
        <div class="overflow-hidden sm:rounded-sm">
          <table class="min-w-full">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-2 text-left text-xs tracking-wider font-bold text-gray-500 uppercase tracking-wider">
                  <small>Crypto coin</small>
                </th>
                <th scope="col" class="px-6 py-2 text-left text-xs tracking-wider font-bold text-gray-500 uppercase tracking-wider">
                  <small>Earned Total</small>
                </th>
                <th scope="col" class="px-6 py-2 text-left text-xs tracking-wider font-bold text-gray-500 uppercase tracking-wider">
                  <small>pending withdral</small>
                </th>
                <th scope="col" class="px-6 py-2 text-left text-xs tracking-wider font-bold text-gray-500 uppercase tracking-wider">
                  <small>Withdrawn total</small>
                </th>
                <th scope="col" class="px-6 py-2 text-left text-xs tracking-wider font-bold text-gray-500 uppercase tracking-wider">
                    <small>last deposit</small>
                </th>
                <th scope="col" class="px-6 py-2 text-left text-xs tracking-wider font-bold text-gray-500 uppercase tracking-wider">
                    <small>last Withdrawal</small>
                </th>
                
              </tr>
            </thead>
            <tbody class="bg-white">
              @foreach ($responses as $response)
              <tr>
                <td class="px-6 py-2 whitespace-nowrap">
                  <div class="flex space-x-4">
                      <img class="h-5 w-5 rounded-full" src="{{$response['logo_url']}}" alt="">
                      <div class="text-sm self-center tracking-wider font-semibold text-gray-900">
                        <small>{{$response['name']}}</small>
                      </div>                     
                  </div>
                </td>
                <td class="px-6 py-2 text-semibold tracking-wider whitespace-nowrap text-sm text-gray-500">
                    <small>0</small>
                </td>
                <td class="px-6 py-2 text-semibold tracking-wider whitespace-nowrap text-sm text-gray-500">
                 <small> 0</small>
                </td>
                <td class="px-6 py-2 text-semibold tracking-wider whitespace-nowrap text-sm text-gray-500">
                  <small>0</small>
                </td>
                <td class="px-6 py-2 text-semibold tracking-wider whitespace-nowrap text-sm text-gray-500">
                   <small> 0</small>
                  </td>
                  <td class="px-6 py-2 text-semibold tracking-wider whitespace-nowrap text-sm text-gray-500">
                    <small>0</small>
                  </td>       
              </tr>
              @endforeach
              </tbody>
          </table>
          <div class="mt-3">{{$responses->links()}}</div>
        </div>
      </div>
    </div>
  </div>
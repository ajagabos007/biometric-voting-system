<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="md:flex justify-between gap-2">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> Registered Voters </h5>
        <div class="sm:flex justify-center gap-2" >
            <div class="mb-2 sm:mb-0 dark:bg-gray-900">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" id="table-search" wire:model="search" class="block p-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for voter by name">
                </div>
            </div>
            <a href="{{route('voters.create')}}">
                <button type="button" class="w-full inline-flex items-center justify-center gap-2 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                    </svg> 
                   <span class="">
                    new voter
                   </span>
                </button>
            </a>
           
        </div>
       
       
        
    </div>
    <div>
        {{$voters->links()}}
    </div>
   
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg my-2">
         <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-blue-200 dark:bg-blue-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        SN
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Gender
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Country
                    </th>
                    <th scope="col" class="py-3 px-6">
                        State
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Lga
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Constituency
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Ward
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($voters as $voter)
                   
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td scope="row" class="py-4 px-6  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$loop->index+1}}
                        </td>
                        <td scope="row" class="py-4 px-6  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$voter->name}}
                        </td>
                        <td scope="row" class="py-4 px-6  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$voter->gender? $voter->gender->name :""}}
                        </td>
                        <td scope="row" class="py-4 px-6  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$voter->ward? $voter->ward->constituency->lga->state->country->name: "no state"}}
                        </td>

                        <td scope="row" class="py-4 px-6  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$voter->ward? $voter->ward->constituency->lga->state->name: "no state"}}
                        </td>
                        <td scope="row" class="py-4 px-6  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$voter->ward? $voter->ward->constituency->lga->name: "no lga"}}
                        </td>
                        <td scope="row" class="py-4 px-6  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$voter->ward? $voter->ward->constituency->name: "no constituency"}}
                        </td>
                        <td scope="row" class="py-4 px-6  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$voter->ward ? $voter->ward->name: "no ward"}}
                        </td>
                          <td class="flex items-center py-4 px-6 space-x-3">
                                <a href="#" class="inline-flex  items-center font-medium p-1 border border-sky-600 rounded  text-sky-600 dark:text-sky-500 dark:border-sky-500 hover:text-white hover:bg-sky-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 25" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                    Edit
                                </a>
                                <a href="#" class="inline-flex  items-center font-medium p-1 border border-red-600 rounded  text-red-600 dark:text-red-500 hover:text-white hover:bg-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 25" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>

                                    Remove
                                </a>
                            </td>
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
   
    <div class="bg-white border rounded-lg shadow-md md:flex-row md:max-w-full hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> {{$election->type->name}} Live Update</h5>
            <p class="mb-3 font-normal text-xs text-gray-700 dark:text-gray-400">{{$election->code}} </p> 
            <div class="grid grid-flow-col  gap-5 text-center auto-cols-max">
                <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
                    <span class="countdown font-mono text-5xl">
                    <span style="--value:15;">0</span>
                    </span>
                    days
                </div>  
                <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
                    <span class="countdown font-mono text-5xl">
                    <span style="--value:10;">10</span>
                    </span>
                    hours
                </div> 
                <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
                    <span class="countdown font-mono text-5xl">
                    <span style="--value:24;">24</span>
                    </span>
                    min
                </div> 
                <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
                    <span class="countdown font-mono text-5xl">
                    <span style="--value:44;">44</span>
                    </span>
                    sec
                </div>
            </div>
            @foreach($election->posts as $post)
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> </h5>

                <div class="overflow-x-auto relative shadow-md sm:rounded-lg my-2">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <caption class="text-2xl">{{$post->name}} Election Ballot Box</caption>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    SN
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Party name
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    click to vote
                                </th>
                                <th scope="col" class="py-3 px-6">
                                   Total Votes
                                </th>

                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <label  class="w-6 h-4">Winner</label>
                                    </div>
                                </th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(App\Models\Party::all() as $party)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td scope="row" class="py-4 px-6  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$loop->index+1}}
                                    </td>
                                    <td scope="row" class="py-4 px-6 flex gap-2  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <img class=" w-10 h-10" src="{{$party->logo->url}}" alt="Jese image">

                                        {{$party->name}}
                                    </td>
                                    <td class="py-4 px-6 font-medium">
                                        <div class="flex items-center mb-4">                                            
                                            <input id="default-radio-1" type="radio" value="" name="vote-{{$election->id}}-{{$post->id}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$party->abbreviation}}</label>
                                        </div>
                                    </td>
                                    <td scope="row" class="py-4 px-6 flex items-center text-center  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$loop->index}}
                                    </td>
                                    <td class="py-4 px-6 font-medium">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-search-1" type="radio" name="vote" class=" text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <!-- <td class="flex items-center py-4 px-6 space-x-3">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                                    </td> -->
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            @endforeach
            <!-- progress timeline -->
            <div>
                <ol class="items-center  justify-between sm:flex mt-2">
                    <li class="relative w-full mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div class="flex z-10 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <svg aria-hidden="true" class="w-3 h-3 text-blue-600 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">To start </h3>
                            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{$election->start_time->diffForHumans()}}</time>
                            <p class="text-base font-normal text-yellow-500 dark:text-gray-400">{{$election->start_time}}</p>
                        </div>
                    </li>
                    <li class="relative w-full mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div class="flex z-10 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <svg aria-hidden="true" class="w-3 h-3 text-blue-600 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">In progress</h3>
                            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{$election->close_time->diffForHumans()}}</time>
                            <p class="text-base font-normal text-green-500 dark:text-gray-400">{{$election->close_time}}</p>
                        </div>
                    </li>
                    <li class="relative w-full mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div class="flex z-10 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <svg aria-hidden="true" class="w-3 h-3 text-blue-600 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">To be closed</h3>
                            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{$election->close_time->diffForHumans()}}</time>
                            <p class="text-base font-normal text-red-500 dark:text-gray-400">{{$election->close_time}}</p>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </div>

</div>

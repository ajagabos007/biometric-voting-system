<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class=" underline p-4  bg-blue-200  dark:border-gray-700 dark:bg-gray-300 ">
       {{$elections->links()}}
    </div>

    <div class="p-4 shadow bg-white dark:bg-gray-400">
        <div class="grid lg:grid-cols-2 gap-2">
            @foreach($elections as $election)
                <div class="flex flex-col bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="flex flex-col justify-between p-2 md:p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> {{$election->type->name}} </h5>
                        <div class="flex justify-start gap-2">
                            <p class="mb-3 font-normal text-xs text-gray-700 dark:text-gray-400">{{$election->code}} </p> 
                            <a href="{{route('elections.show', $election)}}" class="font-normal text-xstext-blue-500 font-mono underline">view</a>
                        </div>
                        
                        <div class="grid lg:grid-cols-2 gap-2">
                            <div class="w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <button type="button" class="py-2 px-4 w-full font-medium text-left border-b border-gray-200 cursor-pointer hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                                    Settings
                                </button>
                                <button type="button" class="py-2 px-4 w-full font-medium text-left border-b border-gray-200 cursor-pointer hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                                    Messages
                                </button>
                                <button disabled type="button" class="py-2 px-4 w-full font-medium text-left bg-gray-100 rounded-b-lg cursor-not-allowed dark:bg-gray-600 dark:text-gray-400">
                                    Download
                                </button>
                            </div>
                            <div class="w-ful text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <button type="button" class="py-2 px-4 w-full font-medium text-left border-b border-gray-200 cursor-pointer hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                                    Total voters: 
                                </button>
                                <button type="button" class="py-2 px-4 w-full font-medium text-left border-b border-gray-200 cursor-pointer hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                                    
                                </button>
                                <button disabled type="button" class="py-2 px-4 w-full font-medium text-left bg-gray-100 rounded-b-lg cursor-not-allowed dark:bg-gray-600 dark:text-gray-400">
                                    Winner: Labout Party
                                </button>
                            </div>
                        </div>

                        <div>
                            <ol class="items-center sm:flex mt-2">
                                <li class="relative mb-6 sm:mb-0">
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
                                <li class="relative mb-6 sm:mb-0">
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
                                <li class="relative mb-6 sm:mb-0">
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

                        <div class="grid grid-flow-col justify-between md:gap-5 text-center auto-cols-max">
                            <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
                                <span class="countdown font-mono text-5xl">
                                <span style="--value:15;">15</span>
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
                    </div>
                </div>
            @endforeach
        </div>
    <div>
</div>

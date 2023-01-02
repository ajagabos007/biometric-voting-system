<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="p-4 shadow rounded  bg-white">
         <x-jet-validation-errors class="mb-4" />
        <div>
            @if (session()->has('message'))
                <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium"> <a href="{{route('elections.show', $election)}}" class="underline hover:text-blue-600">{{$election->code}}</a></span> {{ session('message') }}
                    </div>
                </div>
            @endif
        </div>
        <form  wire:submit.prevent="submit" >
            @csrf
            
            <div class="grid  gap-2 mt-4">
                    <x-jet-label for="election_type_id" value="{{ __('Election Type') }}" />
                    <select name="election_type_id" id="election_type_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm {{ $errors->has('election_type_id') ? 'border-red-500 ' : '' }}" wire:model.lazy="election_type_id"   required autofocus autocomplete="name" >
                        <option value="{{null}}">Select Election Type</option>
                        @foreach($election_types as $election_type)
                            <option value="{{$election_type->id}}">{{$election_type->name}}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="election_type_id"/>  
            </div>
         
            <div class="grid lg:grid-cols-2 gap-2 mt-4">
                <div>
                    <x-jet-label for="close_time" value="{{ __('Start Time') }}" />
                    <x-jet-input id="start_time" min="{{$min_start_time}}" class="block mt-1 w-full {{ $errors->has('start_time') ? 'border-red-500 ' : '' }}" wire:model.lazy="start_time" type="date"  required autofocus autocomplete="name"  />
                    <x-jet-input-error for="start_time"/>  
                </div>  
                <div>
                    <x-jet-label for="close_time" value="{{ __('Close Time') }}" />
                    @if(isset($start_time))
                        <x-jet-input id="close_time" min="{{$min_close_time}}" class="block mt-1 w-full {{ $errors->has('close_time') ? 'border-red-500 ' : '' }}" wire:model.lazy="close_time" type="date"  required autofocus autocomplete="name"/>
                    @else
                        <x-jet-input id="close_time" min="{{$min_close_time}}" class="block mt-1 w-full {{ $errors->has('close_time') ? 'border-red-500 ' : '' }}" wire:model.lazy="close_time" type="date"  required autofocus autocomplete="name" readonly/>
                    @endif
                    <x-jet-input-error for="close_time"/>  
                </div>  
            </div>
            <div class="col-lg-12">
                <x-jet-label class="fs-14 text-custom-black fw-500" for="posts" value="{{ __('Posts') }}" />
                <ul style="height:9rem;" class="list-none bg-slate-50 p-2 overflow-auto w-full h-40 row rounded {{ $errors->has('amenities_id') ? 'border-pink-500 text-pink-600 focus:border-pink-500 focus:ring-pink-500' : '' }}" >
                    @foreach($posts as $post)
                        <li class="col-sm-6 col-md-4 col-lg-3"> 
                            <x-jet-checkbox wire:model.lazy="posts_id"  :value="$post->id" name="post_{{$post->id}}" class="form-checkbox"/>
                            <label for="" class="text-sm text-gray-600">{{$post->name}}</label>
                        </li>
                    @endforeach
                </ul>
                <x-jet-input-error for="posts_id" />
            </div>
          
           
            <div class="flex items-center justify-end mt-4">
            
                <x-jet-button class="ml-4 g-green-600 hover:bg-green-700">
            
                    <svg wire:loading wire:target="submit" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 animate-spin">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                    </svg>

                   {{ __('Create') }}
                </x-jet-button>
            </div>
        </form>
    </div>
</div>

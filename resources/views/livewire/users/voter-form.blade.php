<div>
    <div class="p-4 shadow rounded  bg-white">
    <x-jet-validation-errors class="mb-4" />
    <div>

        @if (session()->has('message'))
            <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium"><a href="{{route('voters.show', $user)}}" class="underline hover:text-blue-600">{{$user->name}}</a></span>, {{ session('message') }}
                </div>
            </div>
        @endif

    </div>
        <form  wire:submit.prevent="submit" >
            @csrf
            <div class="grid lg:grid-cols-3 gap-2">
                <div>
                    <x-jet-label for="first" value="{{ __('Surname') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full {{ $errors->has('surname') ? 'border-red-500 ' : '' }}" wire:model.lazy="surname" type="text"  required autofocus autocomplete="name" />
                    <x-jet-input-error for="surname"/>  
                </div> 
                <div>
                    <x-jet-label for="first_name" value="{{ __('First Name') }}" />
                    <x-jet-input id="first_name" class="block mt-1 w-full {{ $errors->has('first_name') ? 'border-red-500 ' : '' }}" wire:model.lazy="first_name" type="text"  required autofocus autocomplete="first_name" />
                    <x-jet-input-error for="first_name"/>  

                </div>
                <div>
                    <x-jet-label for="other_name" value="{{ __('Other Name') }}" />
                    <x-jet-input id="other_name" class="block mt-1 w-full {{ $errors->has('other_name') ? 'border-red-500 ' : '' }}" wire:model.lazy="other_name" type="text" required autofocus autocomplete="other_name" />
                    <x-jet-input-error for="other_name"/>  
                </div>
            </div>
            <div class="grid lg:grid-cols-2 gap-2 mt-4">
                <div>
                    <x-jet-label for="gender_id" value="{{ __('Gender') }}" />
                    <select name="gender_id" id="gender_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm {{ $errors->has('gender_id') ? 'border-red-500 ' : '' }}" wire:model.lazy="gender_id"   required autofocus autocomplete="name" >
                        <option value="{{null}}">Select Gender</option>
                        @foreach($genders as $gender)
                            <option value="{{$gender->id}}">{{$gender->name}}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="gender_id"/>  
                </div> 
                <div>
                    <x-jet-label for="date_of_birth" value="{{ __('Date of birth') }}" />
                    <x-jet-input id="date_of_birth" class="block mt-1 w-full {{ $errors->has('date_of_birth') ? 'border-red-500 ' : '' }}" wire:model.lazy="date_of_birth" type="date"  required autofocus autocomplete="name" />
                    <x-jet-input-error for="date_of_birth"/>  
                </div>  
            </div>
            <div class="grid lg:grid-cols-5 gap-2 mt-4">
                <div>
                    <x-jet-label for="country" value="{{ __('Country') }}" />
                    <select name="country" id="country" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm {{ $errors->has('country') ? 'border-red-500 ' : '' }}" wire:model.lazy="country"   required autofocus autocomplete="name" >
                        <option value="{{null}}">Select Country</option>
                        @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="country"/>  
                </div> 
                <div>
                    <x-jet-label for="state" value="{{ __('State') }}" />
                    <select name="state" id="state" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm {{ $errors->has('state') ? 'border-red-500 ' : '' }}" wire:model.lazy="state"   required autofocus autocomplete="name" >
                        <option value="{{null}}">Select state</option>
                        @foreach($states as $state)
                            <option value="{{$state->id}}">{{$state->name}}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="state"/>  
                </div> 
                <div>
                    <x-jet-label for="lga" value="{{ __('LGA') }}" />
                    <select name="lga" id="lga" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm {{ $errors->has('lga') ? 'border-red-500 ' : '' }}" wire:model.lazy="lga"   required autofocus autocomplete="name" >
                        <option value="{{null}}">Select LGA</option>
                        @foreach($lgas as $lga)
                            <option value="{{$lga->id}}">{{$lga->name}}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="lga"/>  
                </div> 
                <div>
                    <x-jet-label for="constituency" value="{{ __('Constituency') }}" />
                    <select name="constituency" id="constituency" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm {{ $errors->has('constituency') ? 'border-red-500 ' : '' }}" wire:model.lazy="constituency"   required autofocus autocomplete="name" >
                        <option value="{{null}}">Select Constituency</option>
                        @foreach($constituencies as $constituency)
                            <option value="{{$constituency->id}}">{{$constituency->name}}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="constituency"/>  
                </div> 
                <div>
                    <x-jet-label for="ward" value="{{ __('ward') }}" />
                    <select name="ward" id="ward" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm {{ $errors->has('ward') ? 'border-red-500 ' : '' }}" wire:model.lazy="ward_id"   required autofocus autocomplete="ward" >
                        <option value="{{null}}">Select ward</option>
                        @foreach($wards as $ward)
                            <option value="{{$ward->id}}">{{$ward->name}}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="ward"/>  
                </div> 
            </div>
            <div class="grid lg:grid-cols-2 gap-2 mt-4">
                <div>
                    <x-jet-label for="phone_number" value="{{ __('Phone Number') }}" />
                    <x-jet-input id="phone_number" class="block mt-1 w-full {{ $errors->has('phone_number') ? 'border-red-500 ' : '' }}" wire:model.lazy="phone_number" type="text"  required autofocus autocomplete="name" />
                    <x-jet-input-error for="phone_number"/>  
                </div> 
                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full {{ $errors->has('email') ? 'border-red-500 ' : '' }}" wire:model.lazy="email" type="email"  required autofocus autocomplete="email" />
                    <x-jet-input-error for="email"/>  
                </div>  
            </div>
            <div class="grid lg:grid-cols-2 gap-2 mt-4">
                <div>
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full {{ $errors->has('password') ? 'border-red-500 ' : '' }}" wire:model.lazy="password" type="password"  required autofocus autocomplete="name" />
                    <x-jet-input-error for="password"/>  
                </div> 
                <div>
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full {{ $errors->has('password_confirmation') ? 'border-red-500 ' : '' }}" wire:model.lazy="password_confirmation" type="password"  required autofocus autocomplete="password_confirmation" />
                    <x-jet-input-error for="password_confirmation"/>  
                </div>  
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
           
            <div class="flex items-center justify-end mt-4">
            
                <x-jet-button class="ml-4 g-green-600 hover:bg-green-700">
            
                    <svg wire:loading wire:target="submit" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 animate-spin">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                    </svg>

                   {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </div>
   
</div>

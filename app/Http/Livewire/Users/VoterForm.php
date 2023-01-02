<?php

namespace App\Http\Livewire\Users;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Arr;

use Livewire\Component;
use App\Models\Country;
use App\Models\State;
use App\Models\Lga;
use App\Models\Constituency;
use App\Models\Ward;
use App\Models\Gender;
use App\Models\User;
use App\Models\Team;

class VoterForm extends Component
{

    public $countries = [];
    public $states = [];
    public $lgas = [];
    public $constituencies = [];
    public $wards = [];
    public $genders = [];

    public $user;
    public $surname;
    public $first_name;
    public $other_name;
    public $gender_id;
    public $date_of_birth;
    public $email;
    public $phone_number;
    public $country;
    public $state;
    public $lga;
    public $constituency;
    public $ward_id;
    public $password;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.users.voter-form');
    }

    public function mount(){
        $this->countries = Country::orderBy('name','asc')->get();
        // $this->lgas = Lga::orderBy('name','asc')->get();
        // $this->contituencies = Constituency::orderBy('name','asc')->get();
        $this->genders = Gender::orderBy('name','asc')->get();
        $this->country = Country::firstOrCreate(['name'=>'Nigeria'])->id;
        $this->states = Country::find($this->country)->states()->orderBy('name','asc')->get();
    }

    public function updatingCountry($value){
        $this->reset('state');
        $this->updatingState($this->state);

        $this->states = Country::find($value)->states()->orderBy('name','asc')->get();
    }
    public function updatingState($value){
        $this->reset('lga');
        $this->updatingLga($this->lga);

        if(is_null(State::find($value)))
            $this->lgas = [];
        else
            $this->lgas = State::find($value)->lgas()->orderBy('name','asc')->get();
    }
    public function updatingLga($value){
        $this->reset('constituency');
        if(is_null(Lga::find($value)))
            $this->lgas = [];
        else
        $this->constituencies = Lga::find($value)->constituencies()->orderBy('name','asc')->get();
    }
    public function updatingConstituency($value){
        $this->reset('ward_id');
        if(is_null(Constituency::find($value)))
            $this->wards = [];
        else
        $this->wards = Constituency::find($value)->wards()->orderBy('name','asc')->get();
    }
    protected $rules = [

        'surname' => 'required|string|min:3',
        'first_name' => 'required|string|min:3',
        'other_name' => 'nullable|string|min:3',
        'gender_id' =>'required|integer',
        'date_of_birth' => 'required|date',
        'phone_number' => 'required|string',
        'email' => 'required|email',
        'country' => 'required|integer',
        'state' => 'required|integer',
        'lga' => 'required|integer',
        'constituency' => 'required|integer',
        'ward_id' => 'required|integer',
        'password'=> 'required|string',
        'password_confirmation' => 'required|string'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit(){
        $validated_data = $this->validate();
        $validated_data['name'] = $validated_data['surname']." ".$validated_data['first_name']." ".$validated_data['other_name'];
        $validated_data['password'] = Hash::make($validated_data['password']);
        $this->user = User::create(
            Arr::except($validated_data, [
                'country','state','lga','constituency','password_confirmation'
            ])
        );

        $this->user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $this->user->id,
            'name' => explode(' ', $this->user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
        session()->flash('message', 'account created succesfully.');
        $this->resetExcept('user');
    }

}

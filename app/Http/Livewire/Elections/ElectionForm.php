<?php

namespace App\Http\Livewire\Elections;

use Livewire\Component;
use App\Models\ElectionType;
use App\Models\Election;
use App\Models\Post;

class ElectionForm extends Component
{
    public $election_types = [];
    public $election_type_id;
    public $start_time;
    public $close_time;
    public $min_start_time; 
    public $min_close_time;
    public $posts = [];
    public $posts_id=[];
    public $election;
    public function render()
    {
        return view('livewire.elections.election-form');
    }

    public function mount(){
        $this->election_types = ElectionType::orderBy('name','asc')->get();
        $this->posts = Post::orderBy('name','asc')->get();
        $this->min_start_time = Date('Y-m-d');
    }
    public function updatingStartTime($value){
        $this->min_close_time = $value;
    }
    protected $rules = [
        'election_type_id' => 'required|integer',
        'start_time' => 'required|date',
        'close_time' => 'required|date',
        'posts_id' => 'required|array',
        'posts_id.*' => 'nullable|integer',
    ];
    protected $messages = [
        'election_type_id.required' => 'The election type is required',
        'election_type_id.integer' => 'The election type is not valid',
        'post_id.required' => "The post(s) for the election is required",
        'posts_id.array' => 'The post(s) is/are not valid',
        'posts_id.*.interger' => 'The post is not valid',
    ];
    public function submit(){
        $validated_data = $this->validate();
        $posts = $validated_data['posts_id'];
        // remove posts from the validated data;
        unset($validated_data['posts_id']);
        $election = Election::create($validated_data);
        
        // @todo  set the election relationship with posts. e
        Post::all()->each(function ($post) use (&$election, &$posts){
            foreach ($posts as  $selected_post) {
                if($post->id == $selected_post)
                $election->posts()->attach($selected_post);
            }
          });
        $this->election = $election;
        session()->flash('message', 'Election created succesfully.');
        $this->resetExcept('election');
    }
}

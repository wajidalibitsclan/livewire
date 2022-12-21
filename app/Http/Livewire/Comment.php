<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;

class Comment extends Component
{
    public $comments = [
        [
            'name' => 'Wajid',
            'comment' => 'This is my first comment',
            'created_at' => '1 min ago'
        ],
    ];

    protected $rules = [
        'message' => 'required'
    ];

    public $message;

    public function render()
    {
        return view('livewire.comment');
    }

    public function addComment(){
        $this->validate();

        array_unshift($this->comments,[
            'name' => 'Wajid Ali',
            'comment' => $this->message,
            'created_at' => Carbon::now()->diffForHumans()
        ]);
        $this->message = "";
        Session()->flash('success','Successfully commented!');
    }
}

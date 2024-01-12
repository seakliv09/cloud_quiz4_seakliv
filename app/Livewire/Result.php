<?php

namespace App\Livewire;

use App\Models\Quiz3;
use App\Models\Quiz4;
use Livewire\Component;

class Result extends Component
{
    public $components=[];

    public function mount(){
        $this->components= Quiz4::All();
    }
    public function render()
    {
        return view('livewire.result');
    }
    public function delete(Quiz4 $quiz4){

        $quiz4->delete();
        session()->flash('message','Delete successfully');
        return $this->redirect('/result',navigate:true);
    }
}

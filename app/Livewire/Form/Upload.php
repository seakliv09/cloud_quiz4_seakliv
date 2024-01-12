<?php

namespace App\Livewire\Form;

use App\Models\File;
use App\Models\Quiz3;
use App\Models\Quiz4;
use Livewire\Component;
use Livewire\WithFileUploads;
class Upload extends Component
{
    use WithFileUploads;
    public $firstname;
    public $lastname;
    public $file;
    public $radio;
    protected $rules=[
        'firstname'=>'required',
        'lastname'=>'required',
        'file'=>'required'
    ];

    public function save(){
        $this->validate();
        Quiz4::create([
           'firstname'=>$this->firstname,
           'lastname'=>$this->lastname,
           'file'=>$this->file->getClientOriginalName()
        ]);
        $filename=$this->file->getClientOriginalName();
        $this->file->storeAs('quiz4',$filename,'spaces');
        session()->flash('message', 'Form upload succcessfully');
        $this->file='';
        $this->lastname='';
        $this->firstname='';
        
    }
    public function render()
    {
        return view('livewire.form.upload');
    }
}

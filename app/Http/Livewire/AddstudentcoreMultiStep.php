<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddstudentcoreMultiStep extends Component
{

    public $totalstep = 6 ;
    public $currentstep = 1;

    public function mount(){
        $this->currentstep = 1;
    }

    public function render()
    {
        return view('livewire.addstudentcore-multi-step');
    }

    public function nextstep(){
        $this->currentstep++;
        if($this->currentstep > $this->totalstep){
            $this->currentstep = $this->totalstep;
        }
    }

    public function backstep(){
        $this->currentstep--;
        if($this->currentstep < 1){
            $this->currentstep = 1;
        }
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\newstudentm4Model;

class TableStudentm4All extends Component
{

    public $datas;

    public function render()
    {
        $this->datas = newstudentm4Model::all();
        return view('livewire.table-studentm4-all');
    }
}

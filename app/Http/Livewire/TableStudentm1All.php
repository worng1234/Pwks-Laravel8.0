<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\newstudentm1Model;

class TableStudentm1All extends Component
{

    public $datas;

    public $prename;
    public $fname;
    public $surname;
    public $sex;
    public $pic;
    public $id_number_pic;
    public $house_pic;
    public $idNumber;
    public $day;
    public $mounth;
    public $year;
    public $religion;
    public $nationality;
    public $origin;
    public $disabled;
    public $poorPerson;
    public $etc;
    public $tel;
    public $email;
    public $nameCen;
    public $fatherName;
    public $fatherNamecen;
    public $fatherSurname;
    public $fatherId;
    public $fatherJob;
    public $fatherTel;
    public $motherName;
    public $motherNamecen;
    public $motherSurname;
    public $motherId;
    public $motherJob;
    public $motherTel;
    public $parent;
    public $parent_status;
    public $parentName;
    public $parentNamecen;
    public $parentSurname;
    public $parentId;
    public $parentJob;
    public $parentTel;
    public $father_prename;
    public $mother_prename;
    public $parent_prename;
    public $houseNumber;
    public $street;
    public $bloc;
    public $road;
    public $subDistrict;
    public $district;
    public $province;
    public $post;
    public $finalSchool;
    public $finalSchoolSubDistrict;
    public $finalSchoolDistrict;
    public $finalSchoolProvince;

    public function render()
    {
        $this->datas = newstudentm1Model::all();
        return view('livewire.table-studentm1-all');
    }


}

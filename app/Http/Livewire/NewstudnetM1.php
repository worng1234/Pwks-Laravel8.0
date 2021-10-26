<?php

namespace App\Http\Livewire;

use App\Models\newstudentm1Model;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewstudnetM1 extends Component
{

    use WithFileUploads;

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
    public $parent =[];
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

    public function registernewstudentm1(){
        //picture
        $picName = 'Pic_'.$this->pic->getClientOriginalName();
        $upload_pic = $this->pic->storeAs('public/newstudentm1PIC', $picName);
        //ID number card
        $id_number_picName = 'id_number_pic_'.$this->id_number_pic->getClientOriginalName();
        $upload_id_number_pic = $this->id_number_pic->storeAs('public/newstudentm1IDNUMBER', $id_number_picName);
        //house_pic
        $house_picName = 'house_pic_'.$this->house_pic->getClientOriginalName();
        $upload_house_pic = $this->house_pic->storeAs('public/newstudentm1HOUSE', $house_picName);

        if($upload_pic && $upload_id_number_pic && $upload_house_pic){
            $valuses = array(
                "prename" => $this->prename,
                "fname" => $this->fname,
                "surname" => $this->surname,
                "sex" => $this->sex,
                "idNumber" => $this->idNumber,
                "day" => $this->day,
                "mounth" => $this->mounth,
                "year" => $this->year,
                "religion" => $this->religion,
                "nationality" => $this->nationality,
                "origin" => $this->origin,
                "disabled" => $this->disabled,
                "poorPerson" => $this->poorPerson,
                "etc" => $this->etc,
                "tel" => $this->tel,
                "email" => $this->email,
                "nameCen" => $this->nameCen,
                "fatherName" => $this->fatherName,
                "fatherNamecen" => $this->fatherNamecen,
                "fatherSurname" => $this->fatherSurname,
                "fatherId" => $this->fatherId,
                "fatherJob" => $this->fatherJob,
                "fatherTel" => $this->fatherTel,
                "motherName" => $this->motherName,
                "motherNamecen" => $this->motherNamecen,
                "motherSurname" => $this->motherSurname,
                "motherId" => $this->motherId,
                "motherJob" => $this->motherJob,
                "motherTel" => $this->motherTel,
                "parent" => json_encode($this->parent, JSON_UNESCAPED_UNICODE),
                "parent_status" => $this->parent_status,
                "parentName" => $this->parentName,
                "parentNamecen" => $this->parentNamecen,
                "parentSurname" => $this->parentSurname,
                "parentId" => $this->parentId,
                "parentJob" => $this->parentJob,
                "parentTel" => $this->parentTel,
                "father_prename" => $this->father_prename,
                "mother_prename" => $this->mother_prename,
                "parent_prename" => $this->parent_prename,
                "houseNumber" => $this->houseNumber,
                "street" => $this->street,
                "bloc" => $this->bloc,
                "road	" => $this->road,
                "subDistrict" => $this->subDistrict,
                "district" => $this->district,
                "province" => $this->province,
                "post" => $this->post,
                "finalSchool" => $this->finalSchool,
                "finalSchoolSubDistrict" => $this->finalSchoolSubDistrict,
                "finalSchoolDistrict" => $this->finalSchoolDistrict,
                "finalSchoolProvince" => $this->finalSchoolProvince,
            );
        }
        newstudentm1Model::insert($valuses);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.newstudnet-m1');
    }
}

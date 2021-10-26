<?php

namespace App\Http\Livewire;

use App\Models\newstudentm4Model;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewstudnetM4 extends Component
{

    use WithFileUploads;

    public $prename;
    public $fname;
    public $surname;
    public $sex;
    public $pic;
    public $id_number_pic;
    public $house_pic;
    public $id_number;
    public $day;
    public $mounth;
    public $year;
    public $religion;
    public $nationality;
    public $origin;
    public $father_name;
    public $father_id;
    public $father_job;
    public $father_tel;
    public $mother_name;
    public $mother_id;
    public $mother_job;
    public $mother_tel;
    public $parent;
    public $parent_status;
    public $parent_name;
    public $parent_id;
    public $parent_job;
    public $parent_tel;
    public $house_number;
    public $bloc;
    public $street;
    public $road;
    public $sub_district;
    public $district;
    public $province;
    public $post;
    public $final_school;
    public $final_school_sub_district;
    public $final_school_district;
    public $final_school_province;
    public $disabled;
    public $poor_person;
    public $etc;
    public $tel;
    public $major_name1;
    public $major_name2;
    public $major_name3;
    public $major_name4;
    public $email;
    public $father_namecen;
    public $mother_namecen;
    public $parent_namecen;
    public $father_surname;
    public $mother_surname;
    public $parent_surname;
    public $father_prename;
    public $mother_prename;
    public $parent_prename;
    public $onet_sci;
    public $onet_math;
    public $onet_thai;
    public $onet_eng;
    public $student_id;
    public $name_cen;

    public function registernewstudentm4(){
         //picture
         $picName = 'Pic_'.$this->pic->getClientOriginalName();
         $upload_pic = $this->pic->storeAs('public/newstudentm4PIC', $picName);
         //ID number card
         $id_number_picName = 'id_number_pic_'.$this->id_number_pic->getClientOriginalName();
         $upload_id_number_pic = $this->id_number_pic->storeAs('public/newstudentm4IDNUMBER', $id_number_picName);
         //house_pic
         $house_picName = 'house_pic_'.$this->house_pic->getClientOriginalName();
         $upload_house_pic = $this->house_pic->storeAs('public/newstudentm4HOUSE', $house_picName);

         if($upload_pic && $upload_id_number_pic && $upload_house_pic){
            $valuses = array(
                'prename' => $this->prename,
                'fname' => $this->fname,
                'surname' => $this->surname,
                'sex' => $this->sex,
                'id_number' => $this->id_number,
                'day' => $this->day,
                'mounth' => $this->mounth,
                'year' => $this->year,
                'religion' => $this->religion,
                'nationality' => $this->nationality,
                'origin' => $this->origin,
                'father_name' => $this->father_name,
                'father_id' => $this->father_id,
                'father_job' => $this->father_job,
                'father_tel' => $this->father_tel,
                'mother_name' => $this->mother_name,
                'mother_id' => $this->mother_id,
                'mother_job' => $this->mother_job,
                'mother_tel' => $this->mother_tel,
                'parent' => $this->parent,
                'parent_status' => $this->parent_status,
                'parent_name' => $this->parent_name,
                'parent_id' => $this->parent_id,
                'parent_job' => $this->parent_job,
                'parent_tel' => $this->parent_tel,
                'house_number' => $this->house_number,
                'bloc' => $this->bloc,
                'street' => $this->street,
                'road' => $this->road,
                'sub_district' => $this->sub_district,
                'district' => $this->district,
                'province' => $this->province,
                'post' => $this->post,
                'final_school' => $this->final_school,
                'final_school_sub_district' => $this->final_school_sub_district,
                'final_school_district' => $this->final_school_district,
                'final_school_province' => $this->final_school_province,
                'disabled' => $this->disabled,
                'poor_person' => $this->poor_person,
                'etc' => $this->etc,
                'tel' => $this->tel,
                'major_name1' => $this->major_name1,
                'major_name2' => $this->major_name2,
                'major_name3' => $this->major_name3,
                'major_name4' => $this->major_name4,
                'email' => $this->email,
                'father_namecen' => $this->father_namecen,
                'mother_namecen' => $this->mother_namecen,
                'parent_namecen' => $this->parent_namecen,
                'father_surname' => $this->father_surname,
                'mother_surname' => $this->mother_surname,
                'parent_surname' => $this->parent_surname,
                'father_prename' => $this->father_prename,
                'mother_prename' => $this->mother_prename,
                'parent_prename' => $this->parent_prename,
                'onet_sci' => $this->onet_sci,
                'onet_math' => $this->onet_math,
                'onet_thai' => $this->onet_thai,
                'onet_eng' => $this->onet_eng,
                'name_cen' => $this->name_cen,
                'student_id' => $this->student_id,
            );
         }

         newstudentm4Model::insert($valuses);
         $this->reset();
    }

    public function render()
    {
        return view('livewire.newstudnet-m4');
    }
}

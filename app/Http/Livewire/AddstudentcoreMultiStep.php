<?php

namespace App\Http\Livewire;

use App\Models\addressstudentModel;
use App\Models\healtystudentModel;
use App\Models\parentstudentModel;
use App\Models\studentcoreModels;
use App\Models\studentdetailModel;
use App\Models\talentstudentModel;
use Livewire\Component;

class AddstudentcoreMultiStep extends Component
{
    //Studentcore
    public $student_id_card;
    public $studentID;
    public $student_major;
    public $student_class;
    public $student_room;
    public $prename;
    public $prename_eng;
    public $name_eng;
    public $name_cen_eng;
    public $surname_eng;
    public $birth_year;
    public $birth_month;
    public $birth_day;
    public $nickname;
    public $gender;
    public $bloodgroup;
    public $religion;
    public $origin;
    public $nationality;
    public $language;
    public $tel_s;
    public $email;
    public $fname;
    public $name_cen;
    public $surname;

    //studentdetail
    public $student_idcard_d;
    public $go_school;
    public $go_school_time;
    public $distance;
    public $long_distance;
    public $disabled;
    public $unfortuned;
    public $friend_drug =[];
    public $sell_drug =[];
    public $sexual =[];
    public $not_parent =[];
    public $dark_travel =[];
    public $sexual_harrasment =[];
    public $cute_world =[];
    public $rich_man =[];
    public $good_guy;
    public $social_good;
    public $gadject =[];
    public $internet =[];
    public $lack =[];
    public $problem =[];
    public $help =[];

    //AddressStudent
    public $student_idcard_a;
    public $house_number;
    public $group;
    public $village;
    public $alley;
    public $street;
    public $subdistrict;
    public $district;
    public $province;
    public $post;
    public $address_now =[];
    public $house_number_n;
    public $village_n;
    public $alley_n;
    public $street_n;
    public $subdistrict_n;
    public $district_n;
    public $province_n;
    public $post_n;
    public $group_n;

    //HealtyStudent
    public $student_idcard_h;
    public $weight;
    public $height;
    public $disease;
    public $medicine_lose;
    public $medicine;
    public $remedy;
    public $glasses =[];
    public $danger =[];
    public $unsound =[];
    public $defective =[];
    public $sight_eye =[];

    //talentstudent
    public $student_idcard_t;
    public $final_school;
    public $final_class;
    public $avg_grade;
    public $f_subdistrict;
    public $f_district;
    public $f_province;
    public $like_subject1;
    public $like_subject2;
    public $like_subject3;
    public $like_subject4;
    public $unlike_subject1;
    public $unlike_subject2;
    public $unlike_subject3;
    public $unlike_subject4;
    public $talent;
    public $dream_job;
    public $because;
    public $read_write = [];
    public $understand = [];

    //parentstudent
    public $student_idcard_p;
    public $prename_f;
    public $name_f;
    public $name_cen_f;
    public $surname_f;
    public $id_father;
    public $type_card_f;
    public $age_f;
    public $bloodgroup_f;
    public $job_f;
    public $salary_f;
    public $tel_f;
    public $house_number_f;
    public $group_f;
    public $village_f;
    public $alley_f;
    public $street_f;
    public $subdistrict_f;
    public $district_f;
    public $province_f;
    public $post_f;
    public $prename_m;
    public $name_m;
    public $name_cen_m;
    public $surname_m;
    public $id_mother;
    public $type_card_m;
    public $age_m;
    public $bloodgroup_m;
    public $job_m;
    public $salary_m;
    public $tel_m;
    public $house_number_m;
    public $group_m;
    public $village_m;
    public $alley_m;
    public $street_m;
    public $subdistrict_m;
    public $district_m;
    public $province_m;
    public $post_m;
    public $parent =[];
    public $prename_p;
    public $name_p;
    public $name_cen_p;
    public $surname_p;
    public $id_parent;
    public $type_card_p;
    public $age_p;
    public $bloodgroup_p;
    public $job_p;
    public $salary_p;
    public $tel_p;
    public $house_number_p;
    public $group_p;
    public $village_p;
    public $alley_p;
    public $street_p;
    public $subdistrict_p;
    public $district_p;
    public $province_p;
    public $post_p;
    public $status_parent;
    public $student_parent;
    public $no_blood;
    public $no_brother;
    public $no_son;
    public $no_sister;
    public $no_son2;
    public $no_parent;
    public $no_study;
    public $no_job;
    public $no_house;
    public $student_job;
    public $student_money;
    public $parent_money;
    public $parent_total;
    public $parent_house;
    public $job_study = [];
    public $job_detail;
    public $total_study;


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

    public function addstudentcore(){
        //Studentcore
        $values1 = array(
            "student_id_card"=>$this->student_id_card,
            "studentID"=>$this->studentID,
            "student_major"=>$this->student_major,
            "student_class"=>$this->student_class,
            "student_room"=>$this->student_room,
            "prename"=>$this->prename,
            "prename_eng"=>$this->prename_eng,
            "name_eng"=>$this->name_eng,
            "name_cen_eng"=>$this->name_cen_eng,
            "surname_eng"=>$this->surname_eng,
            "birth_year"=>$this->birth_year,
            "birth_month"=>$this->birth_month,
            "birth_day"=>$this->birth_day,
            "nickname"=>$this->nickname,
            "gender"=>$this->gender,
            "bloodgroup"=>$this->bloodgroup,
            "religion"=>$this->religion,
            "origin"=>$this->origin,
            "nationality"=>$this->nationality,
            "language"=>$this->language,
            "tel_s"=>$this->tel_s,
            "email"=>$this->email,
            "fname"=>$this->fname,
            "name_cen"=>$this->name_cen,
            "surname"=>$this->surname,
        );

        //address
        $values2 = array(
            "student_idcard_a"=>$this->student_idcard_a,
            "house_number"=>$this->house_number,
            "group"=>$this->group,
            "village"=>$this->village,
            "alley"=>$this->alley,
            "street"=>$this->street,
            "subdistrict"=>$this->subdistrict,
            "district"=>$this->district,
            "province"=>$this->province,
            "post"=>$this->post,
            "address_now"=>json_encode($this->address_now, JSON_UNESCAPED_UNICODE),
            "house_number_n"=>$this->house_number_n,
            "village_n"=>$this->village_n,
            "alley_n"=>$this->alley_n,
            "street_n"=>$this->street_n,
            "subdistrict_n"=>$this->subdistrict_n,
            "district_n"=>$this->district_n,
            "province_n"=>$this->province_n,
            "post_n"=>$this->post_n,
            "group_n"=>$this->group_n,
        );

        //healty
        $values3 = array(
            "student_idcard_h"=>$this->student_idcard_h,
            "weight"=>$this->weight,
            "height"=>$this->height,
            "disease"=>$this->disease,
            "medicine_lose"=>$this->medicine_lose,
            "medicine"=>$this->medicine,
            "remedy"=>$this->remedy,
            "glasses"=>json_encode($this->glasses, JSON_UNESCAPED_UNICODE),
            "danger"=>json_encode($this->danger, JSON_UNESCAPED_UNICODE),
            "unsound"=>json_encode($this->unsound, JSON_UNESCAPED_UNICODE),
            "defective"=>json_encode($this->defective, JSON_UNESCAPED_UNICODE),
            "sight_eye"=>json_encode($this->sight_eye, JSON_UNESCAPED_UNICODE),
        );

        //studentdetail
        $values4 = array(
            "student_idcard_d"=>$this->student_idcard_d,
            "go_school"=>$this->go_school,
            "go_school_time"=>$this->go_school_time,
            "distance"=>$this->distance,
            "long_distance"=>$this->long_distance,
            "disabled"=>$this->disabled,
            "unfortuned"=>$this->unfortuned,
            "good_guy"=>$this->good_guy,
            "social_good"=>$this->social_good,
            "friend_drug"=>json_encode($this->friend_drug, JSON_UNESCAPED_UNICODE),
            "sell_drug"=>json_encode($this->sell_drug, JSON_UNESCAPED_UNICODE),
            "sexual"=>json_encode($this->sexual, JSON_UNESCAPED_UNICODE),
            "not_parent"=>json_encode($this->not_parent, JSON_UNESCAPED_UNICODE),
            "dark_travel"=>json_encode($this->dark_travel, JSON_UNESCAPED_UNICODE),
            "sexual_harrasment"=>json_encode($this->sexual_harrasment, JSON_UNESCAPED_UNICODE),
            "cute_world"=>json_encode($this->cute_world, JSON_UNESCAPED_UNICODE),
            "rich_man"=>json_encode($this->rich_man, JSON_UNESCAPED_UNICODE),
            "gadject"=>json_encode($this->gadject, JSON_UNESCAPED_UNICODE),
            "internet"=>json_encode($this->internet, JSON_UNESCAPED_UNICODE),
            "lack"=>json_encode($this->lack),
            "problem"=>json_encode($this->problem, JSON_UNESCAPED_UNICODE),
            "help"=>json_encode($this->help, JSON_UNESCAPED_UNICODE),
        );

        //talentstudent
        $values5 = array(
            "student_idcard_t"=>$this->student_idcard_t,
            "final_school"=>$this->final_school,
            "final_class"=>$this->final_class,
            "avg_grade"=>$this->avg_grade,
            "f_subdistrict"=>$this->f_subdistrict,
            "f_district"=>$this->f_district,
            "f_province"=>$this->f_province,
            "like_subject1"=>$this->like_subject1,
            "like_subject2"=>$this->like_subject2,
            "like_subject3"=>$this->like_subject3,
            "like_subject4"=>$this->like_subject4,
            "unlike_subject1"=>$this->unlike_subject1,
            "unlike_subject2"=>$this->unlike_subject2,
            "unlike_subject3"=>$this->unlike_subject3,
            "unlike_subject4"=>$this->unlike_subject4,
            "talent"=>$this->talent,
            "dream_job"=>$this->dream_job,
            "because"=>$this->because,
            "read_write"=>json_encode($this->read_write, JSON_UNESCAPED_UNICODE),
            "understand"=>json_encode($this->understand, JSON_UNESCAPED_UNICODE),
        );

        //parentstudent
        $values6 = array(
            "student_idcard_p"=>$this->student_idcard_p,
            "prename_f"=>$this->prename_f,
            "name_f"=>$this->name_f,
            "name_cen_f"=>$this->name_cen_f,
            "surname_f"=>$this->surname_f,
            "id_father"=>$this->id_father,
            "type_card_f"=>$this->type_card_f,
            "age_f"=>$this->age_f,
            "bloodgroup_f"=>$this->bloodgroup_f,
            "job_f"=>$this->job_f,
            "salary_f"=>$this->salary_f,
            "tel_f"=>$this->tel_f,
            "house_number_f"=>$this->house_number_f,
            "group_f"=>$this->group_f,
            "village_f"=>$this->village_f,
            "alley_f"=>$this->alley_f,
            "street_f"=>$this->street_f,
            "subdistrict_f"=>$this->subdistrict_f,
            "district_f"=>$this->district_f,
            "province_f"=>$this->province_f,
            "post_f"=>$this->post_f,
            "prename_m"=>$this->prename_m,
            "name_m"=>$this->name_m,
            "name_cen_m"=>$this->name_cen_m,
            "surname_m"=>$this->surname_m,
            "id_mother"=>$this->id_mother,
            "type_card_m"=>$this->type_card_m,
            "age_m"=>$this->age_m,
            "bloodgroup_m"=>$this->bloodgroup_m,
            "job_m"=>$this->job_m,
            "salary_m"=>$this->salary_m,
            "tel_m"=>$this->tel_m,
            "house_number_m"=>$this->house_number_m,
            "group_m"=>$this->group_m,
            "village_m"=>$this->village_m,
            "alley_m"=>$this->alley_m,
            "street_m"=>$this->street_m,
            "subdistrict_m"=>$this->subdistrict_m,
            "district_m"=>$this->district_m,
            "province_m"=>$this->province_m,
            "post_m"=>$this->post_m,
            "parent"=>json_encode($this->parent, JSON_UNESCAPED_UNICODE),
            "prename_p"=>$this->prename_p,
            "name_p"=>$this->name_p,
            "name_cen_p"=>$this->name_cen_p,
            "surname_p"=>$this->surname_p,
            "id_parent"=>$this->id_parent,
            "type_card_p"=>$this->type_card_p,
            "age_p"=>$this->age_p,
            "bloodgroup_p"=>$this->bloodgroup_p,
            "job_p"=>$this->job_p,
            "salary_p"=>$this->salary_p,
            "tel_p"=>$this->tel_p,
            "house_number_p"=>$this->house_number_p,
            "group_p"=>$this->group_p,
            "village_p"=>$this->village_p,
            "alley_p"=>$this->alley_p,
            "street_p"=>$this->street_p,
            "subdistrict_p"=>$this->subdistrict_p,
            "district_p"=>$this->district_p,
            "province_p"=>$this->province_p,
            "post_p"=>$this->post_p,
            "status_parent"=>$this->status_parent,
            "student_parent"=>$this->student_parent,
            "no_blood"=>$this->no_blood,
            "no_brother"=>$this->no_brother,
            "no_son"=>$this->no_son,
            "no_sister"=>$this->no_sister,
            "no_son2"=>$this->no_son2,
            "no_parent"=>$this->no_parent,
            "no_study"=>$this->no_study,
            "no_job"=>$this->no_job,
            "no_house"=>$this->no_house,
            "student_job"=>$this->student_job,
            "student_money"=>$this->student_money,
            "parent_money"=>$this->parent_money,
            "parent_total"=>$this->parent_total,
            "parent_house"=>$this->parent_house,
            "job_study"=>json_encode($this->job_study, JSON_UNESCAPED_UNICODE),
            "job_detail"=>$this->job_detail,
            "total_study"=>$this->total_study,
        );

        studentcoreModels::insert($values1);
        addressstudentModel::insert($values2);
        healtystudentModel::insert($values3);
        studentdetailModel::insert($values4);
        talentstudentModel::insert($values5);
        parentstudentModel::insert($values6);

        $data = ['name'=>$this->fname.' '.$this->surname];
        return $data;
    }
}

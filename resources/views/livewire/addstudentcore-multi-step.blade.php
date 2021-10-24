<div>
    <form wire:submit.prevent="addstudentcore">
        <!-- ข้อมูลเบื้องต้น -->
        @if ($currentstep == 1)
        <div class="step-one">
            <div class="page-inner mt--5">
                <div class="row mt--2">
                    <div class="col-md-12">
                        <div class="card full-height">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <div class="card-title"><i class="fas fa-id-card-alt"></i> &nbsp;&nbsp; ระบบบันทึกข้อมูลพื้นฐาน <i class="flaticon-right-arrow"></i> เพิ่มข้อมูล (1/6)</div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="alert alert-info" role="alert" align="center">
                                    <h5><i class="fas fa-info-circle"></i>
                                        กรุณากรอกข้อมูลตามความเป็นจริงก่อนบันทึกข้อมูลเพื่อผลประโยชน์ของนักเรียนในการใช้ขอทุน หรือตรวจสอบปัจจัยต่างๆที่จะได้รับ</h5>
                                </div>

                                <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                    <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลเบื้องต้น</b></p>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-5">
                                        <div class="form-group form-group-default">
                                            <label>เลขประจำตัวนักเรียน</label>
                                            <input type="text" class="form-control" placeholder="" wire:model="studentID">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-group form-group-default">
                                            <label>แผนการเรียน</label>
                                            <select class="form-control" id="formGroupDefaultSelect" wire:model="student_major">
                                                <option>เลือก</option>
                                                <option value="1">วิทย์ - คณิต</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>ระดับชั้น</label>
                                            <select class="form-control" id="formGroupDefaultSelect" wire:model="student_class">
                                                <option>เลือก</option>
                                                <option value="m1">มัธยมศึกษาปีที่ 1</option>
                                                <option value="m2">มัธยมศึกษาปีที่ 2</option>
                                                <option value="m3">มัธยมศึกษาปีที่ 3</option>
                                                <option value="m4">มัธยมศึกษาปีที่ 4</option>
                                                <option value="m5">มัธยมศึกษาปีที่ 5</option>
                                                <option value="m6">มัธยมศึกษาปีที่ 6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>ลำดับห้อง</label>
                                            <select class="form-control" id="formGroupDefaultSelect" wire:model="student_room">
                                                <option>เลือก</option>
                                                <option value="r1">1</option>
                                                <option value="r2">2</option>
                                                <option value="r3">3</option>
                                                <option value="r4">4</option>
                                                <option value="r5">5</option>
                                                <option value="r6">6</option>
                                                <option value="r7">7</option>
                                                <option value="r8">8</option>
                                                <option value="r9">9</option>
                                                <option value="r10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-12">
                                        <div class="form-group form-group-default">
                                            <label>เลขประจำตัวประชาชน</label>
                                            <input  type="text" class="form-control" placeholder="" wire:model="student_id_card">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>คำนำหน้าชื่อ</label>
                                            <select class="form-control" id="formGroupDefaultSelect" wire:model="prename">
                                                <option>เลือก</option>
                                                <option value="prename1">เด็กชาย</option>
                                                <option value="prename2">เด็กหญิง</option>
                                                <option value="prename3">นาย</option>
                                                <option value="prename4">นางสาว</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>ชื่อภาษาไทย</label>
                                            <input  type="text" class="form-control" placeholder="" wire:model="fname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>ชื่อกลาง</label>
                                            <input  type="text" class="form-control" placeholder="(ถ้ามี)" wire:model="name_cen">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>นามสกุลภาษาไทย</label>
                                            <input type="text" class="form-control" placeholder="" wire:model="surname">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>คำนำหน้าชื่อ(ภาษาอังกฤษ)</label>
                                            <select class="form-control" id="formGroupDefaultSelect" wire:model="prename_eng">
                                                <option>เลือก</option>
                                                <option value="mr">Mr.</option>
                                                <option value="mrs">Mrs.</option>
                                                <option value="miss">Miss</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>ชื่อ(ภาษาอังกฤษ)</label>
                                            <input type="text" class="form-control" placeholder="" wire:model="name_eng">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>ชื่อกลาง(ภาษาอังกฤษ)</label>
                                            <input type="text" class="form-control" placeholder="(ถ้ามี)" wire:model="name_cen_eng">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>นามสกุล(ภาษาอังกฤษ)</label>
                                            <input type="text" class="form-control" placeholder="" wire:model="surname_eng">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 col-md-12">
                                        <label style="margin-bottom: 5px;"><small>วัน/เดือน/ปีเกิด ที่ปรากฏในบัตรประชาชน</small></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>ปี พุทธศักราช:</label>
                                            <select class="form-control" id="formGroupDefaultSelect" wire:model="birth_year">
                                                <option>เลือก</option>
                                                <option value="2540">2540</option>
                                                <option value="2541">2541</option>
                                                <option value="2542">2542</option>
                                                <option value="2543">2543</option>
                                                <option value="2544">2544</option>
                                                <option value="2545">2545</option>
                                                <option value="2546">2546</option>
                                                <option value="2547">2547</option>
                                                <option value="2548">2548</option>
                                                <option value="2549">2549</option>
                                                <option value="2550">2550</option>
                                                <option value="2551">2551</option>
                                                <option value="2552">2552</option>
                                                <option value="2553">2553</option>
                                                <option value="2554">2554</option>
                                                <option value="2555">2555</option>
                                                <option value="2556">2556</option>
                                                <option value="2557">2557</option>
                                                <option value="2558">2558</option>
                                                <option value="2559">2559</option>
                                                <option value="2560">2560</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>เดือน:</label>
                                            <select class="form-control" id="formGroupDefaultSelect" wire:model="birth_month">
                                                <option>เลือก</option>
                                                <option value="january">มกราคม</option>
                                                <option value="fabuary">กุมภาพันธ์</option>
                                                <option value="march">มีนาคม</option>
                                                <option value="april">เมษายน</option>
                                                <option value="may">พฤษภาคม</option>
                                                <option value="june">มิถุนายน</option>
                                                <option value="july">กรกฎาคม</option>
                                                <option value="orcas">สิงหาคม</option>
                                                <option value="sebtember">กันยายน</option>
                                                <option value="october">ตุลาคม</option>
                                                <option value="november">พฤษจิกายน</option>
                                                <option value="december">ธันวาคม</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>วัน:</label>
                                            <select class="form-control" id="formGroupDefaultSelect" wire:model="birth_day">
                                                <option>เลือก</option>
                                                <option value="d1">1</option>
                                                <option value="d2">2</option>
                                                <option value="d3">3</option>
                                                <option value="d4">4</option>
                                                <option value="d5">5</option>
                                                <option value="d6">6</option>
                                                <option value="d7">7</option>
                                                <option value="d8">8</option>
                                                <option value="d9">9</option>
                                                <option value="d10">10</option>
                                                <option value="d11">11</option>
                                                <option value="d12">12</option>
                                                <option value="d13">13</option>
                                                <option value="d14">14</option>
                                                <option value="d15">15</option>
                                                <option value="d16">16</option>
                                                <option value="d17">17</option>
                                                <option value="d18">18</option>
                                                <option value="d19">19</option>
                                                <option value="d20">20</option>
                                                <option value="d21">21</option>
                                                <option value="d22">22</option>
                                                <option value="d23">23</option>
                                                <option value="d24">24</option>
                                                <option value="d25">25</option>
                                                <option value="d26">26</option>
                                                <option value="d27">27</option>
                                                <option value="d28">28</option>
                                                <option value="d29">29</option>
                                                <option value="d30">30</option>
                                                <option value="d31">31</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>ชื่อเล่น</label>
                                            <input type="text" class="form-control" placeholder="" wire:model="nickname">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>เพศสภาพ</label>
                                            <select class="form-control" id="formGroupDefaultSelect" wire:model="gender">
                                                <option>เลือก</option>
                                                <option value="male">ชาย</option>
                                                <option value="female">หญิง</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>หมู่เลือด</label>
                                            <select class="form-control" id="formGroupDefaultSelect" wire:model="bloodgroup">
                                                <option>เลือก</option>
                                                <option value="a">A</option>
                                                <option value="b">B</option>
                                                <option value="ab">AB</option>
                                                <option value="o">O</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>ศาสนา</label>
                                            <input type="text" class="form-control" placeholder="" wire:model="religion">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>เชื้อชาติ</label>
                                            <input type="text" class="form-control" placeholder="" wire:model="origin">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>สัญชาติ</label>
                                            <input type="text" class="form-control" placeholder="" wire:model="nationality">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>ภาษาที่ใช้ เช่น ไทย จีน อังกฤษ ญี่ปุ่น</label>
                                            <input type="text" class="form-control" placeholder="" wire:model="language">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                            <input type="text" class="form-control" placeholder="" wire:model="tel_s">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>อีเมล์ (name@example.com)</label>
                                            <input type="text" class="form-control" placeholder="" wire:model="email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- ข้อมูลที่อยู่ปัจจุบัน -->
            @if ($currentstep == 2)
            <div class="step-two">
                <div class="page-inner mt--5">
                    <div class="row mt--2">
                        <div class="col-md-12">
                            <div class="card full-height">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title"><i class="fas fa-id-card-alt"></i> &nbsp;&nbsp; ระบบบันทึกข้อมูลพื้นฐาน <i class="flaticon-right-arrow"></i> เพิ่มข้อมูล (2/6)</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-info" role="alert" align="center">
                                        <h5><i class="fas fa-info-circle"></i>
                                            กรุณากรอกข้อมูลตามความเป็นจริงก่อนบันทึกข้อมูลเพื่อผลประโยชน์ของนักเรียนในการใช้ขอทุน หรือตรวจสอบปัจจัยต่างๆที่จะได้รับ</h5>
                                    </div>


                                    <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลที่อยู่ตามทะเบียนบ้าน</b></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>บ้านเลขที่</label>
                                                <input wire:model="house_number" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>หมู่</label>
                                                <input wire:model="group" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อหมู่บ้าน</label>
                                                <input wire:model="village" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>ซอย</label>
                                                <input wire:model="alley" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ถนน</label>
                                                <input wire:model="street" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ตำบล/แขวง</label>
                                                <input wire:model="subdistrict" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>อำเภอ/เขต</label>
                                                <input wire:model="district" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>จังหวัด</label>
                                                <input wire:model="province" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>รหัสไปรษณีย์</label>
                                                <input wire:model="post" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>


                                    <!-- ข้อมูลที่อยู่ปัจจุบัน -->
                                    <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลที่อยู่ตามทะเบียนบ้าน</b></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-12">
                                            <div class="form-check">
                                                <label class="form-radio-label">
                                                    <input class="form-radio-input" type="radio" name="optionsRadios" value="ที่อยู่ตามทะเบียนบ้าน" wire:model="address_now" id="ที่อยู่ตามทะเบียนบ้าน">
                                                    <span class="form-radio-sign">ที่อยู่ตามทะเบียนบ้าน</span>
                                                </label>
                                                <label class="form-radio-label ml-1">
                                                    <input class="form-radio-input" type="radio" name="optionsRadios" value="ที่อยู่อื่น" wire:model="address_now" id="ที่อยู่อื่น">
                                                    <span class="form-radio-sign">ที่อยู่อื่น (โปรดระบุ)*</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>บ้านเลขที่</label>
                                                <input wire:model="house_number_n" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>หมู่</label>
                                                <input wire:model="group_n" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อหมู่บ้าน</label>
                                                <input wire:model="village_n" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>ซอย</label>
                                                <input wire:model="alley_n" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ถนน</label>
                                                <input wire:model="street_n" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ตำบล/แขวง</label>
                                                <input wire:model="subdistrict_n" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>อำเภอ/เขต</label>
                                                <input wire:model="district_n" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>จังหวัด</label>
                                                <input wire:model="province_n" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>รหัสไปรษณีย์</label>
                                                <input wire:model="post_n" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <!-- ความสามารถ -->
                @if ($currentstep == 3)
                <div class="step-three">
                    <div class="page-inner mt--5">
                        <div class="row mt--2">
                            <div class="col-md-12">
                                <div class="card full-height">
                                    <div class="card-header">
                                        <div class="card-head-row">
                                            <div class="card-title"><i class="fas fa-id-card-alt"></i> &nbsp;&nbsp; ระบบบันทึกข้อมูลพื้นฐาน <i class="flaticon-right-arrow"></i> เพิ่มข้อมูล (3/6)</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-info" role="alert" align="center">
                                            <h5><i class="fas fa-info-circle"></i>
                                                กรุณากรอกข้อมูลตามความเป็นจริงก่อนบันทึกข้อมูลเพื่อผลประโยชน์ของนักเรียนในการใช้ขอทุน หรือตรวจสอบปัจจัยต่างๆที่จะได้รับ</h5>
                                        </div>


                                        <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                            <p style="margin-left: 25px;  font-size: 15px;"><b>ด้านความสามารถ</b></p>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-12">
                                                <label style="margin-bottom: 5px;"><small>สำเร็จการศึกษา จากโรงเรียน</small></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4">
                                                <div class="form-group form-group-default">
                                                    <label>ชื่อโรงเรียนเดิม</label>
                                                    <input wire:model="final_school" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="form-group form-group-default">
                                                    <label>จบชั้น</label>
                                                    <input wire:model="final_class" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="form-group form-group-default">
                                                    <label>ผลการเรียนเฉลี่ย</label>
                                                    <input wire:model="avg_grade" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-4">
                                                <div class="form-group form-group-default">
                                                    <label>ตำบล/แขวง</label>
                                                    <input wire:model="f_subdistrict" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="form-group form-group-default">
                                                    <label>อำเภอ/เขต</label>
                                                    <input wire:model="f_district" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="form-group form-group-default">
                                                    <label>จังหวัด</label>
                                                    <input wire:model="f_province" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 col-md-12">
                                                <label style="margin-bottom: 5px;"><small>วิชาที่ชอบ</small></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-3">
                                                <div class="form-group form-group-default">
                                                    <label>1)</label>
                                                    <input wire:model="like_subject1" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group form-group-default">
                                                    <label>2)</label>
                                                    <input wire:model="like_subject2" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group form-group-default">
                                                    <label>3)</label>
                                                    <input wire:model="like_subject3" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group form-group-default">
                                                    <label>4)</label>
                                                    <input wire:model="like_subject4" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-12">
                                                <label style="margin-bottom: 5px;"><small>วิชาที่ไม่ถนัด</small></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-3">
                                                <div class="form-group form-group-default">
                                                    <label>1)</label>
                                                    <input wire:model="unlike_subject1" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group form-group-default">
                                                    <label>2)</label>
                                                    <input wire:model="unlike_subject2" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group form-group-default">
                                                    <label>3)</label>
                                                    <input wire:model="unlike_subject3" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group form-group-default">
                                                    <label>4)</label>
                                                    <input wire:model="unlike_subject4" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-12">
                                                <label style="margin-bottom: 5px;"><small>เป้าหมายของชีวิตในอนาคต</small></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4">
                                                <div class="form-group form-group-default">
                                                    <label>อยากประกอบอาชีพอะไร</label>
                                                    <input wire:model="dream_job" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="form-group form-group-default">
                                                    <label>เพราะอะไร</label>
                                                    <input wire:model="because" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="form-group form-group-default">
                                                    <label>ความสามารถพิเศษ</label>
                                                    <input wire:model="talent" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6">
                                                <label style="margin-bottom: 5px;"><small>การอ่านเขียน (เลือก 1 หัวข้อ)</small></label>
                                                <div class="form-group">
                                                    <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="อ่านเขียนคล่อง" class="selectgroup-input" wire:model="read_write" id="อ่านเขียนคล่อง">
                                                            <span class="selectgroup-button">อ่านเขียนคล่อง</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="อ่านเขียนไม่คล่อง" class="selectgroup-input" wire:model="read_write" id="อ่านเขียนไม่คล่อง">
                                                            <span class="selectgroup-button">อ่านเขียนไม่คล่อง</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="อ่านเขียนพอได้" class="selectgroup-input" wire:model="read_write" id="อ่านเขียนพอได้">
                                                            <span class="selectgroup-button">อ่านเขียนพอได้</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="อ่านเขียนไม่ได้" class="selectgroup-input" wire:model="read_write" id="อ่านเขียนไม่ได้">
                                                            <span class="selectgroup-button">อ่านเขียนไม่ได้</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <label style="margin-bottom: 5px;"><small>นักเรียนไม่เข้าใจบทเรียนทุกวิชา (เลือก 1 หัวข้อ)</small></label>
                                                <div class="form-group">
                                                    <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="understand" value="ใช่" class="selectgroup-input" wire:model="understand" id="ใช่">
                                                            <span class="selectgroup-button">ใช่</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="understand" value="ไม่ใช่" class="selectgroup-input" wire:model="understand" id="ไม่ใช่">
                                                            <span class="selectgroup-button">ไม่ใช่</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- รายละเอียกนักเรียน -->
                    @if ($currentstep == 4)
                    <div class="step-four">
                        <div class="page-inner mt--5">
                            <div class="row mt--2">
                                <div class="col-md-12">
                                    <div class="card full-height">
                                        <div class="card-header">
                                            <div class="card-head-row">
                                                <div class="card-title"><i class="fas fa-id-card-alt"></i> &nbsp;&nbsp; ระบบบันทึกข้อมูลพื้นฐาน <i class="flaticon-right-arrow"></i> เพิ่มข้อมูล (4/6)</div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="alert alert-info" role="alert" align="center">
                                                <h5><i class="fas fa-info-circle"></i>
                                                    กรุณากรอกข้อมูลตามความเป็นจริงก่อนบันทึกข้อมูลเพื่อผลประโยชน์ของนักเรียนในการใช้ขอทุน หรือตรวจสอบปัจจัยต่างๆที่จะได้รับ</h5>
                                            </div>


                                            <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                <p style="margin-left: 25px;  font-size: 15px;"><b>การเดินทาง</b></p>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>การเดินทางมาโรงเรียน</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" wire:model="go_school">
                                                            <option>เลือก</option>
                                                            <option value="gs1">เดินเท้า</option>
                                                            <option value="gs2">รถจักรยาน</option>
                                                            <option value="gs3">รถจักรยานยนต์</option>
                                                            <option value="gs4">รถเดือน</option>
                                                            <option value="gs5">พ่อแม่หรือญาติมาส่ง</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ระยะเวลาเดินทาง (นาที)</label>
                                                        <input wire:model="go_school_time" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ระยะห่างจาก ร.ร. (ลูกรัง) เมตร</label>
                                                        <input wire:model="distance" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ระยะห่างจาก ร.ร. (ลาดยาง) เมตร</label>
                                                        <input wire:model="long_distance" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                <p style="margin-left: 25px;  font-size: 15px;"><b>การเรียนออนไลน์</b></p>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6">
                                                    <label style="margin-bottom: 5px;"><small>อุปกรณ์ที่มี (เลือกได้มากกว่า 1 หัวข้อ)</small></label>
                                                    <div class="form-group">
                                                        <div class="selectgroup selectgroup-pills">
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="tool" value="g1" class="selectgroup-input" wire:model="gadject" id="มือถือ/สมาร์ทโฟน">
                                                                <span class="selectgroup-button">มือถือ/สมาร์ทโฟน</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="tool" value="g2" class="selectgroup-input" wire:model="gadject" id="แท็บเล็ต">
                                                                <span class="selectgroup-button">แท็บเล็ต</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="tool" value="g3" class="selectgroup-input" wire:model="gadject" id="โน๊ตบุ๊ค">
                                                                <span class="selectgroup-button">โน๊ตบุ๊ค</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="tool" value="g4" class="selectgroup-input" wire:model="gadject" id="คอมพิวเตอร์แบบตั้งโต๊ะ">
                                                                <span class="selectgroup-button">คอมพิวเตอร์แบบตั้งโต๊ะ</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <label style="margin-bottom: 5px;"><small>อินเตอร์เน็ตที่ใช้ (เลือก 1 หัวข้อ)</small></label>
                                                    <div class="form-group">
                                                        <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="net" value="yes" class="selectgroup-input" wire:model="internet" id="อินเตอร์เน็ตไร้สาย">
                                                                <span class="selectgroup-button">อินเตอร์เน็ตไร้สาย</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="net" value="no" class="selectgroup-input" wire:model="internet" id="อินเตอร์เน็ตสาย">
                                                                <span class="selectgroup-button">อินเตอร์เน็ตสาย</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลด้านอื่นๆ</b></p>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>ความพิการ</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" wire:model="disabled">
                                                            <option>เลือก</option>
                                                            <option value="ds1">ไม่มี</option>
                                                            <option value="ds2">การมองเห็น</option>
                                                            <option value="ds3">การได้ยิน</option>
                                                            <option value="ds4">สติปัญญา</option>
                                                            <option value="ds5">ร่างกาย/สุขภาพ</option>
                                                            <option value="ds6">การเรียนรู้</option>
                                                            <option value="ds7">การพูด/ภาษา</option>
                                                            <option value="ds8">พฤติกรรม/อารมณ์</option>
                                                            <option value="ds9">ออทิสติค</option>
                                                            <option value="ds10">พิการซ้ำซ้อน</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>ความด้อยโอกาส</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" wire:model="unfortuned">
                                                            <option>เลือก</option>
                                                            <option value="un1">ไม่มี</option>
                                                            <option value="un2">ถูกบังคับขายแรงงาน</option>
                                                            <option value="un3">อยู่ในธุรกิจทางเพศ</option>
                                                            <option value="un4">ถูกทอดทิ้ง</option>
                                                            <option value="un5">เด็กเร่ร่อน</option>
                                                            <option value="un6">ได้รับผลกระทบจากเอดส์</option>
                                                            <option value="un7">ชนกลุ่มน้อย</option>
                                                            <option value="un8">ถูกทำร้ายทารุณ</option>
                                                            <option value="un9">เด็กยากจน</option>
                                                            <option value="un10">เด็กที่มีปัญหาเกี่ยวกับยาเสพติด</option>
                                                            <option value="un11">เด็กกำพร้า</option>
                                                            <option value="un12">ทำงานรับผิดชอบตนเองและครอบครัว</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <label style="margin-bottom: 5px;"><small>ความขาดแคลน (เลือกได้มากกว่า 1 หัวข้อ)</small></label>
                                                    <div class="form-group">
                                                        <div class="selectgroup selectgroup-pills">
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="1" class="selectgroup-input" wire:model="lack" id="ขาดแคลนแบบเรียน">
                                                                <span class="selectgroup-button">ขาดแคลนแบบเรียน</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="2" class="selectgroup-input" wire:model="lack" id="ขาดแคลนเครื่องเขียน">
                                                                <span class="selectgroup-button">ขาดแคลนเครื่องเขียน</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="3" class="selectgroup-input" wire:model="lack" id="ขาดแคลนอาหารกลางวัน">
                                                                <span class="selectgroup-button">ขาดแคลนอาหารกลางวัน</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="4" class="selectgroup-input" wire:model="lack" id="ขาดแคลนเครื่องแบบ">
                                                                <span class="selectgroup-button">ขาดแคลนเครื่องแบบ</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="5" class="selectgroup-input" wire:model="lack" id="ไม่ขาดแคลน">
                                                                <span class="selectgroup-button">ไม่ขาดแคลน</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <label style="margin-bottom: 5px;"><small>นักเรียนคบเพื่อนที่เกี่ยวข้องกับสิ่งเสพติด</small></label>
                                                    <div class="form-group">
                                                        <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="1" value="yes" class="selectgroup-input" wire:model="friend_drug" id="ใช่">
                                                                <span class="selectgroup-button">ใช่</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="1" value="no" class="selectgroup-input" wire:model="friend_drug"id="ไม่ใช่">
                                                                <span class="selectgroup-button">ไม่ใช่</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <label style="margin-bottom: 5px;"><small>นักเรียนมีพฤติกรรมเสพยาหรือจำหน่ายสิ่งเสพติด</small></label>
                                                    <div class="form-group">
                                                        <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="2" value="yes" class="selectgroup-input" wire:model="sell_drug" id="ใช่">
                                                                <span class="selectgroup-button">ใช่</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="2" value="no" class="selectgroup-input" wire:model="sell_drug" id="ไม่ใช่">
                                                                <span class="selectgroup-button">ไม่ใช่</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <label style="margin-bottom: 5px;"><small>นักเรียนมีพฤติกรรมส่อไปในทางชู้สาว</small></label>
                                                    <div class="form-group">
                                                        <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="3" value="yes" class="selectgroup-input" wire:model="sexual" id="ใช่">
                                                                <span class="selectgroup-button">ใช่</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="3" value="no" class="selectgroup-input" wire:model="sexual" id="ไม่ใช่">
                                                                <span class="selectgroup-button">ไม่ใช่</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <label style="margin-bottom: 5px;"><small>นักเรียนพักหรืออาศัยอยู่กับเพื่อนต่างเพศที่มิใช่ญาติพี่น้อง</small></label>
                                                    <div class="form-group">
                                                        <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="4" value="yes" class="selectgroup-input" wire:model="not_parent" id="ใช่">
                                                                <span class="selectgroup-button">ใช่</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="4" value="no" class="selectgroup-input" wire:model="not_parent" id="ไม่ใช่">
                                                                <span class="selectgroup-button">ไม่ใช่</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <label style="margin-bottom: 5px;"><small>นักเรียนชอบเที่ยวกลางคืน</small></label>
                                                    <div class="form-group">
                                                        <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="5" value="yes" class="selectgroup-input" wire:model="dark_travel" id="ใช่">
                                                                <span class="selectgroup-button">ใช่</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="5" value="no" class="selectgroup-input" wire:model="dark_travel" id="ไม่ใช่">
                                                                <span class="selectgroup-button">ไม่ใช่</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <label style="margin-bottom: 5px;"><small>นักเรียนเคยถูกล่วงละเมิดทางเพศ</small></label>
                                                    <div class="form-group">
                                                        <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="6" value="yes" class="selectgroup-input" wire:model="sexual_harrasment" id="ใช่">
                                                                <span class="selectgroup-button">ใช่</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="6" value="no" class="selectgroup-input" wire:model="sexual_harrasment" id="ไม่ใช่">
                                                                <span class="selectgroup-button">ไม่ใช่</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <label style="margin-bottom: 5px;"><small>นักเรียนรู้สึกว่าโลกนี้ (เลือก 1 หัวข้อ)</small></label>
                                                    <div class="form-group">
                                                        <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="world" value="yes" class="selectgroup-input" wire:model="cute_world" id="น่าอยู่">
                                                                <span class="selectgroup-button">น่าอยู่</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="world" value="no" class="selectgroup-input" wire:model="cute_world" id="ไม่น่าอยู่">
                                                                <span class="selectgroup-button">ไม่น่าอยู่</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <label style="margin-bottom: 5px;"><small>นักเรียนรู้สึกว่าตัวเอง (เลือก 1 หัวข้อ)</small></label>
                                                    <div class="form-group">
                                                        <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="heart" value="yes" class="selectgroup-input" wire:model="rich_man" id="มีค่า">
                                                                <span class="selectgroup-button">มีค่า</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="heart" value="no" class="selectgroup-input" wire:model="rich_man" id="ไม่มีค่า">
                                                                <span class="selectgroup-button">ไม่มีค่า</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนคิดว่าคนที่ดีควรมีลักษณะอย่างไร</label>
                                                        <input wire:model="good_guy" type="text" class="form-control" placeholder="" >
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนคิดว่าสังคมที่ดีควรมีลักษณะอย่างไร</label>
                                                        <input wire:model="social_good" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <label style="margin-bottom: 5px;"><small>ปัญหาเรื่องใด ที่นักเรียนกำลังประสบอยู่ในขณะนี้ (เลือกได้มากกว่า 1 อย่าง)</small></label>
                                                    <div class="form-group">
                                                        <div class="selectgroup selectgroup-pills">
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="1" class="selectgroup-input" wire:model="problem" id="ครอบครัว">
                                                                <span class="selectgroup-button">ครอบครัว</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="2" class="selectgroup-input" wire:model="problem" id="การเรียน">
                                                                <span class="selectgroup-button">การเรียน</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="3" class="selectgroup-input" wire:model="problem" id="สุขภาพ">
                                                                <span class="selectgroup-button">สุขภาพ</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="4" class="selectgroup-input" wire:model="problem" id="เศรษฐกิจ">
                                                                <span class="selectgroup-button">เศรษฐกิจ</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="5" class="selectgroup-input" wire:model="problem" id="การคบเพื่อน">
                                                                <span class="selectgroup-button">การคบเพื่อน</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="6" class="selectgroup-input" wire:model="problem" id="การวางตัวในสังคม">
                                                                <span class="selectgroup-button">การวางตัวในสังคม</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="7" class="selectgroup-input" wire:model="problem" id="การใช้เวลาว่าง">
                                                                <span class="selectgroup-button">การใช้เวลาว่าง</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="8" class="selectgroup-input" wire:model="problem" id="การเลือกอาชีพ">
                                                                <span class="selectgroup-button">การเลือกอาชีพ</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="9" class="selectgroup-input" wire:model="problem" id="การเลือกศึกษาต่อ">
                                                                <span class="selectgroup-button">การเลือกศึกษาต่อ</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="10" class="selectgroup-input" wire:model="problem" id="การปรับตัวเข้ากับครู-อาจารย์ในโรงเรียน">
                                                                <span class="selectgroup-button">การปรับตัวเข้ากับครู-อาจารย์ในโรงเรียน</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <label style="margin-bottom: 5px;"><small>ถ้าต้องการความช่วยเหลือ/ปรึกษา นักเรียนต้องการความช่วยเหลือ/ปรึกษา จากใคร (เลือกได้มากกว่า 1 อย่าง)</small></label>
                                                    <div class="form-group">
                                                        <div class="selectgroup selectgroup-pills">
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="1" class="selectgroup-input" wire:model="help" id="บิดา">
                                                                <span class="selectgroup-button">บิดา</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="2" class="selectgroup-input" wire:model="help" id="มารดา">
                                                                <span class="selectgroup-button">มารดา</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="3" class="selectgroup-input" wire:model="help" id="ครูแนะแนว">
                                                                <span class="selectgroup-button">ครูแนะแนว</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="4" class="selectgroup-input" wire:model="help" id="ครูที่ปรึกษา">
                                                                <span class="selectgroup-button">ครูที่ปรึกษา</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="5" class="selectgroup-input" wire:model="help" id="เพื่อน">
                                                                <span class="selectgroup-button">เพื่อน</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="5" class="selectgroup-input" wire:model="help" id="อื่นๆ">
                                                                <span class="selectgroup-button">อื่นๆ</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- สุขภาพ -->
                        @if ($currentstep == 5)
                        <div class="step-five">
                            <div class="page-inner mt--5">
                                <div class="row mt--2">
                                    <div class="col-md-12">
                                        <div class="card full-height">
                                            <div class="card-header">
                                                <div class="card-head-row">
                                                    <div class="card-title"><i class="fas fa-id-card-alt"></i> &nbsp;&nbsp; ระบบบันทึกข้อมูลพื้นฐาน <i class="flaticon-right-arrow"></i> เพิ่มข้อมูล (5/6)</div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="alert alert-info" role="alert" align="center">
                                                    <h5><i class="fas fa-info-circle"></i>
                                                        กรุณากรอกข้อมูลตามความเป็นจริงก่อนบันทึกข้อมูลเพื่อผลประโยชน์ของนักเรียนในการใช้ขอทุน หรือตรวจสอบปัจจัยต่างๆที่จะได้รับ</h5>
                                                </div>


                                                <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                    <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลสุขภาพ</b></p>
                                                </div>

                                                <div class="row">
                                                    <div class="col-6 col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>น้ำหนัก</label>
                                                            <input id="Name" type="text" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>ส่วนสูง</label>
                                                            <input id="Name" type="text" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 col-md-3">
                                                        <div class="form-group form-group-default">
                                                            <label>โรคประจำตัว</label>
                                                            <input id="Name" type="text" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-3">
                                                        <div class="form-group form-group-default">
                                                            <label>ยาที่แพ้</label>
                                                            <input id="Name" type="text" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-3">
                                                        <div class="form-group form-group-default">
                                                            <label>ยาที่ต้องรับประทานประจำ</label>
                                                            <input id="Name" type="text" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-3">
                                                        <div class="form-group form-group-default">
                                                            <label>วิธีแก้ไขเมื่อเกิดอาการ</label>
                                                            <input id="Name" type="text" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-12">
                                                        <label style="margin-bottom: 5px;"><small>นักเรียนมีภาวะทางสายตา (เลือกได้มากกว่า 1 อย่าง เช่น สายตาสั้น-เอียง)</small></label>
                                                        <div class="form-group">
                                                            <div class="selectgroup selectgroup-pills">
                                                                <label class="selectgroup-item">
                                                                    <input type="checkbox" name="eye" value="1" class="selectgroup-input">
                                                                    <span class="selectgroup-button">ปกติ</span>
                                                                </label>
                                                                <label class="selectgroup-item">
                                                                    <input type="checkbox" name="eye" value="2" class="selectgroup-input">
                                                                    <span class="selectgroup-button">สายตาสั้น</span>
                                                                </label>
                                                                <label class="selectgroup-item">
                                                                    <input type="checkbox" name="eye" value="3" class="selectgroup-input">
                                                                    <span class="selectgroup-button">สายตายาว</span>
                                                                </label>
                                                                <label class="selectgroup-item">
                                                                    <input type="checkbox" name="eye" value="4" class="selectgroup-input">
                                                                    <span class="selectgroup-button">สายตาเอียง</span>
                                                                </label>
                                                                <label class="selectgroup-item">
                                                                    <input type="checkbox" name="eye" value="5" class="selectgroup-input">
                                                                    <span class="selectgroup-button">ตาบอดสี</span>
                                                                </label>
                                                                <label class="selectgroup-item">
                                                                    <input type="checkbox" name="eye" value="6" class="selectgroup-input">
                                                                    <span class="selectgroup-button">อื่นๆ</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3">
                                                        <label style="margin-bottom: 5px;"><small>นักเรียนสวมแว่นตา</small></label>
                                                        <div class="form-group">
                                                            <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="1" value="yes" class="selectgroup-input">
                                                                    <span class="selectgroup-button">ใช่</span>
                                                                </label>
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="1" value="no" class="selectgroup-input">
                                                                    <span class="selectgroup-button">ไม่ใช่</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <label style="margin-bottom: 5px;"><small>นักเรียนป่วยเป็นโรคร้ายแรงหรือเรื้อรัง</small></label>
                                                        <div class="form-group">
                                                            <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="2" value="yes" class="selectgroup-input">
                                                                    <span class="selectgroup-button">ใช่</span>
                                                                </label>
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="2" value="no" class="selectgroup-input">
                                                                    <span class="selectgroup-button">ไม่ใช่</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <label style="margin-bottom: 5px;"><small>นักเรียนมีความบกพร่องทางการได้ยิน</small></label>
                                                        <div class="form-group">
                                                            <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="3" value="yes" class="selectgroup-input">
                                                                    <span class="selectgroup-button">ใช่</span>
                                                                </label>
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="3" value="no" class="selectgroup-input">
                                                                    <span class="selectgroup-button">ไม่ใช่</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <label style="margin-bottom: 5px;"><small>นักเรียนมีความบกพร่องทางร่างกาย</small></label>
                                                        <div class="form-group">
                                                            <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="4" value="yes" class="selectgroup-input">
                                                                    <span class="selectgroup-button">ใช่</span>
                                                                </label>
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="4" value="no" class="selectgroup-input">
                                                                    <span class="selectgroup-button">ไม่ใช่</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            <!-- ครอบครัว -->
                            @if ($currentstep == 6)
                            <div class="step-six">
                                <div class="page-inner mt--5">
                                    <div class="row mt--2">
                                        <div class="col-md-12">
                                            <div class="card full-height">
                                                <div class="card-header">
                                                    <div class="card-head-row">
                                                        <div class="card-title"><i class="fas fa-id-card-alt"></i> &nbsp;&nbsp; ระบบบันทึกข้อมูลพื้นฐาน <i class="flaticon-right-arrow"></i> เพิ่มข้อมูล (6/6)</div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="alert alert-info" role="alert" align="center">
                                                        <h5><i class="fas fa-info-circle"></i>
                                                            กรุณากรอกข้อมูลตามความเป็นจริงก่อนบันทึกข้อมูลเพื่อผลประโยชน์ของนักเรียนในการใช้ขอทุน หรือตรวจสอบปัจจัยต่างๆที่จะได้รับ</h5>
                                                    </div>


                                                    <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                        <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลบิดา</b></p>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>คำนำหน้าชื่อ</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>นาย</option>
                                                                    <option>นางสาว</option>
                                                                    <option>นาง</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4">
                                                            <div class="form-group form-group-default">
                                                                <label>ชื่อภาษาไทย</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>ชื่อกลาง</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4">
                                                            <div class="form-group form-group-default">
                                                                <label>นามสกุลภาษาไทย</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 col-md-4">
                                                            <div class="form-group form-group-default">
                                                                <label>เลขประจำตัวประชาชน</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4">
                                                            <div class="form-group form-group-default">
                                                                <label>ชนิดของบัตร</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">บัตรประจำตัวประชาชน</option>
                                                                    <option value="">บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย</option>
                                                                    <option value="">บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>อายุ</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>หมู่เลือด</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">A</option>
                                                                    <option value="">B</option>
                                                                    <option value="">O</option>
                                                                    <option value="">AB</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 col-md-6">
                                                            <div class="form-group form-group-default">
                                                                <label>การประกอบอาชีพ</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">รับราชกาล</option>
                                                                    <option value="">ค้าขาย</option>
                                                                    <option value="">เกษตรกร</option>
                                                                    <option value="">ลูกจ้าง</option>
                                                                    <option value="">อิสระ</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>รายได้ต่อเดือน (บาท)</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                <option value="">0 - 9000</option>
                                                                    <option value="">9,001 - 15,000</option>
                                                                    <option value="">15,001 - 30,000</option>
                                                                    <option value="">30,001 - 50,000</option>
                                                                    <option value="">50,001 - 100,000</option>
                                                                    <option value="">100,001 - 300,000</option>
                                                                    <option value="">มากกว่า 300,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                                <input id="Name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>บ้านเลขที่</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>หมู่</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>ชื่อหมู่บ้าน</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>ซอย</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>ถนน</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>ตำบล/แขวง</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>อำเภอ/เขต</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>จังหวัด</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>รหัสไปรษณีย์</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                        <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลมารดา</b></p>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>คำนำหน้าชื่อ</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>นาย</option>
                                                                    <option>นางสาว</option>
                                                                    <option>นาง</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4">
                                                            <div class="form-group form-group-default">
                                                                <label>ชื่อภาษาไทย</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>ชื่อกลาง</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4">
                                                            <div class="form-group form-group-default">
                                                                <label>นามสกุลภาษาไทย</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 col-md-4">
                                                            <div class="form-group form-group-default">
                                                                <label>เลขประจำตัวประชาชน</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4">
                                                            <div class="form-group form-group-default">
                                                                <label>ชนิดของบัตร</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">บัตรประจำตัวประชาชน</option>
                                                                    <option value="">บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย</option>
                                                                    <option value="">บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>อายุ</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>หมู่เลือด</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">A</option>
                                                                    <option value="">B</option>
                                                                    <option value="">O</option>
                                                                    <option value="">AB</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 col-md-6">
                                                            <div class="form-group form-group-default">
                                                                <label>การประกอบอาชีพ</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">รับราชกาล</option>
                                                                    <option value="">ค้าขาย</option>
                                                                    <option value="">เกษตรกร</option>
                                                                    <option value="">ลูกจ้าง</option>
                                                                    <option value="">อิสระ</option>
                                                                </select>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>รายได้ต่อเดือน (บาท)</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">0 - 9000</option>
                                                                    <option value="">9,001 - 15,000</option>
                                                                    <option value="">15,001 - 30,000</option>
                                                                    <option value="">30,001 - 50,000</option>
                                                                    <option value="">50,001 - 100,000</option>
                                                                    <option value="">100,001 - 300,000</option>
                                                                    <option value="">มากกว่า 300,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                                <input id="Name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>บ้านเลขที่</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>หมู่</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>ชื่อหมู่บ้าน</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>ซอย</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>ถนน</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>ตำบล/แขวง</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>อำเภอ/เขต</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>จังหวัด</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>รหัสไปรษณีย์</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                        <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลผู้ปกครอง</b></p>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-12">

                                                            <div class="form-check">
                                                                <label class="form-radio-label">
                                                                    <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                                                                    <span class="form-radio-sign">บิดา</span>
                                                                </label>
                                                                <label class="form-radio-label ml-1">
                                                                    <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                                                                    <span class="form-radio-sign">มารดา</span>
                                                                </label>
                                                                <label class="form-radio-label ml-1">
                                                                    <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                                                                    <span class="form-radio-sign">บุคคลอื่น</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>คำนำหน้าชื่อ</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>นาย</option>
                                                                    <option>นางสาว</option>
                                                                    <option>นาง</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4">
                                                            <div class="form-group form-group-default">
                                                                <label>ชื่อภาษาไทย</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>ชื่อกลาง</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4">
                                                            <div class="form-group form-group-default">
                                                                <label>นามสกุลภาษาไทย</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 col-md-4">
                                                            <div class="form-group form-group-default">
                                                                <label>เลขประจำตัวประชาชน</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <div class="form-group form-group-default">
                                                                <label>ชนิดของบัตร</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">บัตรประจำตัวประชาชน</option>
                                                                    <option value="">บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย</option>
                                                                    <option value="">บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>อายุ</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>ความสัมพันธ์ผู้ปกครอง</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">พี่ชาย</option>
                                                                    <option value="">พี่สาว</option>
                                                                    <option value="">บิดา</option>
                                                                    <option value="">มารดา</option>
                                                                    <option value="">ลุง</option>
                                                                    <option value="">ป้า</option>
                                                                    <option value="">น้า</option>
                                                                    <option value="">อา</option>
                                                                    <option value="">ปู่</option>
                                                                    <option value="">ย่า</option>
                                                                    <option value="">ตา</option>
                                                                    <option value="">ยาย</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 col-md-6">
                                                            <div class="form-group form-group-default">
                                                                <label>การประกอบอาชีพ</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">รับราชกาล</option>
                                                                    <option value="">ค้าขาย</option>
                                                                    <option value="">เกษตรกร</option>
                                                                    <option value="">ลูกจ้าง</option>
                                                                    <option value="">อิสระ</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>รายได้ต่อเดือน (บาท)</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">0 - 9000</option>
                                                                    <option value="">9,001 - 15,000</option>
                                                                    <option value="">15,001 - 30,000</option>
                                                                    <option value="">30,001 - 50,000</option>
                                                                    <option value="">50,001 - 100,000</option>
                                                                    <option value="">100,001 - 300,000</option>
                                                                    <option value="">มากกว่า 300,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                                <input id="Name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>บ้านเลขที่</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>หมู่</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>ชื่อหมู่บ้าน</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>ซอย</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>ถนน</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>ตำบล/แขวง</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>อำเภอ/เขต</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>จังหวัด</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>รหัสไปรษณีย์</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                        <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลครอบครัวเบื้องต้น</b></p>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6 col-md-8">
                                                            <div class="form-group form-group-default">
                                                                <label>สถานภาพสมรสของบิดามารดา</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">สมรส</option>
                                                                    <option value="">หย่าร้าง</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <div class="form-group form-group-default">
                                                                <label>สถานะผู้ปกครองนักเรียน</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-4">
                                                            <div class="form-group form-group-default">
                                                                <label>จำนวนพี่น้อง ร่วมสายโลหิต</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">0</option>
                                                                    <option value="">1</option>
                                                                    <option value="">2</option>
                                                                    <option value="">3</option>
                                                                    <option value="">4</option>
                                                                    <option value="">5</option>
                                                                    <option value="">6</option>
                                                                    <option value="">7</option>
                                                                    <option value="">8</option>
                                                                    <option value="">9</option>
                                                                    <option value="">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>จำนวนพี่ชาย</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">0</option>
                                                                    <option value="">1</option>
                                                                    <option value="">2</option>
                                                                    <option value="">3</option>
                                                                    <option value="">4</option>
                                                                    <option value="">5</option>
                                                                    <option value="">6</option>
                                                                    <option value="">7</option>
                                                                    <option value="">8</option>
                                                                    <option value="">9</option>
                                                                    <option value="">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>จำนวนน้องชาย</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">0</option>
                                                                    <option value="">1</option>
                                                                    <option value="">2</option>
                                                                    <option value="">3</option>
                                                                    <option value="">4</option>
                                                                    <option value="">5</option>
                                                                    <option value="">6</option>
                                                                    <option value="">7</option>
                                                                    <option value="">8</option>
                                                                    <option value="">9</option>
                                                                    <option value="">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>จำนวนพี่สาว</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">0</option>
                                                                    <option value="">1</option>
                                                                    <option value="">2</option>
                                                                    <option value="">3</option>
                                                                    <option value="">4</option>
                                                                    <option value="">5</option>
                                                                    <option value="">6</option>
                                                                    <option value="">7</option>
                                                                    <option value="">8</option>
                                                                    <option value="">9</option>
                                                                    <option value="">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>จำนวนน้องสาว</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">0</option>
                                                                    <option value="">1</option>
                                                                    <option value="">2</option>
                                                                    <option value="">3</option>
                                                                    <option value="">4</option>
                                                                    <option value="">5</option>
                                                                    <option value="">6</option>
                                                                    <option value="">7</option>
                                                                    <option value="">8</option>
                                                                    <option value="">9</option>
                                                                    <option value="">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>นักเรียนเป็นบุตรคนที่</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">0</option>
                                                                    <option value="">1</option>
                                                                    <option value="">2</option>
                                                                    <option value="">3</option>
                                                                    <option value="">4</option>
                                                                    <option value="">5</option>
                                                                    <option value="">6</option>
                                                                    <option value="">7</option>
                                                                    <option value="">8</option>
                                                                    <option value="">9</option>
                                                                    <option value="">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>จำนวนพี่น้องที่ศึกษาอยู่ (ไม่นับรวมนักเรียน)</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">0</option>
                                                                    <option value="">1</option>
                                                                    <option value="">2</option>
                                                                    <option value="">3</option>
                                                                    <option value="">4</option>
                                                                    <option value="">5</option>
                                                                    <option value="">6</option>
                                                                    <option value="">7</option>
                                                                    <option value="">8</option>
                                                                    <option value="">9</option>
                                                                    <option value="">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>จำนวนพี่น้องที่ประกอบอาชีพแล้ว</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">0</option>
                                                                    <option value="">1</option>
                                                                    <option value="">2</option>
                                                                    <option value="">3</option>
                                                                    <option value="">4</option>
                                                                    <option value="">5</option>
                                                                    <option value="">6</option>
                                                                    <option value="">7</option>
                                                                    <option value="">8</option>
                                                                    <option value="">9</option>
                                                                    <option value="">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>จำนวนพี่น้องที่อยู่ในความอุปการะของครอบครัว</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">0</option>
                                                                    <option value="">1</option>
                                                                    <option value="">2</option>
                                                                    <option value="">3</option>
                                                                    <option value="">4</option>
                                                                    <option value="">5</option>
                                                                    <option value="">6</option>
                                                                    <option value="">7</option>
                                                                    <option value="">8</option>
                                                                    <option value="">9</option>
                                                                    <option value="">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-9">
                                                            <div class="form-group form-group-default">
                                                                <label>นักเรียนมีหน้าที่รับผิดชอบภายในบ้าน นอกเหนือจากการเรียน</label>
                                                                <input id="Name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>นักเรียนนำเงินมาโรงเรียนวันละ (บาท)</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">0</option>
                                                                    <option value="">1</option>
                                                                    <option value="">2</option>
                                                                    <option value="">3</option>
                                                                    <option value="">4</option>
                                                                    <option value="">5</option>
                                                                    <option value="">6</option>
                                                                    <option value="">7</option>
                                                                    <option value="">8</option>
                                                                    <option value="">9</option>
                                                                    <option value="">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-4">
                                                            <div class="form-group form-group-default">
                                                                <label>รายได้ของครอบครัวต่อเดือน (รายได้รวมกัน)</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option value="">0</option>
                                                                    <option value="">1</option>
                                                                    <option value="">2</option>
                                                                    <option value="">3</option>
                                                                    <option value="">4</option>
                                                                    <option value="">5</option>
                                                                    <option value="">6</option>
                                                                    <option value="">7</option>
                                                                    <option value="">8</option>
                                                                    <option value="">9</option>
                                                                    <option value="">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="form-group form-group-default">
                                                                <label>ผู้ออกค่าใช้จ่ายให้นักเรียน (ชื่อ-นามสกุล)</label>
                                                                <input id="Name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>เกี่ยวข้องเป็น</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>พี่ชาย</option>
                                                                    <option>พี่สาว</option>
                                                                    <option>บิดา</option>
                                                                    <option>มารดา</option>
                                                                    <option>ลุง</option>
                                                                    <option>ป้า</option>
                                                                    <option>น้า</option>
                                                                    <option>อา</option>
                                                                    <option>ปู่</option>
                                                                    <option>ย่า</option>
                                                                    <option>ตา</option>
                                                                    <option>ยาย</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-12">
                                                            <label style="margin-bottom: 5px;"><small>การหารายได้ด้วยตนเอง</small></label>
                                                            <div class="form-check">
                                                                <label class="form-radio-label">
                                                                    <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                                                                    <span class="form-radio-sign">ไม่มี</span>
                                                                </label><br><br>
                                                                <label class="form-radio-label">
                                                                    <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                                                                    <span class="form-radio-sign">มี</span>
                                                                </label>
                                                                <div class="form-group form-group-default">
                                                                    <label>โปรดระบุ (หารายได้จากอะไร)</label>
                                                                    <input id="Name" type="text" class="form-control">
                                                                </div>
                                                                <div class="form-group form-group-default">
                                                                    <label>รายได้เฉลี่ยวันละ (บาท)</label>
                                                                    <input id="Name" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                    <div class="card-footer" align="center">
                        @if ($currentstep == 1)
                            <p style="text-align:center">นักเรียนโปรดตรวจสอบข้อมูลพื้นฐานนักเรียนที่กรอกให้ถูกต้อง<br>
						    เมื่อนักเรียนมั่นใจแล้วให้กดปุ่ม &nbsp;<b>&quot;ถัดไป&quot;</b>&nbsp;ด้านล่าง</p>
                            <button type="button" class="btn btn-secondary" wire:click="nextstep()"><strong>ถัดไป</strong></button>
                            <div></div>
                        @endif

                        @if ( $currentstep == 2 || $currentstep == 3 || $currentstep == 4 || $currentstep == 5 )
                            <p style="text-align:center">นักเรียนโปรดตรวจสอบข้อมูลพื้นฐานนักเรียนที่กรอกให้ถูกต้อง<br>
						    เมื่อนักเรียนมั่นใจแล้วให้กดปุ่ม &nbsp;<b>&quot;ถัดไป&quot;</b>&nbsp; หากต้องการกลับไปหน้าก่อนให้กดปุ่ม &nbsp;<b>&quot;ย้อนกลับ&quot;</b>&nbsp; ด้านล่าง</p>
                            <button type="button" class="btn btn-danger" wire:click="backstep()"><strong>ย้อนกลับ</strong></button>
                            <button type="button" class="btn btn-secondary" wire:click="nextstep()"><strong>ถัดไป</strong></button>
                        @endif

                        @if ($currentstep == 6)
                            <p style="text-align:center">นักเรียนโปรดตรวจสอบข้อมูลพื้นฐานนักเรียนที่กรอกให้ถูกต้อง<br>
						    เมื่อนักเรียนมั่นใจแล้วให้กดปุ่ม &nbsp;<b>&quot;ยืนยัน&quot;</b>&nbsp; หากต้องการกลับไปหน้าก่อนให้กดปุ่ม &nbsp;<b>&quot;ย้อนกลับ&quot;</b>&nbsp; ด้านล่าง</p>
                            <button type="button" class="btn btn-danger" wire:click="backstep()"><strong>ย้อนกลับ</strong></button>
                            <button type="submit" class="btn btn-success"><strong>ยืนยัน</strong></button>
                        @endif
					</div><br>
    </form>
</div>

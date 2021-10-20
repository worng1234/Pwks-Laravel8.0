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
                                            <input id="Name" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-group form-group-default">
                                            <label>แผนการเรียน</label>
                                            <select class="form-control" id="formGroupDefaultSelect">
                                                <option>เลือก</option>
                                                <option>1</option>
                                                <option>1</option>
                                                <option>1</option>
                                                <option>1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>ระดับชั้น</label>
                                            <select class="form-control" id="formGroupDefaultSelect">
                                                <option>เลือก</option>
                                                <option>1</option>
                                                <option>1</option>
                                                <option>1</option>
                                                <option>1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>ลำดับห้อง</label>
                                            <select class="form-control" id="formGroupDefaultSelect">
                                                <option>เลือก</option>
                                                <option>1</option>
                                                <option>1</option>
                                                <option>1</option>
                                                <option>1</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-12">
                                        <div class="form-group form-group-default">
                                            <label>เลขประจำตัวประชาชน</label>
                                            <input id="Name" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>คำนำหน้าชื่อ</label>
                                            <select class="form-control" id="formGroupDefaultSelect">
                                                <option>เลือก</option>
                                                <option value="เด็กชาย">เด็กชาย</option>
                                                <option>เด็กหญิง</option>
                                                <option>นาย</option>
                                                <option>นางสาว</option>
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
                                    <div class="col-sm-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>คำนำหน้าชื่อ(ภาษาอังกฤษ)</label>
                                            <select class="form-control" id="formGroupDefaultSelect">
                                                <option>เลือก</option>
                                                <option>Mr.</option>
                                                <option>Mrs.</option>
                                                <option>Miss</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>ชื่อ(ภาษาอังกฤษ)</label>
                                            <input id="Name" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>ชื่อกลาง(ภาษาอังกฤษ)</label>
                                            <input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>นามสกุล(ภาษาอังกฤษ)</label>
                                            <input id="Name" type="text" class="form-control" placeholder="">
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
                                            <select class="form-control" id="formGroupDefaultSelect">
                                                <option>เลือก</option>
                                                <option>2563</option>
                                                <option>2562</option>
                                                <option>2561</option>
                                                <option>2560</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>เดือน:</label>
                                            <select class="form-control" id="formGroupDefaultSelect">
                                                <option>เลือก</option>
                                                <option>มกราคม</option>
                                                <option>กุมภาพันธ์</option>
                                                <option>มีนาคม</option>
                                                <option>เมษายน</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>วัน:</label>
                                            <select class="form-control" id="formGroupDefaultSelect">
                                                <option>เลือก</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>ชื่อเล่น</label>
                                            <input id="Name" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>เพศสภาพ</label>
                                            <select class="form-control" id="formGroupDefaultSelect">
                                                <option>เลือก</option>
                                                <option>ชาย</option>
                                                <option>หญิง</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>หมู่เลือด</label>
                                            <select class="form-control" id="formGroupDefaultSelect">
                                                <option>เลือก</option>
                                                <option>A</option>
                                                <option>B</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>ศาสนา</label>
                                            <input id="Name" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>เชื้อชาติ</label>
                                            <input id="Name" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <div class="form-group form-group-default">
                                            <label>สัญชาติ</label>
                                            <input id="Name" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>ภาษาที่ใช้ เช่น ไทย จีน อังกฤษ ญี่ปุ่น</label>
                                            <input id="Name" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                            <input id="Name" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>อีเมล์ (name@example.com)</label>
                                            <input id="Name" type="text" class="form-control" placeholder="">
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


                                    <!-- ข้อมูลที่อยู่ปัจจุบัน -->
                                    <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลที่อยู่ตามทะเบียนบ้าน</b></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-12">
                                            <div class="form-check">
                                                <label class="form-radio-label">
                                                    <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                                                    <span class="form-radio-sign">ที่อยู่ตามทะเบียนบ้าน</span>
                                                </label>
                                                <label class="form-radio-label ml-1">
                                                    <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                                                    <span class="form-radio-sign">ที่อยู่อื่น (โปรดระบุ)*</span>
                                                </label>
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
                                                    <input id="Name" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="form-group form-group-default">
                                                    <label>จบชั้น</label>
                                                    <input id="Name" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="form-group form-group-default">
                                                    <label>ผลการเรียนเฉลี่ย</label>
                                                    <input id="Name" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-4">
                                                <div class="form-group form-group-default">
                                                    <label>ตำบล/แขวง</label>
                                                    <input id="Name" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="form-group form-group-default">
                                                    <label>อำเภอ/เขต</label>
                                                    <input id="Name" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="form-group form-group-default">
                                                    <label>จังหวัด</label>
                                                    <input id="Name" type="text" class="form-control" placeholder="">
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
                                                    <input id="Name" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group form-group-default">
                                                    <label>2)</label>
                                                    <input id="Name" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group form-group-default">
                                                    <label>3)</label>
                                                    <input id="Name" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group form-group-default">
                                                    <label>4)</label>
                                                    <input id="Name" type="text" class="form-control" placeholder="">
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
                                                    <input id="Name" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group form-group-default">
                                                    <label>2)</label>
                                                    <input id="Name" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group form-group-default">
                                                    <label>3)</label>
                                                    <input id="Name" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group form-group-default">
                                                    <label>4)</label>
                                                    <input id="Name" type="text" class="form-control" placeholder="">
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
                                                    <input id="Name" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="form-group form-group-default">
                                                    <label>เพราะอะไร</label>
                                                    <input id="Name" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="form-group form-group-default">
                                                    <label>ความสามารถพิเศษ</label>
                                                    <input id="Name" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6">
                                                <label style="margin-bottom: 5px;"><small>การอ่านเขียน (เลือก 1 หัวข้อ)</small></label>
                                                <div class="form-group">
                                                    <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="1" class="selectgroup-input">
                                                            <span class="selectgroup-button">อ่านเขียนคล่อง</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="2" class="selectgroup-input">
                                                            <span class="selectgroup-button">อ่านเขียนไม่คล่อง</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="3" class="selectgroup-input">
                                                            <span class="selectgroup-button">อ่านเขียนพอได้</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="4" class="selectgroup-input">
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
                                                            <input type="radio" name="understand" value="yes" class="selectgroup-input">
                                                            <span class="selectgroup-button">ใช่</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="understand" value="no" class="selectgroup-input">
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
                                                        <select class="form-control" id="formGroupDefaultSelect">
                                                            <option>เลือก</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ระยะเวลาเดินทาง (นาที)</label>
                                                        <input id="Name" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ระยะห่างจาก ร.ร. (ลูกรัง) เมตร</label>
                                                        <input id="Name" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ระยะห่างจาก ร.ร. (ลาดยาง) เมตร</label>
                                                        <input id="Name" type="text" class="form-control" placeholder="">
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
                                                                <input type="checkbox" name="tool" value="1" class="selectgroup-input">
                                                                <span class="selectgroup-button">มือถือ/สมาร์ทโฟน</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="tool" value="2" class="selectgroup-input">
                                                                <span class="selectgroup-button">แท็บเล็ต</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="tool" value="3" class="selectgroup-input">
                                                                <span class="selectgroup-button">โน๊ตบุ๊ค</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="tool" value="4" class="selectgroup-input">
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
                                                                <input type="radio" name="net" value="yes" class="selectgroup-input">
                                                                <span class="selectgroup-button">อินเตอร์เน็ตไร้สาย</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="net" value="no" class="selectgroup-input">
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
                                                        <select class="form-control" id="formGroupDefaultSelect">
                                                            <option>เลือก</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>ความด้อยโอกาส</label>
                                                        <select class="form-control" id="formGroupDefaultSelect">
                                                            <option>เลือก</option>
                                                            <option>1</option>
                                                            <option>2</option>
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
                                                                <input type="checkbox" name="lack" value="1" class="selectgroup-input">
                                                                <span class="selectgroup-button">ขาดแคลนแบบเรียน</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="2" class="selectgroup-input">
                                                                <span class="selectgroup-button">ขาดแคลนเครื่องเขียน</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="3" class="selectgroup-input">
                                                                <span class="selectgroup-button">ขาดแคลนอาหารกลางวัน</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="4" class="selectgroup-input">
                                                                <span class="selectgroup-button">ขาดแคลนเครื่องแบบ</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="5" class="selectgroup-input">
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
                                                <div class="col-sm-6 col-md-4">
                                                    <label style="margin-bottom: 5px;"><small>นักเรียนมีพฤติกรรมเสพยาหรือจำหน่ายสิ่งเสพติด</small></label>
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
                                                <div class="col-sm-6 col-md-4">
                                                    <label style="margin-bottom: 5px;"><small>นักเรียนมีพฤติกรรมส่อไปในทางชู้สาว</small></label>
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
                                                <div class="col-sm-6 col-md-4">
                                                    <label style="margin-bottom: 5px;"><small>นักเรียนพักหรืออาศัยอยู่กับเพื่อนต่างเพศที่มิใช่ญาติพี่น้อง</small></label>
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
                                                <div class="col-sm-6 col-md-4">
                                                    <label style="margin-bottom: 5px;"><small>นักเรียนชอบเที่ยวกลางคืน</small></label>
                                                    <div class="form-group">
                                                        <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="5" value="yes" class="selectgroup-input">
                                                                <span class="selectgroup-button">ใช่</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="5" value="no" class="selectgroup-input">
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
                                                                <input type="radio" name="6" value="yes" class="selectgroup-input">
                                                                <span class="selectgroup-button">ใช่</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="6" value="no" class="selectgroup-input">
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
                                                                <input type="radio" name="world" value="yes" class="selectgroup-input">
                                                                <span class="selectgroup-button">น่าอยู่</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="world" value="no" class="selectgroup-input">
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
                                                                <input type="radio" name="heart" value="yes" class="selectgroup-input">
                                                                <span class="selectgroup-button">มีค่า</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="heart" value="no" class="selectgroup-input">
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
                                                        <input id="Name" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนคิดว่าสังคมที่ดีควรมีลักษณะอย่างไร</label>
                                                        <input id="Name" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <label style="margin-bottom: 5px;"><small>ปัญหาเรื่องใด ที่นักเรียนกำลังประสบอยู่ในขณะนี้ (เลือกได้มากกว่า 1 อย่าง)</small></label>
                                                    <div class="form-group">
                                                        <div class="selectgroup selectgroup-pills">
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="1" class="selectgroup-input">
                                                                <span class="selectgroup-button">ครอบครัว</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="2" class="selectgroup-input">
                                                                <span class="selectgroup-button">การเรียน</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="3" class="selectgroup-input">
                                                                <span class="selectgroup-button">สุขภาพ</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="4" class="selectgroup-input">
                                                                <span class="selectgroup-button">เศรษฐกิจ</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="5" class="selectgroup-input">
                                                                <span class="selectgroup-button">การคบเพื่อน</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="6" class="selectgroup-input">
                                                                <span class="selectgroup-button">การวางตัวในสังคม</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="7" class="selectgroup-input">
                                                                <span class="selectgroup-button">การใช้เวลาว่าง</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="8" class="selectgroup-input">
                                                                <span class="selectgroup-button">การเลือกอาชีพ</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="9" class="selectgroup-input">
                                                                <span class="selectgroup-button">การเลือกศึกษาต่อ</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="issue" value="10" class="selectgroup-input">
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
                                                                <input type="checkbox" name="lack" value="1" class="selectgroup-input">
                                                                <span class="selectgroup-button">บิดา</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="2" class="selectgroup-input">
                                                                <span class="selectgroup-button">มารดา</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="3" class="selectgroup-input">
                                                                <span class="selectgroup-button">ครูแนะแนว</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="4" class="selectgroup-input">
                                                                <span class="selectgroup-button">ครูที่ปรึกษา</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="5" class="selectgroup-input">
                                                                <span class="selectgroup-button">เพื่อน</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="lack" value="5" class="selectgroup-input">
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
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="form-group form-group-default">
                                                                <label>เลขประจำตัวประชาชน</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>ชนิดของบัตร</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>อายุ</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>หมู่เลือด</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>A</option>
                                                                    <option>B</option>
                                                                    <option>O</option>
                                                                    <option>AB</option>
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
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>รายได้ต่อเดือน (บาท)</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
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
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="form-group form-group-default">
                                                                <label>เลขประจำตัวประชาชน</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>ชนิดของบัตร</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>อายุ</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>หมู่เลือด</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>A</option>
                                                                    <option>B</option>
                                                                    <option>O</option>
                                                                    <option>AB</option>
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
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>รายได้ต่อเดือน (บาท)</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
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
                                                        <div class="col-sm-6 col-md-5">
                                                            <div class="form-group form-group-default">
                                                                <label>เลขประจำตัวประชาชน</label>
                                                                <input id="Name" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>ชนิดของบัตร</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>อายุ</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>ความสัมพันธ์ผู้ปกครอง</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>พี่ชาย</option>
                                                                    <option>พี่สาว</option>
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
                                                        <div class="col-6 col-md-6">
                                                            <div class="form-group form-group-default">
                                                                <label>การประกอบอาชีพ</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>รายได้ต่อเดือน (บาท)</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
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
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
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
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>จำนวนพี่ชาย</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>จำนวนน้องชาย</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>จำนวนพี่สาว</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <div class="form-group form-group-default">
                                                                <label>จำนวนน้องสาว</label>
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
                                                        <div class="col-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>นักเรียนเป็นบุตรคนที่</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>จำนวนพี่น้องที่ศึกษาอยู่ (ไม่นับรวมนักเรียน)</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>จำนวนพี่น้องที่ประกอบอาชีพแล้ว</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-3">
                                                            <div class="form-group form-group-default">
                                                                <label>จำนวนพี่น้องที่อยู่ในความอุปการะของครอบครัว</label>
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
                                                                <label>รายได้ของครอบครัวต่อเดือน (รายได้รวมกัน)</label>
                                                                <select class="form-control" id="formGroupDefaultSelect">
                                                                    <option>เลือก</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
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
                                                                    <select class="form-control" id="formGroupDefaultSelect">
                                                                        <option>เลือก</option>
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                    </select>
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

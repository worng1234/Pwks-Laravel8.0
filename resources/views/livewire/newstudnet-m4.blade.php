<form wire:submit.prevent="registernewstudentm4">
<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-12">
							<div class="card full-height">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title"><i class="fas fa-id-card-alt"></i> &nbsp;&nbsp; รับสมัครนักเรียนใหม่ <i class="flaticon-right-arrow"></i> สมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 4</div>
									</div>
								</div>

								<!-- ข้อมูลส่วนตัว -->
								<div class="card-body">
									<div class="alert alert-info" role="alert" align="center"><h5><i class="fas fa-info-circle"></i>
										กรุณากรอกข้อมูลตามความเป็นจริงก่อนบันทึกข้อมูลเพื่อผลประโยชน์ของนักเรียนเอง หรือตรวจสอบปัจจัยต่างๆที่จะได้รับ</h5></div>

									<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p  style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลส่วนตัว</b></p>
                                    </div>
									<div class="row">
										<div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>คำนำหน้าชื่อ</label>
												<select class="form-control" id="formGroupDefaultSelect" wire:model="prename">
													<option>เลือก</option>
													<option value="เด็กชาย">เด็กชาย</option>
													<option value="เด็กหญิง">เด็กหญิง</option>
													<option value="นาย">นาย</option>
													<option value="นางสาว">นางสาว</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อภาษาไทย</label>
                                                <input wire:model="fname" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อกลาง</label>
                                                <input wire:model="name_cen" type="text" class="form-control" placeholder="(ถ้ามี)">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>นามสกุลภาษาไทย</label>
                                                <input wire:model="surname" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-12">
                                            <div class="form-group form-group-default">
                                                <label>เลขประจำตัวประชาชน</label>
                                                <input wire:model="id_number" type="text" class="form-control" placeholder="">
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
												<select class="form-control" id="formGroupDefaultSelect" wire:model="year">
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
												<select class="form-control" id="formGroupDefaultSelect" wire:model="mounth">
													<option>เลือก</option>
													<option value="มกราคม">มกราคม</option>
                                                    <option value="กุมภาพันธ์">กุมภาพันธ์</option>
                                                    <option value="มีนาคม">มีนาคม</option>
                                                    <option value="เมษายน">เมษายน</option>
                                                    <option value="พฤษภาคม">พฤษภาคม</option>
                                                    <option value="มิถุนายน">มิถุนายน</option>
                                                    <option value="กรกฎาคม">กรกฎาคม</option>
                                                    <option value="สิงหาคม">สิงหาคม</option>
                                                    <option value="กันยายน">กันยายน</option>
                                                    <option value="ตุลาคม">ตุลาคม</option>
                                                    <option value="พฤษจิกายน">พฤษจิกายน</option>
                                                    <option value="ธันวาคม">ธันวาคม</option>
												</select>
											</div>
                                        </div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>วัน:</label>
												<select class="form-control" id="formGroupDefaultSelect" wire:model="day">
													<option>เลือก</option>
													<option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
												</select>
											</div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-6 col-md-2">
											<div class="form-group form-group-default">
												<label>เพศสภาพ</label>
												<select class="form-control" id="formGroupDefaultSelect" wire:model="sex">
													<option>เลือก</option>
													<option value="ชาย">ชาย</option>
													<option value="หญิง">หญิง</option>
												</select>
											</div>
                                        </div>
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>ศาสนา</label>
                                                <input wire:model="religion" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>เชื้อชาติ</label>
                                                <input wire:model="origin" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>สัญชาติ</label>
                                                <input wire:model="nationality" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                <input wire:model="tel" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

									<!-- ข้อมูลที่อยู่ตามทะเบียนบ้าน -->
									<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p  style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลที่อยู่ตามทะเบียนบ้าน</b></p>
                                    </div>
									<div class="row">
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>บ้านเลขที่</label>
                                                <input wire:model="house_number" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>หมู่</label>
                                                <input wire:model="bloc" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ซอย</label>
                                                <input wire:model="street" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ถนน</label>
                                                <input wire:model="road" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ตำบล/แขวง</label>
                                                <input wire:model="sub_district" type="text" class="form-control" placeholder="">
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

									<!-- ข้อมูลครอบครัว -->
									<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p  style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลครอบครัว</b></p>
                                    </div>
									<div class="row">
                                        <div class="col-sm-6 col-md-12">
                                            <label style="margin-bottom: 5px;"><small>ชื่อ/นามสกุล บิดา</small></label>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>คำนำหน้าชื่อ</label>
												<select class="form-control" id="formGroupDefaultSelect" wire:model="father_prename">
													<option>เลือก</option>
													<option value="นาย">นาย</option>
                                                    <option value="นาง">นาง</option>
													<option value="นางสาว">นางสาว</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อภาษาไทย</label>
                                                <input wire:model="father_name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อกลาง</label>
                                                <input wire:model="father_namecen" type="text" class="form-control" placeholder="(ถ้ามี)">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>นามสกุลภาษาไทย</label>
                                                <input wire:model="father_surname" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-6 col-md-5">
                                            <div class="form-group form-group-default">
                                                <label>เลขประจำตัวประชาชน</label>
                                                <input wire:model="father_id" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>อาชีพ</label>
                                                <input wire:model="father_job" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                <input wire:model="father_tel" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-6 col-md-12">
                                            <label style="margin-bottom: 5px;"><small>ชื่อ/นามสกุล มารดา</small></label>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>คำนำหน้าชื่อ</label>
												<select class="form-control" id="formGroupDefaultSelect" wire:model="mother_prename">
													<option>เลือก</option>
													<option value="นาย">นาย</option>
                                                    <option value="นาง">นาง</option>
													<option value="นางสาว">นางสาว</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อภาษาไทย</label>
                                                <input wire:model="mother_name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อกลาง</label>
                                                <input wire:model="mother_namecen" type="text" class="form-control" placeholder="(ถ้ามี)">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>นามสกุลภาษาไทย</label>
                                                <input wire:model="mother_surname" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-6 col-md-5">
                                            <div class="form-group form-group-default">
                                                <label>เลขประจำตัวประชาชน</label>
                                                <input wire:model="mother_id" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>อาชีพ</label>
                                                <input wire:model="mother_job" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                <input wire:model="mother_tel" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-6 col-md-12">
                                            <label style="margin-bottom: 5px;"><small>ชื่อ/นามสกุล ผู้ปกครอง</small></label>

											<div class="form-check">
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="optionsRadios" value="" wire:model="parent">
													<span class="form-radio-sign">บิดา</span>
												</label>
												<label class="form-radio-label ml-1">
													<input class="form-radio-input" type="radio" name="optionsRadios" value="" wire:model="parent">
													<span class="form-radio-sign">มารดา</span>
												</label>
												<label class="form-radio-label ml-1">
													<input class="form-radio-input" type="radio" name="optionsRadios" value="" wire:model="parent">
													<span class="form-radio-sign">บุคคลอื่น</span>
												</label>
											</div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>คำนำหน้าชื่อ</label>
												<select class="form-control" id="formGroupDefaultSelect" wire:model="parent_prename">
													<option>เลือก</option>
													<option value="นาย">นาย</option>
                                                    <option value="นาง">นาง</option>
													<option value="นางสาว">นางสาว</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อภาษาไทย</label>
                                                <input wire:model="parent_name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อกลาง</label>
                                                <input wire:model="parent_namecen" type="text" class="form-control" placeholder="(ถ้ามี)">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>นามสกุลภาษาไทย</label>
                                                <input wire:model="parent_surname" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-6 col-md-12">
                                            <div class="form-group form-group-default">
                                                <label>เลขประจำตัวประชาชน</label>
                                                <input wire:model="parent_id" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-6 col-md-4">
											<div class="form-group form-group-default">
												<label>ความสัมพันธ์ผู้ปกครอง</label>
												<select class="form-control" id="formGroupDefaultSelect" wire:model="parent_status">
													<option>เลือก</option>
													<option value="พี่ชาย">พี่ชาย</option>
													<option value="พี่สาว">พี่สาว</option>
													<option value="ลุง">ลุง</option>
													<option value="ป้า">ป้า</option>
													<option value="น้า">น้า</option>
													<option value="อา">อา</option>
													<option value="ปู่">ปู่</option>
													<option value="ย่า">ย่า</option>
													<option value="ตา">ตา</option>
													<option value="ยาย">ยาย</option>
												</select>
											</div>
                                        </div>
										<div class="col-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>อาชีพ</label>
                                                <input wire:model="parent_job" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                <input wire:model="parent_tel" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

									<!-- ข้อมูลทางการศึกษา -->
									<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
										<p  style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลทางการศึกษา</b></p>
									</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<label style="margin-bottom: 5px;"><small>กำลังศึกษาอยู่/สำเร็จการศึกษา ชั้นมัธยมศึกษาปีที่ 3 จากโรงเรียน</small></label>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group form-group-default">
													<label>ชื่อโรงเรียนเดิม</label>
													<input wire:model="final_school" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ตำบล/แขวง</label>
													<input wire:model="final_school_sub_district" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>อำเภอ/เขต</label>
													<input wire:model="final_school_district" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>จังหวัด</label>
													<input wire:model="final_school_province" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
                                        <div class="row">
											<div class="col-sm-6 col-md-12">
												<label style="margin-bottom: 5px;"><small>เลขประจำตัวนักเรียน (เฉพาะนักเรียนชั้น ม.3 โรงเรียนพร้าววิทยาคม)</small></label>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวนักเรียน</label>
													<input wire:model="student_id" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
                                        <div class="row">
											<div class="col-sm-6 col-md-12">
												<label style="margin-bottom: 5px;"><small>ผลสอบ O-NET ระดับชั้นมัธยมศึกษาปีที่ 3 (กรอกเป็นตัวเลขเท่านั้น)</small></label>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>วิชาคณิตศาสตร์</label>
													<input wire:model="onet_math" type="text" class="form-control" placeholder="">
												</div>
											</div>
                                            <div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>วิชาวิทยาศาสตร์</label>
													<input wire:model="onet_sci" type="text" class="form-control" placeholder="">
												</div>
											</div>
                                            <div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>วิชาภาษาไทย</label>
													<input wire:model="onet_thai" type="text" class="form-control" placeholder="">
												</div>
											</div>
                                            <div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>วิชาภาษาอังกฤษ</label>
													<input wire:model="onet_eng" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>


									<!-- ความต้องการความช่วยเหลือด้านการจัดการศึกษา -->
									<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
										<p  style="margin-left: 25px;  font-size: 15px;"><b>ความต้องการความช่วยเหลือด้านการจัดการศึกษา</b></p>
									</div>
									<div class="row">
										<div class="col-sm-6 col-md-12">
											<div class="form-check">
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="optionsRadios" value="">
													<span class="form-radio-sign">ไม่มี</span>
												</label><br><br>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="optionsRadios" value="" wire:model="poor_person">
													<span class="form-radio-sign">ผู้ด้อยโอกาส/ฐานะยากจน</span>
												</label><br><br>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="optionsRadios" value="">
													<span class="form-radio-sign">ผู้พิการ/เด็กพิเศษ</span>
												</label>
												<div class="form-group form-group-default">
													<label>โปรดระบุประเภทความพิเศษ</label>
													<input wire:model="disabled" type="text" class="form-control" placeholder="">
												</div>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="optionsRadios" value="">
													<span class="form-radio-sign">อื่นๆ</span>
												</label>
												<div class="form-group form-group-default">
													<label>โปรดระบุ</label>
													<input wire:model="etc" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
									</div>

                                    <!-- เลือกเรียนแผนการเรียนรู้ -->
									<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
										<p  style="margin-left: 25px;  font-size: 15px;"><b>เลือกเรียนแผนการเรียนรู้ &nbsp;&nbsp;( เลือกอันดับ  1 - 4  ตามลำดับแผนการเรียนรู้ที่เลือก )</b></p>
									</div>
									<div class="row">
                                            <div class="col-6 col-md-6">
                                                <div class="form-group form-group-default">
                                                    <label>อันดับที่ 1</label>
                                                    <select class="form-control" id="formGroupDefaultSelect" wire:model="major_name1">
                                                        <option>เลือก</option>
                                                        <option value="วิทยาศาสตร์ - คณิตศาสตร์">วิทยาศาสตร์ - คณิตศาสตร์</option>
                                                        <option value="ศิลป์ - คำนวณ">ศิลป์ - คำนวณ</option>
                                                        <option value="ศิลป์ - จีน">ศิลป์ - จีน</option>
                                                        <option value="พาณิชย์">พาณิชย์</option>
                                                        <option value="ศิลป์ - อังกฤษ">ศิลป์ - อังกฤษ</option>
                                                        <option value="ศิลปะ">ศิลปะ</option>
                                                        <option value="เกษตร">เกษตร</option>
                                                        <option value="ปวช.">ปวช.</option>
                                                        <option value="คหกรรม">คหกรรม</option>
                                                        <option value="วิทยาศาสตร์ - คอมพิวเตอร์">วิทยาศาสตร์ - คอมพิวเตอร์</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-6">
                                                <div class="form-group form-group-default">
                                                    <label>อันดับที่ 2</label>
                                                    <select class="form-control" id="formGroupDefaultSelect" wire:model="major_name2">
                                                        <option>เลือก</option>
                                                        <option value="วิทยาศาสตร์ - คณิตศาสตร์">วิทยาศาสตร์ - คณิตศาสตร์</option>
                                                        <option value="ศิลป์ - คำนวณ">ศิลป์ - คำนวณ</option>
                                                        <option value="ศิลป์ - จีน">ศิลป์ - จีน</option>
                                                        <option value="พาณิชย์">พาณิชย์</option>
                                                        <option value="ศิลป์ - อังกฤษ">ศิลป์ - อังกฤษ</option>
                                                        <option value="ศิลปะ">ศิลปะ</option>
                                                        <option value="เกษตร">เกษตร</option>
                                                        <option value="ปวช.">ปวช.</option>
                                                        <option value="คหกรรม">คหกรรม</option>
                                                        <option value="วิทยาศาสตร์ - คอมพิวเตอร์">วิทยาศาสตร์ - คอมพิวเตอร์</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-6">
                                                <div class="form-group form-group-default">
                                                    <label>อันดับที่ 3</label>
                                                    <select class="form-control" id="formGroupDefaultSelect" wire:model="major_name3">
                                                        <option>เลือก</option>
                                                        <option value="วิทยาศาสตร์ - คณิตศาสตร์">วิทยาศาสตร์ - คณิตศาสตร์</option>
                                                        <option value="ศิลป์ - คำนวณ">ศิลป์ - คำนวณ</option>
                                                        <option value="ศิลป์ - จีน">ศิลป์ - จีน</option>
                                                        <option value="พาณิชย์">พาณิชย์</option>
                                                        <option value="ศิลป์ - อังกฤษ">ศิลป์ - อังกฤษ</option>
                                                        <option value="ศิลปะ">ศิลปะ</option>
                                                        <option value="เกษตร">เกษตร</option>
                                                        <option value="ปวช.">ปวช.</option>
                                                        <option value="คหกรรม">คหกรรม</option>
                                                        <option value="วิทยาศาสตร์ - คอมพิวเตอร์">วิทยาศาสตร์ - คอมพิวเตอร์</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-6">
                                                <div class="form-group form-group-default">
                                                    <label>อันดับที่ 4</label>
                                                    <select class="form-control" id="formGroupDefaultSelect" wire:model="major_name4">
                                                        <option>เลือก</option>
                                                        <option value="วิทยาศาสตร์ - คณิตศาสตร์">วิทยาศาสตร์ - คณิตศาสตร์</option>
                                                        <option value="ศิลป์ - คำนวณ">ศิลป์ - คำนวณ</option>
                                                        <option value="ศิลป์ - จีน">ศิลป์ - จีน</option>
                                                        <option value="พาณิชย์">พาณิชย์</option>
                                                        <option value="ศิลป์ - อังกฤษ">ศิลป์ - อังกฤษ</option>
                                                        <option value="ศิลปะ">ศิลปะ</option>
                                                        <option value="เกษตร">เกษตร</option>
                                                        <option value="ปวช.">ปวช.</option>
                                                        <option value="คหกรรม">คหกรรม</option>
                                                        <option value="วิทยาศาสตร์ - คอมพิวเตอร์">วิทยาศาสตร์ - คอมพิวเตอร์</option>
                                                    </select>
                                                </div>
                                            </div>
										</div>

									<!-- อัพโหลดรูปภาพ -->
									<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
										<p  style="margin-left: 25px;  font-size: 15px;"><b>อัพโหลดข้อมูลรูปภาพ &nbsp;&nbsp;( นามสกุลไฟล์ภาพ&nbsp;&nbsp;.jpg &nbsp;หรือ&nbsp; .png&nbsp;&nbsp;เท่านั้น )</b></p>
									</div>
									<div class="row">
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label for="exampleFormControlFile1">รูปถ่ายหน้าตรงชุดนักเรียน ขนาด 1.5 นิ้ว</label>
												<input type="file" class="form-control-file" id="exampleFormControlFile1" wire:model="pic">
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label for="exampleFormControlFile1">สำเนาบัตรประชาชน</label>
												<input type="file" class="form-control-file" id="exampleFormControlFile1" wire:model="id_number_pic">
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label for="exampleFormControlFile1">สำเนาทะเบียนบ้าน</label>
												<input type="file" class="form-control-file" id="exampleFormControlFile1" wire:model="house_pic">
											</div>
										</div>
									</div><br><br>
								</div>
								<div class="card-footer" align="center">
									<p style="text-align:center">นักเรียนโปรดตรวจสอบข้อมูลพื้นฐานนักเรียนที่กรอกให้ถูกต้อง<br>
										เมื่อนักเรียนมั่นใจแล้วให้กดปุ่ม &nbsp;<b>&quot;ยืนยัน&quot;</b>&nbsp; ด้านล่าง</p>
									<button type="submit" class="btn btn-primary"><strong>ยืนยันข้อมูล</strong></button>
								</div><br>

							</div>
						</div>
</form>

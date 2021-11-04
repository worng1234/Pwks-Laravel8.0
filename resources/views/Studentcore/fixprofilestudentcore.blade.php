<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ระบบบริหารจัดการข้อมูลทางการศึกษา โรงเรียนพร้าววิทยาคม</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="/assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['../assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <style>
        /* Ensure that the demo table scrolls */
        th,
        td {
            white-space: nowrap;
        }

        div.dataTables_wrapper {
            margin: 0 auto;
        }

        div.container {
            width: 80%;
        }

        .bgimgheader {

            background-repeat: repeat;
            background-position: center;
            position: relative;
        }
    </style>

    <!-- CSS Files -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/atlantis.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="/assets/css/demo.css">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="white">

                <a href="student-index.html" class="logo">
                    <img src="/assets/img/logo3.png" alt="navbar brand" class="navbar-brand" style="width: 100%; height: 75%;">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="white">
                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                        <p class="card-title" style="font-size: 20px;"><b>
                                <font color='#685DA7'>ระบบบริหารจัดการข้อมูลทางการศึกษา</font>
                            </b></p>
                        <label><small>โรงเรียนพร้าววิทยาคม จังหวัดเชียงใหม่ (สำหรับเจ้าหน้าที่ฝ่ายวิชาการ)</small></label>
                    </div>

                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fas fa-school"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" href="index.html" aria-expanded="false">
                                <i class="fas fa-unlock"></i> ออกระบบ
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->

        </div>
        <!-- // End main-header -->

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">

                    <!-- เริ่มโปรไฟล์ -->
                    <div class="user">
                        <div class="info">

                            <label><b>ชื่อ-นามสกุล :</b> ทำงานดี มีเมตตา</label>
                            <label><b>ตำแหน่ง :</b> ลูกจ้างประจำ (พนักงานธุรการ)</label>
                            <label><b>ภาคเรียนที่ :</b> 1/2565</label>


                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- สิ้นสุดโปรไฟล์ -->

                    <!-- เริ่มเมนู -->
                    <ul class="nav nav-primary">

                        <li class="nav-item">
                            <a href="academic-index.html">
                                <i class="fas fa-home"></i>
                                <p>หน้าหลัก</p>
                            </a>
                        </li>

                        <li class="nav-item active submenu">
                            <a data-toggle="collapse" href="#forms">
                                <i class="fas fa-user-graduate"></i>
                                <p>จัดการข้อมูลนักเรียน</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse show" id="forms">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a data-toggle="collapse" href="#forms1">
                                            <span class="sub-item">ข้อมูลนักเรียนพื้นฐาน</span>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse show" id="forms1">
                                            <ul class="nav nav-collapse subnav">
                                                <li class="active">
                                                    <a href="academic-info-all.html">
                                                        <span class="sub-item">แสดงข้อมูลนักเรียน</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="academic-info-add.html">
                                                        <span class="sub-item">เพิ่มข้อมูลนักเรียน</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <a data-toggle="collapse" href="#forms2">
                                            <span class="sub-item">เลื่อนชั้นเรียน</span>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="forms2">
                                            <ul class="nav nav-collapse subnav">
                                                <li>
                                                    <a href="#">
                                                        <span class="sub-item">แสดงข้อมูลเลื่อนชั้นเรียน</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <a data-toggle="collapse" href="#forms3">
                                            <span class="sub-item">จบการศึกษา</span>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="forms3">
                                            <ul class="nav nav-collapse subnav">
                                                <li>
                                                    <a href="academic-graduated-all.html">
                                                        <span class="sub-item">แสดงข้อมูลจบการศึกษา</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="academic-graduated-all.html">
                                                        <span class="sub-item">เพิ่มนักเรียนจบการศึกษา</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <a data-toggle="collapse" href="#forms4">
                                            <span class="sub-item">ย้ายสถานศึกษา</span>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="forms4">
                                            <ul class="nav nav-collapse subnav">
                                                <li>
                                                    <a href="academic-move-all.html">
                                                        <span class="sub-item">แสดงข้อมูลย้ายสถานศึกษา</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="academic-move-add.html">
                                                        <span class="sub-item">เพิ่มนักเรียนย้ายสถานศึกษา</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <a data-toggle="collapse" href="#forms5">
                                            <span class="sub-item">ออกกลางคัน</span>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="forms5">
                                            <ul class="nav nav-collapse subnav">
                                                <li>
                                                    <a href="academic-out-all.html">
                                                        <span class="sub-item">แสดงข้อมูลออกกลางคัน</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="academic-out-add.html">
                                                        <span class="sub-item">เพิ่มนักเรียนออกกลางคัน</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a data-toggle="collapse" href="#agree">
                                <i class="fas fa-id-card-alt"></i>
                                <p>จัดการข้อมูลนักเรียนใหม่</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="agree">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="academic-new-info-tables-agree-m1.html">
                                            <span class="sub-item">ตรวจสอบรายชื่อผู้สมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="academic-new-info-tables-agree-m4.html">
                                            <span class="sub-item">ตรวจสอบรายชื่อผู้สมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 4</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item ">
                            <a href="#">
                                <i class="fas fa-book-open"></i>
                                <p>คู่มือการใช้งาน</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="#">
                                <i class="fas fa-comments"></i>
                                <p>ติดต่อเรา</p>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- สิ้นสุดเมนู -->

        <!-- เริ่มเนื้อหา-->
        <div class="main-panel">
            <div class="content">
                <div class="panel-header " style="background-color: #33658A;">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h3 class="text-white pb-2 fw-bold"></h3>
                            </div>
                        </div>
                    </div>
                </div>


                <form>
                    <!-- ข้อมูลเบื้องต้น -->
                    <div class="step-one">
                        <div class="page-inner mt--5">
                            <div class="row mt--2">
                                <div class="col-md-12">
                                    <div class="card full-height">
                                        <div class="card-header">
                                            <div class="card-head-row">
                                                <div class="card-title"><i class="fas fa-id-card-alt"></i> &nbsp;&nbsp; ข้อมูลนักเรียนพื้นฐาน <i class="flaticon-right-arrow"></i> แสดงข้อมูลนักเรียน</div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลเบื้องต้น</b></p>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>เลขประจำตัวนักเรียน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>แผนการเรียน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ระดับชั้น</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ลำดับห้อง</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-5 col-md-1">
                                                    <div class="form-group form-group-default">
                                                        <label>เลขที่</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>เลขประจำตัวประชาชน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>คำนำหน้าชื่อ</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อภาษาไทย</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อกลาง</label>
                                                        <input type="text" class="form-control" placeholder="(ถ้ามี)">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นามสกุลภาษาไทย</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>คำนำหน้าชื่อ(ภาษาอังกฤษ)</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อ(ภาษาอังกฤษ)</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อกลาง(ภาษาอังกฤษ)</label>
                                                        <input type="text" class="form-control" placeholder="(ถ้ามี)">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นามสกุล(ภาษาอังกฤษ)</label>
                                                        <input type="text" class="form-control" placeholder="">
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
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>เดือน:</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>วัน:</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อเล่น</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>เพศสภาพ</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่เลือด</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ศาสนา</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>เชื้อชาติ</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>สัญชาติ</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ภาษาที่ใช้ เช่น ไทย จีน อังกฤษ ญี่ปุ่น</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>อีเมล์ (name@example.com)</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลที่อยู่ตามทะเบียนบ้าน</b></p>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>บ้านเลขที่</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อหมู่บ้าน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ซอย</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ถนน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ตำบล/แขวง</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>อำเภอ/เขต</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จังหวัด</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รหัสไปรษณีย์</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- ข้อมูลที่อยู่ปัจจุบัน -->
                                            <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลที่อยู่ปัจจุบัน</b></p>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>ที่อยู่ปัจจุบัน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>บ้านเลขที่</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อหมู่บ้าน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ซอย</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ถนน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ตำบล/แขวง</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>อำเภอ/เขต</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จังหวัด</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รหัสไปรษณีย์</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
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
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>จบชั้น</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ผลการเรียนเฉลี่ย</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ตำบล/แขวง</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>อำเภอ/เขต</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>จังหวัด</label>
                                                        <input type="text" class="form-control" placeholder="">
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
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>2)</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>3)</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>4)</label>
                                                        <input type="text" class="form-control" placeholder="">
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
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>2)</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>3)</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>4)</label>
                                                        <input type="text" class="form-control" placeholder="">
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
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>เพราะอะไร</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ความสามารถพิเศษ</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>การอ่านเขียน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนไม่เข้าใจบทเรียนทุกวิชา</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                <p style="margin-left: 25px;  font-size: 15px;"><b>การเดินทาง</b></p>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>การเดินทางมาโรงเรียน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ระยะเวลาเดินทาง (นาที)</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ระยะห่างจาก ร.ร. (ลูกรัง) เมตร</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ระยะห่างจาก ร.ร. (ลาดยาง) เมตร</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                <p style="margin-left: 25px;  font-size: 15px;"><b>การเรียนออนไลน์</b></p>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>อุปกรณ์ที่มี </label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>อินเตอร์เน็ตที่ใช้ </label>
                                                        <input type="text" class="form-control" placeholder="">
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
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>ความด้อยโอกาส</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>ความขาดแคลน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนคบเพื่อนที่เกี่ยวข้องกับสิ่งเสพติด</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนมีพฤติกรรมเสพยาหรือจำหน่ายสิ่งเสพติด</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนมีพฤติกรรมส่อไปในทางชู้สาว</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนพักหรืออาศัยอยู่กับเพื่อนต่างเพศที่มิใช่ญาติพี่น้อง</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนชอบเที่ยวกลางคืน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนเคยถูกล่วงละเมิดทางเพศ</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนรู้สึกว่าโลกนี้</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนรู้สึกว่าตัวเอง</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนคิดว่าคนที่ดีควรมีลักษณะอย่างไร</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนคิดว่าสังคมที่ดีควรมีลักษณะอย่างไร</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>ปัญหาเรื่องใด ที่นักเรียนกำลังประสบอยู่ในขณะนี้</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>ถ้าต้องการความช่วยเหลือ/ปรึกษา นักเรียนต้องการความช่วยเหลือ/ปรึกษา จากใคร</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลสุขภาพ</b></p>
                                            </div>

                                            <div class="row">
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>น้ำหนัก</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>ส่วนสูง</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>โรคประจำตัว</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ยาที่แพ้</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ยาที่ต้องรับประทานประจำ</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>วิธีแก้ไขเมื่อเกิดอาการ</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนมีภาวะทางสายตา</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนสวมแว่นตา</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนป่วยเป็นโรคร้ายแรงหรือเรื้อรัง</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนมีความบกพร่องทางการได้ยิน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนมีความบกพร่องทางร่างกาย</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลบิดา</b></p>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>คำนำหน้าชื่อ</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อภาษาไทย</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อกลาง</label>
                                                        <input type="text" class="form-control" placeholder="(ถ้ามี)">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นามสกุลภาษาไทย</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>เลขประจำตัวประชาชน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชนิดของบัตร</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>อายุ</label>
                                                        <input id="age_f" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่เลือด</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>การประกอบอาชีพ</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รายได้ต่อเดือน (บาท)</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>บ้านเลขที่</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อหมู่บ้าน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ซอย</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ถนน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ตำบล/แขวง</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>อำเภอ/เขต</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จังหวัด</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รหัสไปรษณีย์</label>
                                                        <input type="text" class="form-control" placeholder="">
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
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อภาษาไทย</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อกลาง</label>
                                                        <input type="text" class="form-control" placeholder="(ถ้ามี)">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นามสกุลภาษาไทย</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>เลขประจำตัวประชาชน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชนิดของบัตร</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>อายุ</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่เลือด</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>การประกอบอาชีพ</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รายได้ต่อเดือน (บาท)</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>บ้านเลขที่</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อหมู่บ้าน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ซอย</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ถนน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ตำบล/แขวง</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>อำเภอ/เขต</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จังหวัด</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รหัสไปรษณีย์</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลผู้ปกครอง</b></p>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>ผู้ปกครอง</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>คำนำหน้าชื่อ</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อภาษาไทย</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อกลาง</label>
                                                        <input type="text" class="form-control" placeholder="(ถ้ามี)">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นามสกุลภาษาไทย</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>เลขประจำตัวประชาชน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชนิดของบัตร</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>อายุ</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ความสัมพันธ์ผู้ปกครอง</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>การประกอบอาชีพ</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รายได้ต่อเดือน (บาท)</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>บ้านเลขที่</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อหมู่บ้าน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ซอย</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ถนน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ตำบล/แขวง</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>อำเภอ/เขต</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จังหวัด</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รหัสไปรษณีย์</label>
                                                        <input type="text" class="form-control" placeholder="">
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
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>สถานะผู้ปกครองนักเรียน</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>จำนวนพี่น้อง ร่วมสายโลหิต</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>จำนวนพี่ชาย</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>จำนวนน้องชาย</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>จำนวนพี่สาว</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>จำนวนน้องสาว</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนเป็นบุตรคนที่</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จำนวนพี่น้องที่ศึกษาอยู่ (ไม่นับรวมนักเรียน)</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จำนวนพี่น้องที่ประกอบอาชีพแล้ว</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จำนวนพี่น้องที่อยู่ในความอุปการะของครอบครัว</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-9">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนมีหน้าที่รับผิดชอบภายในบ้าน นอกเหนือจากการเรียน</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนนำเงินมาโรงเรียนวันละ (บาท)</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>รายได้ของครอบครัวต่อเดือน (รายได้รวมกัน)</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>ผู้ออกค่าใช้จ่ายให้นักเรียน (ชื่อ-นามสกุล)</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>เกี่ยวข้องเป็น</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>การหารายได้ด้วยตนเอง</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>โปรดระบุ (หารายได้จากอะไร)</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>รายได้เฉลี่ยวันละ (บาท)</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer" align="center">

                                            <p style="text-align:center">นักเรียนโปรดตรวจสอบข้อมูลพื้นฐานนักเรียนที่กรอกให้ถูกต้อง<br>
                                                เมื่อนักเรียนมั่นใจแล้วให้กดปุ่ม &nbsp;<b>&quot;ยืนยัน&quot;</b>&nbsp; หากต้องการกลับไปหน้าก่อนให้กดปุ่ม &nbsp;<b>&quot;ย้อนกลับ&quot;</b>&nbsp; ด้านล่าง</p>
                                            <button type="button" class="btn btn-danger" wire:click="backstep()"><strong>ย้อนกลับ</strong></button>
                                            <button type="submit" class="btn btn-success"><strong>ยืนยัน</strong></button>

                                        </div><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                </form>

            </div>

        </div>
        <!-- สิ้นสุดเนื้อหา -->
        <!-- เริ่ม Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul class="nav">

                        <li class="nav-item">
                            <a class="nav-link" target="_blank">&copy; 2021 Phrao wittayakom School. | พัฒนาโดย PWK40 & CSMJU23</a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright ml-auto">
                    Theme by <a href="https://www.themekita.com" target="_blank">ThemeKita</a>
                </div>
            </div>
        </footer>
    </div>
    <!-- สิ้นสุด Footter -->
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


    <!-- Chart JS -->
    <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Sweet Alert -->
    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis JS -->
    <script src="../assets/js/atlantis.min.js"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="../assets/js/setting-demo.js"></script>
    <script src="../assets/js/demo.js"></script>

    <!-- Date time picker -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatables').DataTable({
                "pageLength": 50,
                "language": {
                    "search": "ค้นหาข้อมูล :"
                },
                "ordering": false
            });
        });
    </script>

    <script>
        Circles.create({
            id: 'circles-1',
            radius: 45,
            value: 60,
            maxValue: 100,
            width: 7,
            text: 5,
            colors: ['#f1f1f1', '#FF9E27'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'circles-2',
            radius: 45,
            value: 70,
            maxValue: 100,
            width: 7,
            text: 36,
            colors: ['#f1f1f1', '#2BB930'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'circles-3',
            radius: 45,
            value: 40,
            maxValue: 100,
            width: 7,
            text: 12,
            colors: ['#f1f1f1', '#F25961'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

        var mytotalIncomeChart = new Chart(totalIncomeChart, {
            type: 'bar',
            data: {
                labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
                datasets: [{
                    label: "Total Income",
                    backgroundColor: '#ff9e27',
                    borderColor: 'rgb(23, 125, 255)',
                    data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            display: false //this will remove only the label
                        },
                        gridLines: {
                            drawBorder: false,
                            display: false
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            drawBorder: false,
                            display: false
                        }
                    }]
                },
            }
        });

        $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: '#ffa534',
            fillColor: 'rgba(255, 165, 52, .14)'
        });
    </script>
</body>

</html>

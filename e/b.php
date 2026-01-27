<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ฟอร์มสมัครงาน - ธิดารัตน์ บุญสุภา (ฟิล์ม)</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    .container {
        max-width: 900px;
        margin-top: 30px;
        padding: 30px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
</style>
</head>
<body>

<div class="container">
    <header class="text-center mb-4">
        <h1>📄 ฟอร์มสมัครงาน -- ธิดารัตน์ บุญสุภา (ฟิล์ม)</h1>
        <p class="lead">บริษัท ธิดารัตน์ บุญสุภา (ฟิล์ม)</p>
    </header>

        <form method="post" action="">
        <h3 class="mt-4 mb-3 text-primary">ส่วนที่ 1: ข้อมูลตำแหน่งงานที่ต้องการสมัคร</h3>
        
        <table class="table table-bordered table-striped mb-4">
            <thead>
                <tr>
                    <th>ตำแหน่ง</th>
                    <th>คำอธิบายโดยย่อ</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>นักพัฒนาซอฟต์แวร์</td><td>ออกแบบและพัฒนาแอปพลิเคชัน</td></tr>
                <tr><td>นักการตลาดดิจิทัล</td><td>วางแผนและดำเนินกิจกรรมการตลาดออนไลน์</td></tr>
                <tr><td>นักวิเคราะห์ข้อมูล</td><td>รวบรวม วิเคราะห์ และตีความข้อมูล</td></tr>
            </tbody>
        </table>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="position" class="form-label">ตำแหน่งที่ต้องการสมัคร <span class="text-danger">*</span></label>
                <select class="form-select" id="position" name="position" required>
                    <option selected disabled value="">เลือกตำแหน่ง...</option>
                    <option value="นักพัฒนาซอฟต์แวร์">นักพัฒนาซอฟต์แวร์ (Software Developer)</option>
                    <option value="นักการตลาดดิจิทัล">นักการตลาดดิจิทัล (Digital Marketing Specialist)</option>
                    <option value="นักวิเคราะห์ข้อมูล">นักวิเคราะห์ข้อมูล (Data Analyst)</option>
                </select>
                <div class="invalid-feedback">กรุณาเลือกตำแหน่งที่ต้องการสมัคร</div>
            </div>
        </div>

        <h3 class="mt-4 mb-3 text-primary">ส่วนที่ 2: ข้อมูลส่วนตัว</h3>

        <div class="row mb-3">
            <div class="col-md-2">
                <label for="prefix" class="form-label">คำนำหน้าชื่อ <span class="text-danger">*</span></label>
                <select class="form-select" id="prefix" name="prefix" required>
                    <option selected disabled value="">เลือก...</option>
                    <option value="นาย">นาย</option>
                    <option value="นางสาว">นางสาว</option>
                    <option value="นาง">นาง</option>
                </select>
                <div class="invalid-feedback">กรุณาเลือกคำนำหน้าชื่อ</div>
            </div>
            <div class="col-md-5">
                <label for="firstName" class="form-label">ชื่อ <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="ชื่อ" required>
                <div class="invalid-feedback">กรุณากรอกชื่อ</div>
            </div>
            <div class="col-md-5">
                <label for="lastName" class="form-label">นามสกุล <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="นามสกุล" required>
                <div class="invalid-feedback">กรุณากรอกนามสกุล</div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label for="dob" class="form-label">วันเดือนปีเกิด <span class="text-danger">*</span></label>
                <input type="date" class="form-control" id="dob" name="dob" required>
                <div class="invalid-feedback">กรุณากรอกวันเดือนปีเกิด</div>
            </div>
        </div>

        <h3 class="mt-4 mb-3 text-primary">ส่วนที่ 3: การศึกษาและความสามารถพิเศษ</h3>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="education" class="form-label">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                <select class="form-select" id="education" name="education" required>
                    <option selected disabled value="">เลือกระดับการศึกษา...</option>
                    <option value="ปริญญาตรี">ปริญญาตรี</option>
                    <option value="ปริญญาโท">ปริญญาโท</option>
                    <option value="ปริญญาเอก">ปริญญาเอก</option>
                    <option value="อื่น ๆ">อื่น ๆ</option>
                </select>
                <div class="invalid-feedback">กรุณาเลือกระดับการศึกษาสูงสุด</div>
            </div>
        </div>

        <div class="mb-3">
            <label for="specialSkills" class="form-label">ความสามารถพิเศษ</label>
            <textarea class="form-control" id="specialSkills" name="specialSkills" rows="3" placeholder="เช่น ทักษะภาษาต่างประเทศ, ทักษะด้านโปรแกรมเฉพาะทาง"></textarea>
        </div>

        <h3 class="mt-4 mb-3 text-primary">ส่วนที่ 4: ประสบการณ์ทำงาน</h3>

        <div class="mb-3">
            <label for="workExperience" class="form-label">ประสบการณ์ทำงาน (โดยสรุป)</label>
            <textarea class="form-control" id="workExperience" name="workExperience" rows="5" placeholder="ระบุชื่อบริษัท ตำแหน่งงาน และระยะเวลาทำงาน"></textarea>
        </div>

        <div class="mb-4 form-check">
            <input type="checkbox" class="form-check-input" id="declaration" required>
            <label class="form-check-label" for="declaration">ข้าพเจ้าขอรับรองว่าข้อมูลข้างต้นเป็นความจริงทุกประการ</label>
            <div class="invalid-feedback">กรุณายืนยันการรับรองข้อมูล</div>
        </div>

        <button class="btn btn-primary btn-lg me-2" type="submit" name="Submit">ส่งใบสมัคร</button>
        <button class="btn btn-secondary btn-lg" type="reset">ยกเลิก</button>
    </form>
    
    <div class="result-display p-4 border rounded bg-light">
            <h3 class="mb-3">ผลลัพธ์การสมัคร (PHP)</h3>
            <?php
            if (isset($_POST['Submit'])){
                $position = $_POST['position'];
                $prefix = $_POST['prefix'];
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $dob = $_POST['dob'];
				$education = $_POST['education'];
				$specialSkills = $_POST['specialSkills'];
				$workExperience = $_POST['workExperience'];
				
				include_once("connectdb.php");				
				$sql = "INSERT INTO application (a_id, a_position, a_prefix, a_firstName, a_lastName, a_dob, a_education, a_specialSkills, a_workExperience) VALUES (null, '{$position}','{$prefix}','{$firstName}','{$lastName}','{$dob}','{$education}','{$specialSkills}','{$workExperience}');";
				mysqli_query($conn,$sql) or die ("insert ไม่ได้");
				
				echo "<script>";
				echo "alert('เพิ่มข้อมูลสำเร็จ');";
				echo "</script>";
				
			}
			?>
                
        </div>
    
    <footer class="text-center mt-5 pt-3 border-top text-muted">
        <p>PHP Form & Bootstrap 5.3 Design</p>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    // Script เพื่อเปิดใช้งาน Bootstrap validation (needs-validation)
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
</body>
</html>
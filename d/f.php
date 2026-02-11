<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>ฟอร์มสมัครงาน - ธิดารัตน์ บุญสุภา (ฟิล์ม)</title>

<?php
// PHP: f.php - รับข้อมูลจากแบบฟอร์มและแสดงผล

// ตรวจสอบว่ามีการส่งข้อมูลมาหรือไม่
//if ($_SERVER["REQUEST_METHOD"] != "POST") {
    // หากไม่มีการส่งข้อมูลมาโดยตรง ให้เปลี่ยนเส้นทางกลับไปหน้าฟอร์ม (แนะนำ)
   // header("Location: application_form.php"); 
   // exit;
}

// 1. รับค่าจากฟอร์ม (ใช้ name attribute) อย่างปลอดภัย
$position = isset($_POST['position']) ? htmlspecialchars(($_POST['position']) : 'ตำแหน่งที่ต้องการสมัคร';
$prefix = isset($_POST['prefix']) ? htmlspecialchars($_POST['prefix']) : 'คำนำหน้าชื่อ';
$firstName = isset($_POST['firstName']) ? htmlspecialchars($_POST['firstName']) : 'ไม่ได้ระบุ';
$lastName = isset($_POST['lastName']) ? htmlspecialchars($_POST['lastName']) : 'ไม่ได้ระบุ';
$dob = isset($_POST['dob']) ? htmlspecialchars($_POST['dob']) : 'ไม่ได้ระบุ';
$education = isset($_POST['education']) ? htmlspecialchars($_POST['education']) : 'ไม่ได้ระบุ';
$specialSkills = isset($_POST['specialSkills']) ? htmlspecialchars($_POST['specialSkills']) : 'ไม่ได้ระบุ';
$workExperience = isset($_POST['workExperience']) ? htmlspecialchars($_POST['workExperience']) : 'ไม่ได้ระบุ';

// *** โค้ดสำหรับบันทึกข้อมูลลงฐานข้อมูล MySQL จะอยู่ตรงส่วนนี้ ***
// ...
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สรุปผลการสมัครงาน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container {
            max-width: 800px;
            margin-top: 50px;
            padding: 40px;
            background: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }
        .summary-box {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <header class="text-center mb-5">
        <h2 class="text-success">🎉 ส่งใบสมัครสำเร็จ!</h2>
        <p class="lead">บริษัท ธิดารัตน์ บุญสุภา (ฟิล์ม) ได้รับข้อมูลของคุณแล้ว</p>
    </header>

    <div class="summary-box">
        <h4 class="mb-4 text-primary">สรุปข้อมูลใบสมัคร</h4>
        <table class="table table-borderless table-sm">
            <tr>
                <td style="width: 30%;"><strong>ตำแหน่งที่สมัคร:</strong></td>
                <td><?php echo $position; ?></td>
            </tr>
            <tr>
                <td><strong>ชื่อ-สกุล:</strong></td>
                <td><?php echo $prefix . ' ' . $firstName . ' ' . $lastName; ?></td>
            </tr>
            <tr>
                <td><strong>วันเดือนปีเกิด:</strong></td>
                <td><?php echo $dob; ?></td>
            </tr>
            <tr>
                <td><strong>ระดับการศึกษา:</strong></td>
                <td><?php echo $education; ?></td>
            </tr>
        </table>
    </div>

    <div class="summary-box">
        <h4 class="mb-3 text-secondary">รายละเอียดเพิ่มเติม</h4>
        <p><strong>ความสามารถพิเศษ:</strong></p>
        <p class="border p-2 bg-light rounded"><?php echo nl2br($specialSkills); ?></p>
        
        <p><strong>ประสบการณ์ทำงาน:</strong></p>
        <p class="border p-2 bg-light rounded"><?php echo nl2br($workExperience); ?></p>
    </div>

    <div class="alert alert-info text-center mt-4">
        <p class="mb-0">ฝ่ายบุคคลจะทำการติดต่อกลับภายใน 3 วันทำการ</p>
    </div>
    
    <div class="text-center mt-4">
        <a href="application_form.php" class="btn btn-outline-primary">กลับสู่หน้าหลัก</a>
    </div>

</div>

</body>
</html>

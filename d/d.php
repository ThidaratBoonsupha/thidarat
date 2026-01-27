<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>ฟอร์มสมัครสมาชิก - ธิดารัตน์ บุญสุภา (ฟิล์ม)</title>

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="my-2">ฟอร์มสมัครสมาชิก</h3>
                    <small> ธิดารัตน์ บุญสุภา (ฟิล์ม) -- ChatGPT</small>
                </div>

                <div class="card-body">

                    <form method="post" action="">

                        <div class="mb-3">
                            <label class="form-label">ชื่อ-สกุล *</label>
                            <input type="text" name="fullname" class="form-control" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">เบอร์โทร *</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">ความสูง (ซม.) *</label>
                            <input type="number" name="height" step="5" min="100" max="220" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">สีที่ชอบ</label>
                            <input type="color" name="color" class="form-control form-control-color">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">สาขาวิชา</label>
                            <select name="major" class="form-select">
                                <option value="การบัญชี">การบัญชี</option>
                                <option value="การจัดการ">การจัดการ</option>
                                <option value="การตลาด">การตลาด</option>
                                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <button type="submit" name="Submit" class="btn btn-success">สมัครสมาชิก</button>
                            <button type="reset" class="btn btn-secondary">ล้างข้อมูล</button>
                            <button type="button" onClick="window.location='https://www.msu.ac.th';" class="btn btn-info text-white">ไป MSU</button>
                            <button type="button" onClick="window.print();" class="btn btn-dark">พิมพ์</button>
                        </div>

                    </form>
                </div>
            </div>

            <div class="mt-4">

<?php
if (isset($_POST['Submit'])){
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $height = $_POST['height'];
    $color = $_POST['color'];
    $major = $_POST['major'];

    echo "<div class='alert alert-success mt-3'>";
    echo "<h5>ผลการบันทึกข้อมูล</h5>";
    echo "ชื่อ-สกุล: ".$fullname."<br>";
    echo "เบอร์โทร: ".$phone."<br>";
    echo "ความสูง: ".$height." ซม.<br>";
    echo "สีที่ชอบ: ".$color." <div style='width:50px; height:20px; background:{$color};' class='border'></div>";
    echo "สาขาวิชา: ".$major."<br>";
    echo "</div>";
}
?>

            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

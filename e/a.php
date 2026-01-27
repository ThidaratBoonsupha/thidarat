<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ธิดารัตน์ บุญสุภา (ฟิล์ม)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">ฟอร์มสมัครสมาชิก -- ธิดารัตน์ บุญสุภา (ฟิล์ม) -- Gemini</h1>

        <form method="post" action="" class="p-4 border rounded shadow-sm">

            <div class="mb-3">
                <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                <input type="text" name="fullname" id="fullname" class="form-control" required autofocus placeholder="กรุณาใส่ชื่อ-สกุล">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                <input type="tel" name="phone" id="phone" class="form-control" required placeholder="0XX-XXX-XXXX">
            </div>

            <div class="mb-3">
                <label for="height" class="form-label">ความสูง (ซม.) <span class="text-danger">*</span></label>
                <div class="input-group">
                    <input type="number" name="height" id="height" step="5" min="100" max="220" class="form-control" required placeholder="100 - 220">
                    <span class="input-group-text">ซม.</span>
                </div>
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">สีที่ชอบ</label>
                <input type="color" name="color" id="color" class="form-control form-control-color" title="เลือกสีที่ชอบ">
            </div>

            <div class="mb-3">
                <label for="major" class="form-label">สาขาวิชา</label>
                <select name="major" id="major" class="form-select">
                    <option value="การบัญชี">การบัญชี</option>
                    <option value="การจัดการ">การจัดการ</option>
                    <option value="การตลาด">การตลาด</option>
                    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                </select>
            </div>

            <div class="d-grid gap-2 d-md-block mt-4">
                <button type="submit" name="Submit" class="btn btn-primary">
                    <i class="bi bi-person-plus-fill"></i> สมัครสมาชิก
                </button>
                <button type="reset" class="btn btn-secondary">
                    <i class="bi bi-x-circle-fill"></i> Reset
                </button>
                <button type="button" onClick="window.location='https://www.msu.ac.th';" class="btn btn-info text-white">
                    Go to MSU
                </button>
                <button type="button" onClick="window.print();" class="btn btn-warning">
                    <i class="bi bi-printer-fill"></i> พิมพ์
                </button>
            </div>

        </form>
        <hr class="my-5">

        <div class="result-display p-4 border rounded bg-light">
            <h3 class="mb-3">ผลลัพธ์การสมัคร (PHP)</h3>
            <?php
            if (isset($_POST['Submit'])){
                $fullname = $_POST['fullname'];
                $phone = $_POST['phone'];
                $height = $_POST['height'];
                $color = $_POST['color'];
                $major = $_POST['major'];
				
				include_once("connectdb.php");				
				$sql = "INSERT INTO register (r_id, r_name, r_phone, r_height, r_color, r_major) VALUES (null, '{$fullname}','{$phone}','{$height}','{$color}','{$major}');";
				mysqli_query($conn,$sql) or die ("insert ไม่ได้");
				
				echo "<script>";
				echo "alert('เพิ่มข้อมูลสำเร็จ');";
				echo "</script>";
				
			}
			?>
                
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</body>
</html>
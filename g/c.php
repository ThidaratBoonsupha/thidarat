<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ธิดารัตน์ บุญสุภา (ฟิล์ม) - Supermarket Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
        .table-container { background: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .img-product { object-fit: cover; border-radius: 5px; border: 1px solid #ddd; }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="table-container">
            <h1 class="text-primary mb-4 text-center">🛒 ธิดารัตน์ บุญสุภา (ฟิล์ม)</h1>
            
            <div class="row mb-4 justify-content-center">
                <div class="col-md-6">
                    <form action="" method="GET" class="d-flex">
                        <input class="form-control me-2" type="search" name="kw" 
                               placeholder="ค้นหาชื่อสินค้า..." 
                               value="<?php echo isset($_GET['kw']) ? $_GET['kw'] : ''; ?>">
                        <button class="btn btn-outline-primary" type="submit">ค้นหา</button>
                        <a href="index.php" class="btn btn-outline-secondary ms-1">ล้าง</a>
                    </form>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-hover table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center">Order ID</th>
                            <th>สินค้า</th>
                            <th>ประเภทสินค้า</th>
                            <th>วันที่</th>
                            <th>ประเทศ</th>
                            <th class="text-end">จำนวนเงิน</th>
                            <th class="text-center">รูป</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include_once("connectdb.php");
                            
                            // รับค่าจากฟอร์มค้นหา
                            $kw = isset($_GET['kw']) ? $_GET['kw'] : '';
                            
                            // ปรับ SQL ให้รองรับการค้นหา
                            if ($kw != "") {
                                $sql = "SELECT * FROM `popsupermarket` 
                                        WHERE p_product_name LIKE '%$kw%' 
                                        OR p_category LIKE '%$kw%' 
                                        ORDER BY p_order_id DESC";
                            } else {
                                $sql = "SELECT * FROM `popsupermarket` ORDER BY p_order_id DESC";
                            }
                            
                            $rs = mysqli_query($conn, $sql);
                            $total = 0;

                            if (mysqli_num_rows($rs) > 0) {
                                while ($data = mysqli_fetch_array($rs)) {
                                    $total += $data['p_amount'];
                        ?>
                        <tr>
                            <td class="text-center fw-bold"><?php echo $data['p_order_id']; ?></td>
                            <td><?php echo $data['p_product_name']; ?></td>
                            <td><span class="badge bg-info text-dark"><?php echo $data['p_category']; ?></span></td>
                            <td><?php echo date('d/m/Y', strtotime($data['p_date'])); ?></td>
                            <td><?php echo $data['p_country']; ?></td>
                            <td class="text-end text-primary fw-bold"><?php echo number_format($data['p_amount'], 2); ?></td>
                            <td class="text-center">
                                <img src="<?php echo $data['p_product_name']; ?>.jpg" 
                                     alt="product" 
                                     class="img-product" 
                                     width="50" height="50"
                                    >
                            </td>
                        </tr>
                        <?php 
                                } 
                            } else {
                                echo "<tr><td colspan='7' class='text-center py-5 text-danger'>ไม่พบข้อมูลที่ตรงกับคำค้นหา: <b>$kw</b></td></tr>";
                            }
                        ?>
                    </tbody>
                    <tfoot class="table-secondary">
                        <tr>
                            <td colspan="5" class="text-end fw-bold">รวมยอดเงินทั้งสิ้น:</td>
                            <td class="text-end fw-bold text-danger" style="font-size: 1.2rem;">
                                <?php echo number_format($total, 2); ?>
                            </td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
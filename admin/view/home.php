<?php
$html_bill_new = show_bill_new($ds_bill_new);
$html_user_new = show_user_new($ds_user_new);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Định dạng cho thẻ section */
section.row {
    margin: 20px 0;
}

/* Định dạng cho thẻ card */
.card {
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s;
}

.card:hover {
    transform: scale(1.05);
}

/* Định dạng cho thẻ widget-chart */
.widget-chart {
    padding: 20px;
    text-align: center;
}

/* Định dạng cho tiêu đề widget-subheading */
.widget-subheading {
    margin-bottom: 10px;
    color: #ffc107; /* Màu vàng */
    font-size: 1.25rem;
    font-weight: bold;
}

/* Định dạng cho số lượng widget-numbers */
.widget-numbers {
    font-size: 2.5rem;
    color: #343a40; /* Màu đen đậm */
    font-weight: bold;
}

/* Định dạng responsive cho các cột */
.col-sm-12 {
    width: 100%;
}

.col-md-6 {
    width: 50%;
}

.col-xl-3 {
    width: 25%;
}

@media (max-width: 768px) {
    .col-md-6 {
        width: 100%;
    }
}

@media (max-width: 1200px) {
    .col-xl-3 {
        width: 50%;
    }
}

    </style>
</head>
<body>

      <section class="row">
                    <div class="col-sm-12 col-md-6 col xl-6">
                        <div class="card chart">
                            <h4>Tổng doanh thu:  <span><?php $tongtien = get_tongtien_dhtc();
echo number_format($tongtien['tongtien_giaohangthanhcong']) . ' VNĐ';?></span></h4>
                            <table class="revenue table table-hover">
                                <thead>
                                    <th>STT</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Doanh thu</th>
                                </thead>
                                <tbody>
                                    <?php
$i = 1;
foreach ($ds_bill as $bill) {
    echo ' <tr>
                        <td>' . $i++ . '</td>
                        <td>' . $bill['ma_donhang'] . '</td>
                        <td>' . number_format($bill['tong_thanhtoan']) . ' VNĐ</td>
            </tr>';
}
?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <a href="index.php?pg=order" style="text-decoration: none; color: #616161; transition: ease-in-out 0.2s all;">
                            <div class="card chart">
                                <h4>Đơn hàng mới</h4>
                                <table class="revenue table table-hover">
                                    <thead>
                                        <th>Mã đơn hàng</th>
                                        <th>Trạng thái</th>
                                    </thead>
                                    <tbody>
                                        <?=$html_bill_new?>
                                    </tbody>
                                </table>
                            </div>
                        </a>
                    </div>


                </section>
            </div>
        </div>
    </div>



</body>
</html>




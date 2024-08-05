<?php
$products = getBestSellingProducts();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê</title>
    <link rel="stylesheet" href="path/to/your/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div class="main-content">
    <h3 class="title-page">Thống kê</h3>
    <section class="row">
        <div class="col-sm-12 col-md-6 col-xl-6">
            <div class="card chart">
                <h4 class="your-custom-class">Sản phẩm bán chạy nhất</h4>
                <!-- Thêm canvas để vẽ biểu đồ -->
                <canvas id="productChart" width="400" height="400"></canvas>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-6">
            <div class="card">
                <h4 class="your-custom-class">Dữ liệu chi tiết</h4>
               
                <table id="dataTable" class="table">
                    <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng bán</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($product['ten_sp']); ?></td>
                                <td><?php echo htmlspecialchars($product['total_sold']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('productChart').getContext('2d');
    const data = {
        labels: <?php echo json_encode(array_column($products, 'ten_sp')); ?>,
        datasets: [{
            label: 'Số lượng bán',
            data: <?php echo json_encode(array_column($products, 'total_sold')); ?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    };

    const config = {
        type: 'pie',  // Chuyển đổi loại biểu đồ thành 'pie'
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw;
                        }
                    }
                }
            }
        }
    };

    new Chart(ctx, config);
});
</script>
</body>
</html>

<?php
$a = 3;
for ($i = 1; $i <= 10; $i++) {
    echo $a . " x " . $i . " = " . ($a * $i) . "<br>";
}
?>

<br>
<!-- Trong đoạn mã trên, chúng ta sử dụng một vòng lặp for để in bảng cửu chương của $a.
Vòng lặp for chạy từ 1 đến 10, với mỗi vòng lặp chúng ta tính toán $a * $i và in ra màn hình kết quả. 
Trong đoạn mã trên, chúng ta khai báo biến $a với giá trị là 10, đại diện cho số mà bảng cửu chương cần được tính toán.

Sau đó, chúng ta sử dụng một vòng lặp for để in bảng cửu chương của $a. Vòng lặp for bắt đầu từ giá trị 1, chạy cho đến khi $i lớn hơn hoặc bằng 10, với mỗi vòng lặp, $i tăng lên 1.

Trong vòng lặp, chúng ta tính toán $a * $i để tính toán giá trị của bảng cửu chương, và sử dụng hàm echo để in ra màn hình kết quả. Ký tự \n được sử dụng để xuống dòng, để giữ cho kết quả trực quan hơn.

Cuối cùng, chương trình sẽ in ra màn hình bảng cửu chương của số 10.-->
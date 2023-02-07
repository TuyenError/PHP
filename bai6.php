<?php
$d = 7;
$r = 4;

for ($i = 0; $i < $r; $i++) {
    for ($j = 0; $j < $d; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>

<!-- <br>
Trong đoạn mã trên, ta sử dụng hai vòng lặp for để vẽ hình chữ nhật.

Vòng lặp đầu tiên for ($i = 0; $i < $r; $i++) dùng để vẽ chiều dọc của hình chữ nhật, giá trị $r là số dòng cần vẽ.
Vòng lặp thứ hai for ($j = 0; $j < $d; $j++) dùng để vẽ chiều ngang của hình chữ nhật, giá trị $d là số ký tự "*" trên mỗi dòng.
Mỗi lần qua vòng lặp thứ hai, chúng ta sẽ in ra một ký tự "*". Khi kết thúc vòng lặp thứ hai, chúng ta sẽ in ra một ký tự xuống dòng \n để vẽ xong một dòng của hình chữ nhật.

Khi kết thúc vòng lặp đầu tiên, chúng ta sẽ vẽ xong toàn bộ hình chữ nhật. -->
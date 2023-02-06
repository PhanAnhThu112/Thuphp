<!-- Tính điểm trung bình -->
<!-- <?php
    $tensv = $_POST["tensv"];
    $diemtb = $_POST["dtb"];
    switch ($diemtb){
        case (9 < $diemtb and $diemtb <= 10):
            echo "$tensv là học sinh xuất sắc!";
            break;
        case (8 < $diemtb and $diemtb <= 9):
            echo "$tensv là học sinh giỏi!";
            break;
        case (7 < $diemtb and $diemtb <= 8):
            echo "$tensv là học sinh khá!";
            break;
        case (5 < $diemtb and $diemtb <= 7):
            echo "$tensv là học sinh trung bình!";
            break;
        case (0 < $diemtb and $diemtb <= 5):
            echo "$tensv là học sinh yếu kém!";
            break;
    }
    ?> -->

<!-- Tìm tháng đó có bao nhiêu ngày -->
 <?php
    $month = $_POST["month"];
    $year = $_POST["year"];
    switch ($month) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            echo "Tháng $month năm $year có 31 ngày";
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            echo "Tháng $month năm $year có 30 ngày";
            break;
    case 2:
    switch($year){
        case ($year % 400 == 0 or $year % 4 == 0):
            echo "Tháng $month năm $year là năm nhuận nên có 29 ngày";
            break;
        case ($year % 400 != 0 or $year % 4 != 0):
            echo "Tháng $month năm $year là năm không nhuận nên có 28 ngày";
            break;
    }
    default:
        $days = 0;
    }
?>
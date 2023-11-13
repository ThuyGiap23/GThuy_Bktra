
    <!--
    Câu 1: 5
    Câu 2: D
    Câu 3: D
    Câu 4: A
    Câu 5: A -->


<!-- Bai 1 -->
<?php
function isPrime($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
$number = 7;
if (isPrime($number)) {
    echo $number . ' là số nguyên tố.' . "<br>";
} else {
    echo $number . ' không là số nguyên tố.' . "<br>";
}
echo "Danh sách số nguyên tố từ 1 đến 100 là: ";
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
?>


<!-- Bai 2 -->

<?php
$products = array(
    array("name" => "Bánh gạo", "price" => 50000, "quantity" => 5),
    array("name" => "Kẹo dừa", "price" => 25000, "quantity" => 10),
    array("name" => "Bánh đa", "price" => 30500, "quantity" => 15)
);

echo "Thông tin các sản phẩm: <br>";
foreach ($products as $product) {
    echo "Name: " . $product["name"] . ", Price: $" . $product["price"] . ", Quantity: " . $product["quantity"] . "<br>";
}

function totalValue($products)
{
    $total = 0;
    foreach ($products as $product) {
        $total += $product["price"] * $product["quantity"];
    }
    return $total;
}

$total = totalValue($products); 
echo "Tổng giá trị của tất cả sản phẩm: " . $total; 
?>


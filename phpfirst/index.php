<?php
//cau1: Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
echo "Câu 1: ";
function checkEvenNumber($number) {
    if ($number % 2 == 0) {
        echo "Số $number là số chẵn.";
    } else {
        echo "\n Số $number không phải là số chẵn.";
    }
}
checkEvenNumber(6);

echo "<br> Câu 2: "; 
//cau2: Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function calculateSum($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 5;
$sum = calculateSum($n);
echo "Tổng của các số từ 1 đến $n là: $sum";

echo "<br> Câu 3: ";
//cau3: Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
function printMultiplicationTable() {
    for ($i = 1; $i <= 10; $i++) {
        echo "Bảng cửu chương $i:<br>";
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo "$i x $j = $result<br>";
        }
        echo "<br>";
    }
}
printMultiplicationTable();


echo "Câu 4: ";
//cau4: Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
$string = "Dai hoc Thuong Mai";
$word = "hoc";
function checkWordInString($string, $word) {
  $stringLength = 0;
  $wordLength = 0;

  // Tính độ dài của chuỗi và từ cụ thể
  while (isset($string[$stringLength])) {
    $stringLength++;
  }
  while (isset($word[$wordLength])) {
    $wordLength++;
  }
  // Duyệt qua từng ký tự trong chuỗi
  for ($i = 0; $i <= $stringLength - $wordLength; $i++) {
    $match = true;

    // Kiểm tra từng ký tự trong từ cụ thể
    for ($j = 0; $j < $wordLength; $j++) {
      if ($string[$i + $j] !== $word[$j]) {
        $match = false;
        break;
      }
    }
    if ($match) {
      return true;
    }
  }
  return false;
}
if (checkWordInString($string, $word)) {
  echo "Chuỗi chứa từ '$word'.";
} else {
  echo "Chuỗi không chứa từ '$word'.";
}



echo "<br> Câu 5: ";
// cau5: Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
$array = [55, 23, 88, 26, 10];
function findMinMaxValue($array) {
    $min = $array[0];
    $max = $array[0];
  
    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value;
        }
        if ($value > $max) {
            $max = $value;
        }
    }
  
    echo "Min: $min. Max: $max";
}
findMinMaxValue($array);



// cau6: Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
echo "<br> Câu 6: ";
function sortArrayAscending($arr) {
  $n = count($arr);

  for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
      if ($arr[$j] > $arr[$j + 1]) {
        // Hoán đổi hai phần tử
        $temp = $arr[$j];
        $arr[$j] = $arr[$j + 1];
        $arr[$j + 1] = $temp;
      }
    }
  }
  return $arr;
}
$array = [25, 30, 8, 2, 12, 4];
$sortedArray = sortArrayAscending($array);
echo "Mảng đã sắp xếp: ";
foreach ($sortedArray as $value) {
  echo $value . " ";
}


//cau7: Viết chương trình PHP để tính giai thừa của một số nguyên dương.
echo "<br> Câu 7: ";
$number = 5;
function calculateFactorial($number) {
    if ($number < 0) {
        return "Không thể tính giai thừa cho số âm.";
    } else if ($number == 0) {
        return "Giai thừa của 0 là 1.";
    } else {
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        return "Giai thừa của $number là: $factorial";
    }
}
echo calculateFactorial($number);


//cau8: Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
echo "<br> Câu 8: ";
$start = 1;
$end = 20;
function isPrimeNumber($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
function findPrimeNumbers($start, $end) {
    echo "Các số nguyên tố trong khoảng từ $start đến $end là: ";
    for ($i = $start; $i <= $end; $i++) {
        if (isPrimeNumber($i)) {
            echo $i . " ";
        }
    }
}
$primeNumbers = findPrimeNumbers($start, $end);


//cau9: Viết chương trình PHP để tính tổng của các số trong một mảng.
echo "<br> Câu 9: ";
$array = [55, 23, 88, 26, 10];
function calculateSumInArray($array) {
    $sum = 0;
    foreach ($array as $number) {
        $sum += $number;
    }
    return $sum;
}
$sum = calculateSumInArray($array);
echo "Tổng của các số trong mảng là: $sum";


echo "<br> Câu 10: ";
//cau10: Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
$start = 0;
$end = 100;
function fibonacci($n)
{
    $fibonacciArray = array(0, 1); // Mảng ban đầu chứa 2 số Fibonacci đầu tiên

    for ($i = 2; $i < $n; $i++) {
        $fibonacciArray[$i] = $fibonacciArray[$i - 1] + $fibonacciArray[$i - 2];
    }

    return $fibonacciArray;
}
function printFibonacciInRange($start, $end)
{
    $fibonacciArray = fibonacci($end); // Tính tất cả các số Fibonacci cho đến số Fibonacci thứ $end

    foreach ($fibonacciArray as $fibonacci) {
        if ($fibonacci >= $start && $fibonacci <= $end) {
            echo $fibonacci . " ";
        }
    }
}
echo "Các số Fibonacci trong khoảng từ $start đến $end là: ";
printFibonacciInRange($start, $end);


echo "<br> Câu 11: ";
//cau11: Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
//Số Armstrong là số có giá trị bằng tổng lập phương của các chữ số trong số đó. 
//Ví dụ: 153 là số Armstrong bởi vì 1^3 + 5^3 + 3^3 = 153.
$number = 153; 
function ArmstrongNumber($number) {
    $sum = 0;
    $temp = $number;
    $digits = 0;
    while ($temp != 0) {
        $digits++;
        $temp = (int)($temp / 10);
    }
    $temp = $number;
    while ($temp != 0) {
        $remainder = $temp % 10;
        $product = 1;
        for ($i = 0; $i < $digits; $i++) {
            $product *= $remainder;
        }
        $sum += $product;
        $temp = (int)($temp / 10);
    }
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}
if (ArmstrongNumber($number)) {
    echo "$number là số Armstrong";
} else {
    echo "$number không là số Armstrong";
}



echo "<br> Câu 12: ";
//cau12: Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
$array = [1, 2, 3, 4, 5]; 
function insertElement2($array, $element, $position) {
    $result = [];
    $length = count($array);
    
    if ($position < 0) {
        $position = 0;
    } elseif ($position > $length) {
        $position = $length;
    }
    
    for ($i = 0; $i < $length + 1; $i++) {
        if ($i == $position) {
            $result[] = $element;
        }
        if ($i < $length) {
            $result[] = $array[$i];
        }
    }
    
    return $result;
}
$element = 10; // Phần tử cần chèn
$position = 2; // Vị trí cần chèn phần tử
$resultArray = insertElement2($array, $element, $position);
print_r($resultArray);



echo "<br> Câu 13: ";
//cau13: Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeDuplicates($arr)
{
    $result = array();

    foreach ($arr as $element) {
        $isDuplicate = false;
        
        foreach ($result as $resElement) {
            if ($element === $resElement) {
                $isDuplicate = true;
                break;
            }
        }
        
        if (!$isDuplicate) {
            $result[] = $element;
        }
    }
    return $result;
}
$array = array(1, 2, 5, 2, 4, 1, 5, 3);
$uniqueArray = removeDuplicates($array);
print_r($uniqueArray);



echo "<br> Câu 14: ";
//cau14: Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
$array = array(1, 2, 3, 4, 5);
$element = 3;
function findElementPosition1($arr, $element)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === $element) {
            return $i;
        }
    }

    return -1; 
}
$position = findElementPosition1($array, $element);
echo "Vị trí của phần tử $element là $position";



echo "<br> Câu 15: ";
//cau15: Viết chương trình PHP để đảo ngược một chuỗi.
$string = "Dai hoc Thuong Mai";
$length = strlen($string);
$reversedString = "";
for ($i = $length - 1; $i >= 0; $i--) {
    $reversedString .= $string[$i];
}
echo $reversedString;


echo "<br> Câu 16: ";
//cau16: Viết chương trình PHP để tính số lượng phần tử trong một mảng.
$originalArray = array(1, 2, 3, 4, 5);
function countElements($array) {
    $count = count($array);
    return $count;
}
$count = countElements($originalArray);
echo "Số lượng phần tử trong mảng là: $count";


echo "<br> Câu 17: ";
//cau17: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
$originalString = "Level";
function isPalindrome($string) {
    $string = strtolower(str_replace(' ', '', $string));
    $reversedString = strrev($string);
    if ($string === $reversedString) {
        return true;
    } else {
        return false;
    }
}
if (isPalindrome($originalString)) {
    echo "Chuỗi là chuỗi Palindrome";
} else {
    echo "Chuỗi  không phải là chuỗi Palindrome";
}


echo "<br> Câu 18: ";
//cau18: Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
$myArray = [1, 2, 3, 4, 2, 1, 3, 1, 4, 5];
$element = 1;
$count = 0;
foreach ($myArray as $value) {
    if ($value == $element) {
        $count++;
    }
}
echo "Số lần xuất hiện của phần tử $element trong mảng là: $count";



echo "<br> Câu 19: ";
//cau19: Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function sortDescending($arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$i] < $arr[$j]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
}
$array = array(26, 2, 8, 12, 1, 90);
$sortedArray = sortDescending($array);
echo "Mảng sau khi sắp xếp theo thứ tự giảm dần: ";
print_r($sortedArray);


echo "<br> Câu 20: ";
//cau20: Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
//Thêm vào đầu mảng
$myArray = [1, 2, 3, 4, 5];
$newElement = 0;
$newArray = [$newElement];
foreach ($myArray as $element) {
    $newArray[] = $element;
}
$myArray = $newArray;
print_r($myArray);


//Thêm vào cuối mảng
$myArray = [1, 2, 3, 4, 5];
$newElement = 6;
$newArray = [];
foreach ($myArray as $element) {
    $newArray[] = $element;
}
$newArray[] = $newElement;
$myArray = $newArray;
print_r($myArray);



echo "<br> Câu 20: ";
//cau21: Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function findSecondLargest1($arr)
{
    $n = count($arr);

    if ($n < 2) {
        return "Không có số lớn thứ hai trong mảng";
    }
    $largest = $arr[0];
    $secondLargest = $arr[0];
    for ($i = 1; $i < $n; $i++) {
        if ($arr[$i] > $largest) {
            $secondLargest = $largest;
            $largest = $arr[$i];
        } elseif ($arr[$i] > $secondLargest && $arr[$i] !== $largest) {
            $secondLargest = $arr[$i];
        }
    }
    if ($largest === $secondLargest) {
        return "Không có số lớn thứ hai trong mảng";
    }
    return $secondLargest;
}
$array = array(5, 2, 8, 12, 1, 9);
$secondLargest = findSecondLargest1($array);
echo "Số lớn thứ hai trong mảng là: " . $secondLargest;


echo "<br> Câu 22: ";
//cau22: Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
$num1 = 24;
$num2 = 36;
function findGCD($a, $b) {
    while ($b != 0) {
        $a %= $b;
        [$a, $b] = [$b, $a];
    }
    return $a;
}
function findLCM($a, $b) {
    return ($a * $b) / findGCD($a, $b);
}
$gcd = findGCD($num1, $num2);
$lcm = findLCM($num1, $num2);
echo "Ước số chung lớn nhất của $num1 và $num2 là: $gcd" . PHP_EOL;
echo "<br>";
echo "Bội số chung nhỏ nhất của $num1 và $num2 là: $lcm" . PHP_EOL;



echo "<br> Câu 23: ";
//cau23: Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
//Một số hoàn hảo là số nguyên dương mà tổng tất cả các ước số thực sự của nó (không tính chính nó) bằng chính nó.
//Ví dụ: 28 có các ước số là 1, 2, 4, 7, 14 và tổng của chúng là 28.
$number = 28;
function isPerfectNumber($number) {
    if ($number <= 0) {
        return false;
    }

    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $number;
}
if (isPerfectNumber($number)) {
    echo "Số $number là số hoàn hảo.";
} else {
    echo "Số $number không phải là số hoàn hảo.";
}


echo "<br> Câu 24: ";
//Cau24: Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
$array = [22, 8, 70, 161, 6, 92];
function findLargestOddNumber($array) {
    $largestOddNumber = null;
    foreach ($array as $number) {
        if ($number % 2 != 0) {
            if ($largestOddNumber === null || $number > $largestOddNumber) {
                $largestOddNumber = $number;
            }
        }
    }
    return $largestOddNumber;
}
$result = findLargestOddNumber($array);
if ($result !== null) {
    echo "Số lẻ lớn nhất trong mảng là: $result";
} else {
    echo "Không có số lẻ nào trong mảng.";
}


echo "<br> Câu 25: ";
//Cau25: Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
$number = 17;

if (isPrime($number)) {
    echo "$number là số nguyên tố";
} else {
    echo "$number không là số nguyên tố";
}

echo "<br> Câu 26: ";
//Cau26: Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
$array = [2, -8, 7, 26, -6, 9];
function findLargestPositiveNumber($array) {
    $largestPositiveNumber = null;

    foreach ($array as $number) {
        if ($number > 0 && ($largestPositiveNumber === null || $number > $largestPositiveNumber)) {
            $largestPositiveNumber = $number;
        }
    }

    return $largestPositiveNumber;
}
$result = findLargestPositiveNumber($array);

if ($result !== null) {
    echo "Số dương lớn nhất trong mảng là: $result";
} else {
    echo "Không có số dương nào trong mảng.";
}


echo "<br> Câu 27: ";
//Cau27: Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
$array = [2, -8, 7, 26, -5, 9];
function findLargestNegativeNumber($array) {
    $largestNegativeNumber = null;
    foreach ($array as $number) {
        if ($number < 0 && ($largestNegativeNumber === null || $number > $largestNegativeNumber)) {
            $largestNegativeNumber = $number;
        }
    }

    return $largestNegativeNumber;
}
$result = findLargestNegativeNumber($array);
if ($result !== null) {
    echo "Số âm lớn nhất trong mảng là: $result";
} else {
    echo "Không có số âm nào trong mảng.";
}

echo "<br> Câu 28: ";
//Cau28: Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
$n = 10; 
function sumOfOddNumbers($n) {
    $sum = 0;
    if ($n % 2 === 0) {
        $n--; 
    }
    for ($i = 1; $i <= $n; $i += 2) {
        $sum += $i;
    }
    return $sum;
}
if ($n < 1) {
    echo "Vui lòng nhập một số nguyên dương lớn hơn 0.";
} else {
    $result = sumOfOddNumbers($n);
    echo "Tổng các số lẻ từ 1 đến $n là: $result";
}

echo "<br> Câu 29: ";
//Cau29: Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
//Số chính phương bằng bình phương của một số nguyên
$start = 1; 
$end = 100; 
function findPerfectSquares($start, $end) {
    $perfectSquares = []; //là một mảng rỗng trong PHP. Mảng này được sử dụng để lưu trữ các số chính phương tìm thấy trong khoảng đã cho.
    for ($i = $start; $i <= $end; $i++) {
        $sqrt = sqrt($i);
        // Kiểm tra xem bình phương của căn bậc hai có bằng số gốc hay không
        if ($sqrt == (int)$sqrt) {
            $perfectSquares[] = $i;
        }
    }
    return $perfectSquares;
}
$result = findPerfectSquares($start, $end);
echo "Các số chính phương trong khoảng từ $start đến $end là: ";
foreach ($result as $number) {
    echo $number . " ";
}



echo "<br> Câu 30: ";
//Cau30: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function isSubstring1($string, $substring)
{
    $stringLength = 0;
    $substringLength = 0;
    while (isset($string[$stringLength])) {
        $stringLength++;
    }
    while (isset($substring[$substringLength])) {
        $substringLength++;
    }
    if ($substringLength > $stringLength) {
        return false;
    }
    for ($i = 0; $i <= $stringLength - $substringLength; $i++) {
        $isMatch = true;

        for ($j = 0; $j < $substringLength; $j++) {
            if ($string[$i + $j] !== $substring[$j]) {
                $isMatch = false;
                break;
            }
        }
        if ($isMatch) {
            return true;
        }
    }
    return false;
}
$string = "Dai hoc Thuong Mai";
$substring = "hoc";
$isSubstring = isSubstring1($string, $substring);
if ($isSubstring) {
    echo "Chuỗi '$substring' là chuỗi con của chuỗi '$string'";
} else {
    echo "Chuỗi '$substring' không là chuỗi con của chuỗi '$string'";
}












?>
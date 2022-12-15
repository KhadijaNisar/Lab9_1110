<?php
//Activity 1
echo "<h3>Activity 1</h3>";
echo $email = $_GET["email"];
echo $pass = $_GET["pass"];
echo "<br>";
if ($email == "") {
    echo "The Email field cannot be blank<br>";
}
if ($pass == "") {
    echo "The Password field cannot be blank<br>";
}
//Activity2
echo "<h3>Activity 2</h3>";
if (isset($_GET['radio'])) {
    echo "You have selected :" . $_GET['radio'];
}
//Activity 3
echo "<h3>Activity 3</h3>";
if (!empty($_GET["check"])) {
    echo "True";
}
echo "<br>";
if (empty($_GET["check"])) {
    echo "False\n";
}
echo "<br>";

//Activity4
echo "<h3>Activity 4</h3>";
function sortArray($array, $sortType)
{
    if ($sortType == "ASC") {
        sort($array);
    }
    if ($sortType == "DES") {
        rsort($array);
    }
    echo "<br>";
    foreach ($array as $k) {
        echo "$k";
        echo " , ";
    }
}
$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
sortArray($a, "DES");
//Activity5
echo "<h3>Activity 5</h3>";
if ($_GET['radio'] == "option1") {
    $random_number_array = range(0, 100);
    shuffle($random_number_array);
    echo "Random Array: ";
    foreach ($random_number_array as $a) {
        echo "$a,";
    }
    echo "</br>";
    echo "Sorted Array: ";
    sortArray($random_number_array, "DES");
}
//Activity 6
echo "<h3>Activity 6</h3>";
if ($_GET['radio'] == "option2") {
    echo "<br>Activity6</br>";
    $limit_random_array_values = range(0, 100);
    shuffle($limit_random_array_values);
    $random_array_value = array_slice($limit_random_array_values, 0, 100);
    echo "<pre>";
    print_r($random_array_value);
    echo "</pre>";
    reset($random_array_value);
    echo "<pre>";
    print_r($random_array_value);
    echo "</pre>";
}

?>
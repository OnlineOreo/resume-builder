<?php
$conn = mysqli_connect("localhost","root","","tester");


if (isset($_POST['a4pagedata']) && isset($_POST['update'])) {
    $a4 = $_POST['a4pagedata'];
    $sql = "update test set css='$a4' where cl_id='6'";
    // $sql = "insert into  test(cl_id,css) values('2','$a4')";
    $active = mysqli_query($conn, $sql);
    if ($active) {
        echo "data-updated";
    }
}
if (isset($_POST['show'])) {
    $dataA4 = $_POST['show'];
    $sql = "select * from test where cl_id='6'";
    $active = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($active);
    echo $row['css'];
}
// if(isset($_POST['dataA4'])){
//     $dataA4 = $_POST['dataA4'];
//     $sql = "select * from cover_letter_style where cv_id='1'";
//     $active = mysqli_query($conn,$sql);
//     $row = mysqli_fetch_assoc($active);
//     echo $row['a4page'];
// }
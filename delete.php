<?php
if(session_id() == ''){
    session_start();
}
include "db.php";
$no = $_SESSION['no'];
$sql = "delete from guestbook where no='$no'";
$name = $_SESSION['name'];
mysqli_query($db, $sql);
if (!mysqli_query($db, $sql)) {
    die(mysqli_error());
} else {
    echo "
         <script>
            setTimeout(function(){window.location.href='view.php?name=" . $name . "';},300);
        </script>";
}
<?php

$id_user = $_GET["id_user"];

$query_name = mysqli_query($connections, "SELECT * FROM tbl_user WHERE id_user='id_user' ");

$row_ = mysqli_fetch_assoc($query_name);

$db_first_name = $row_["first_name"];
$db_middle_name = $row_['middle_name'];
$db_last_name = $row_['last_name'];
$db_gender = $row_['gender'];

$gender_preffix = "";

if($db_gender == "Male"){

    $gender_preffix = "Mr.";
}else{

    $gender_preffix = "Ms.";

}

$full_name = $gender_preffix . " " . ucfirst($db_first_name) . " " . ucfirst($db_middle_name[0]) . ". " . ucfirst($db_last_name); 


?>

<br>
<br>
<br>

<center>
    <form method="POST">
        <h4>
You are about to delete this user: <font color="red"><?php echo $full_name; ?></font>
        </h4>
        <input type="submit" name="btnDelete" value="Confirm" class="btn-primary"> &nbsp; &nbsp; <a href="?" class="btn-delete" >Cancel</a>
    </form>
</center>

<hr>
<?php

session_start();
if(isset($_SESSION["email"])){
    $email = $_SESSION["email"];
}else{
    echo "<script>window.location.href='../';</script>";
}

include("../connections.php");

include("nav.php");

$check = $checkErr = "";

if(isset($_POST["btnSubmit"])){

    if(empty($_POST["check"])){
        $checkErr = "Select at least one ( 1 )";
    }else{
        $check = $_POST["check"];
    }

    if($check){

        echo "<br><br>";

        foreach($check as $new_check){

            echo $new_check . "<br>";

        }

    }

}

?>

<hr>

<form method="POST">

<span class="error"><?php echo $checkErr; ?></span> <br> <br>

<input type="checkbox" name="check[]" value="Beer" > Beer <Br>

<input type="checkbox" name="check[]" value="San Miglight Apple" > San Miglight Apple <Br>

<input type="checkbox" name="check[]" value="Alfonso Lights" > SAlfonso Lights <Br>

<input type="checkbox" name="check[]" value="Grate Taste White Choco" > Grate Taste White Choco <Br>

<input type="checkbox" name="check[]" value="Oyster" > Oyster <Br>

<input type="checkbox" name="check[]" value="Seafood Tacos" > Seafood Tacos <Br>

<input type="checkbox" name="check[]" value="French Fries" > French Fries <Br>

<input type="checkbox" name="check[]" value="Cole Slow" > Cole Slow <Br>

<input type="checkbox" name="check[]" value="Mac & Cheese" > Mac & Cheese <Br>

<input type="checkbox" name="check[]" value="Onion Rings" > Onion Rings <Br>

<input type="submit" name="btnSubmit" value="Submit" > 


</form>

<hr>

<script type="text/javascript">

var Category = {

    "Car": ["Honda","BMW","Mustang","Ford", "Chevrolet", "Dodge","Mazda", "Subaru", "Hyundai","BMW"],
    "Food": ["Burger","Maling","Hotdog","Pizza", "Spaghetti", "Lasagna","Tacos", "Burritos", "Quesadillas","Sushi"],
    "Beer": ["Red Horse","Colt 45","San Mig Light Apple","Heineken", "Budweiser", "Corona","Bud Light", "Miller Lite", "Coors Light","Asahi"],
    "Beverages": ["Coke","Sarsi","Royal","Pepsi", "Sprite", "Fanta","7Up", "Mountain Dew", "Gatorade","Iced Tea"],

}

function category(value) {

    if(value.length == 0) {
        document.getElementById("choice").innerHTML = "<option></option>";
    } else {
        var category_options = "";

       
        for (var i = 0; i < Category[value].length; i++) {
            category_options += "<option name='choice' value='" + Category[value][i] + "'>" + Category[value][i] + "</option>";
        }

        document.getElementById("choice").innerHTML = category_options;
    }
}

</script>

<select name="category" id="category" onChange="category(this.value);">

    <option name="category" value="">Select Category by Clicking Here</option>

    <option name="category" value="Car">Car</option>
    <option name="category" value="Food">Food</option>
    <option name="category" value="Beer">Beer</option>
    <option name="category" value="Beverages">Beverages</option>

</select>

<select name="choice" id="choice">

    <option name="choice" value="">Select Category First</option>

</select>

<?php
try{  
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $nationalCode = $_POST["nationcode"];
    $number = $_POST["number"];
    $role = $_POST["role"];
    $year = $_POST["year"];
    $month = $_POST["month"];
    $day = $_POST["day"];
    $birthDay = "$year/$month/$day";
    $apartmentPlaque = $_POST["ap"];
    $username = $_POST["username1"];
    $password = $_POST["password"];


        require"DB.php";
        $sql = "INSERT INTO `managers`(`first_name`, `last_name`, `username`, `password`, `national_code`, `number`, `birth_day`, `apartment_plaque`) 
        VALUES ('$firstName','$lastName','$username','$password','$nationalCode','$number','$birthDay','$apartmentPlaque')";
        $submit = $pdo->prepare($sql);
        $submit->execute();
        require"DB.php";

    $sql1 = "SELECT * FROM `managers` WHERE '$username' = `username` AND '$password' = `password`";
    $sub = $pdo->prepare($sql1);
    $sub->execute();
    $fet = $sub->fetchAll();

    foreach($fet as $row){
        if($username == $row["username"] && $password == $row["password"] && $nationalCode == $row["national_code"]){
            ?>
            <div style="display:block;" id="username27"><?php echo $username ?></div>
            <div style="display:block;" id="firstName1"><?php echo $row["first_name"] ?></div>
            <div style="display:block;" id="lastName1"><?php echo $row["last_name"] ?></div>

            <script>
                var username =document.getElementById("username27").innerText;
                var fistname =document.getElementById("firstName1").innerText;
                var lastname =document.getElementById("lastName1").innerText;
                console.log(lastname);
                
                var userInfo={
                    username:username,
                    firstName:fistname,
                    lastName:lastname,
                    isManager:true
                }
                
                localStorage.setItem("user",JSON.stringify(userInfo));
            </script>
            <?php
            // header("location:index.php");
        }else{
            die("<div class=\"error\">نام کاربری یا پسورد یا کدملی اشتباه است!!</div>");
        }
    }
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    die("erorr:".$e->getMessage());
}
?>

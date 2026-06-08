<style>
    @font-face {
        font-family: vazir;
        src: url(./CSS/Font/Vazirmatn-Bold.ttf);
    }
    .error{
        font-family: vazir;
        text-align: center;
        color: red;
        font-size: larger;
        direction:rtl ;
    }
</style>
<?php
try{
    $username = $_POST["username-resident"];
    $password = $_POST["password-resident"];

    require"DB.php";

    $sql = "SELECT * FROM `residents` WHERE '$username' = `username` AND '$password' = `password`";
    $sub = $pdo->prepare($sql);
    $sub->execute();
    $fet = $sub->fetchAll();

    foreach($fet as $row){
        if($username == $row["username"] && $password == $row["password"]){
            ?>
            <div style="display:none" id="id1"><?php echo $row["ID"] ?></div>
            <div style="display:none;" id="username26"><?php echo $username ?></div>
            <div style="display:none;" id="firstName"><?php echo $row["first_name"] ?></div>
            <div style="display:none;" id="lastName"><?php echo $row["last_name"] ?></div>

            <script>
                var username =document.getElementById("username26").innerText;
                var fistname =document.getElementById("firstName").innerText;
                var lastname =document.getElementById("lastName").innerText;
                var id =document.getElementById("id1").innerText;

                
                var userInfo={
                    id:id,
                    username:username,
                    firstName:fistname,
                    lastName:lastname,
                    isManager:false
                }
                
                localStorage.setItem("user",JSON.stringify(userInfo));
                
                // Guide to landing Page
                document.addEventListener("DOMContentLoaded",()=>{
                    location.assign("http://localhost/paybills/index.php");
                })
            </script>
            <?php
            //  header("location:index.php");
        }else{
            die("<div class=\"error\">نام کاربری یا پسورد اشتباه است!!</div>");
        }
    }
   
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die("Error: ".$e->getMessage());
    }
?>
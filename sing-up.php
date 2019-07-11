<?php
include_once __DIR__.'/include/header.php';
include_once __DIR__.'/model/function.php';

if(!empty($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conpass = $_POST['conpass'];
    $vercode = rand(100000,9999999);

    if(!empty($name) && !empty($email) && !empty($password) && !empty($conpass)){
        if($password == $conpass){
            $res = register_user($name, $email, $password, $vercode);
            if($res){
                echo "User Registion Successful";
            }else{
                echo "User Registion Failed";
            }
        } else{
            echo "Confirm Password doesn't match";
        }
    }else{
        echo "Required information missing";
    }

}
?>
<div class="continer">
    <form action="" method="post">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>

            <tr>
                <td>password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Confirm password</td>
                <td><input type="password" name="conpass"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Register"></td>
            </tr>
        </table>
            <p>Already have an Account? <a href="sing-in.php">Sing In</a></p>
    </form>
</div>

<?php
include_once 'include/footer.php'
?>


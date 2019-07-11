<?php
include_once __DIR__.'/include/header.php';
include_once __DIR__.'/model/function.php';

if(!empty($_POST)){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $res = get_user($email);
    if($password == $res ['u_pass']){

        header('location:index.php');
    }else{
        echo "Failed";
    }

}
?>
<div class="continer">
    <form action="" method="post">
        <table>

            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>

            <tr>
                <td>password</td>
                <td><input type="password" name="password"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="Register"></td>
            </tr>
        </table>
        <p>Don't have an Account? <a href="sing-up.php">Sing Up</a></p>
    </form>
</div>

<?php
include_once 'include/footer.php'
?>



<?php
include_once __DIR__.'/include/header.php';
include_once __DIR__.'/model/function.php';

if(!empty($_GET)){
    $cId = $_GET['id'];
    $data = get_single_contact($cId);
}


if(!empty($_POST)){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $uId = 1;

    if(!empty($name) && !empty($phone)){
        $res = update_contact($name, $phone, $cId);

        if($res){
            header('location:index.php');
        }else{
            echo "Failed";
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
                <td><input type="text" name="name" value="<?php echo $data['c_name'];?>"></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><input type="text" name="phone" value="<?php echo $data['c_phone'];?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="save"></td>
            </tr>
        </table>

    </form>
</div>

<?php
include_once 'include/footer.php'
?>


<?php
include_once __DIR__.'/include/header.php';
include_once __DIR__.'/model/function.php';


if(!empty($_POST)){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $uId = 1;

    if(!empty($name) && !empty($phone)){
            $res = add_contact($name, $phone, $uId);

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
                  <td><input type="text" name="name"></td>
              </tr>
              <tr>
                  <td>Phone:</td>
                  <td><input type="text" name="phone"></td>
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

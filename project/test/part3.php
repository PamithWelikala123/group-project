<?php
$connection = mysqli_connect('localhost','root','','register_db');
if(!$connection){
  die('Database connection failed.');
}

  $query1 = "SELECT item_id, name FROM item";
  $result_set= mysqli_query($connection, $query1);

  $crop_list='';
  while($result = mysqli_fetch_assoc($result_set)){
      $crop_list .="<option value=\"{$result['item_id']}\">{$result['name']}</option>";

    }
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title>
           Register Page
        </title>
        <meta charset="UTF-8">

        
    </head>
    <body>

                        <form action="process-form.php" method="post">
                        <label for="">Select the Crop:</label>
                        <select  name="item_id" id="">
                          <?php echo $crop_list ?>
                        </select>

                        <button type="submit" name="save_btn">save</button>
                        </form>
                        
                           
                    


    </body>
</html>
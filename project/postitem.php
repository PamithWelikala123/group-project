
<?php

session_start();

include("connection.php");
include("functions.php");

$query1 = "SELECT item_id, name FROM item";
$result_set= mysqli_query($con, $query1);

$crop_list='';
while($result = mysqli_fetch_assoc($result_set)){
    $crop_list .="<option value=\"{$result['item_id']}\">{$result['name']}</option>";

  }




  // if(isset($_POST["submit"])){
  //  // $name = $_POST["name"];
  //   if($_FILES["image"]["error"] == 4){
  //     echo
  //     "<script> alert('Image Does Not Exist'); </script>"
  //     ;
  //   }
  //   else{
  //     $fileName = $_FILES["image"]["name"];
  //     $fileSize = $_FILES["image"]["size"];
  //     $tmpName = $_FILES["image"]["tmp_name"];
  
  //     $validImageExtension = ['jpg', 'jpeg', 'png'];
  //     $imageExtension = explode('.', $fileName);
  //     $imageExtension = strtolower(end($imageExtension));
  
  //     $newImageName = uniqid();
  //     $newImageName .= '.' . $imageExtension;
  
  //       move_uploaded_file($tmpName, 'img/' . $newImageName);
  //       /*
  //       $query = "INSERT INTO postitem (image)  VALUES ('$newImageName')";
  //       mysqli_query($con, $query);*/
      
  //   }
  // }

if(isset($_POST["submit"])){
$arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];

if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
echo "false";
return;
}

if (!file_exists('img')) {
mkdir('img', 0777);
}

$filename = time().'_'.$_FILES['file']['name'];

move_uploaded_file($_FILES['file']['tmp_name'], 'img/'.$filename);

echo 'img/'.$filename;
}


  



if($_SERVER['REQUEST_METHOD'] == "POST")
{

//something was posted
//$crop_id=$_POST['item_id'];
$item_id = $_POST['item_id'];
$crop_type=$_POST['crop_type'];
$expire = $_POST['exp'];
$price = $_POST['price'];
$size = $_POST['size'];
$stock_size = $_POST['stock_size'];
//$discount = $_POST['discount'];
$address = $_POST['Address'];
$postal_code = $_POST['postalcode'];
$city = $_POST['city'];
$description = $_POST['Description'];






/*
if((!empty($First_Name)) && (!empty($Last_Name)) && (!empty($Address)) && (!empty($Postal_Code)) && (!empty($City)) && (!empty($Email)) && (!empty($Password)) && (!empty($Confirm_Password)) && (!empty($Contact_No)) )
{ */
$query = "insert into postitem (item_id,item_type,exp,price,size,stock_size,Address,postalcode,city,image,description) values('$item_id','$crop_type','$expire','$price','$size','$stock_size','$address','$postal_code','$city','$filename','$description')";

mysqli_query($con,$query);
die;

/*}  
else{
  echo "Please Enter Some Valid Information!";
}
*/

}

?>






<!DOCTYPE html>
<html>
    <head>
        
        <title>
           postitem
        </title>
        <link rel="Stylesheet" href="postitem.css">
        
        <meta charset="UTF-8">

        
    </head>
    <body>
      <div class="logo">
                    <img class="img1" src="pics\logo.png">   
      </div>
      <form class="" action="" method="post" enctype="multipart/form-data">
      <div class="form1">
              

                <div class="right">

                                                                      <select  name="item_id" id="" type="text" onkeyup="GetDetail(this.value)" value="" class="item_id">
                                                                                <?php echo $crop_list?> 
                                                                      </select>

                                                                      <!-- <input  type="text" placeholder="  Select Item Name" name="crop_name"> -->
                                                                      <input class="crop_type" type="text" placeholder="  Select Item Type" name="crop_type">
                                                                      <input class="exp" type="text" placeholder="  dd / mm / yyyy" name="exp">
                                                                      
                                                                      <select class="unit" name="unit" id="unit">
                                                                                          <option value="1">Kg</option>
                                                                                          <option value="2">g</option>
                                                                                          <option value="3">Trees</option>
                                                                                          <option value="4">Acres</option>
                                                                                        </select>


                                                                      <input class="price" type="text"  name="price">
                                                                      <input class="size" type="text"  name="size">

                                                                      <input class="stock_size" type="text"  name="stock_size">
                                                                      <select class="stock_size1" name="stock_size1" id="stock_size">
                                                                                          <option value="1">Kg</option>
                                                                                          <option value="2">g</option>
                                                                                          <option value="3">Trees</option>
                                                                                          <option value="4">Acres</option>
                                                                                        </select>


                                                                      <input class ="discount" type="text"  name="discount">
                                                                      <select class="discount1" name="discount1" id="discount1">
                                                                                          <option value="1">%</option>
                                                                                        </select>

                                                                      <input  type="text"  name="Address">
                                                                      <input  type="text"  name="postalcode">
                                                                      
                                                                      <input  type="text"  name="city">


                </div>
                        
                

                <div class="left">
                  
                                          
                                            <div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
                                                    <div id="drag_upload_file">
                                                          <p>Drop file here</p>
                                                          <p>or</p>
                                                          <p><input type="button" value="Select File" name="image" onclick="file_explorer();" /></p>
                                                          <input type="file" id="selectfile" name="image" />
                                                    </div>
                                          </div>
                                          <div class="img-content"></div>


                                          <!-- <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""> <br> <br> -->

                                                    <input  type="text"  name="Description">

                                                    <button type="submit" name="submit">save</button>


                </div>

               
                
        
                </form>

      </div>
      <script src="postitem.js"></script> 
    </body>

</html>
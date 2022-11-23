<?php
  
// Get the user id 

  
// Database connection
$con = mysqli_connect("localhost", "root", "", "register_db");
$item_id = $_REQUEST['item_id'];

if ($item_id !== "") {
      
    // Get corresponding first name and 
    // last name for that user id    
    $query = mysqli_query($con, "SELECT type FROM item WHERE item_id='$item_id'");
  
    $row = mysqli_fetch_array($query);
  
    // Get the first name
    //$type = $row["type"];
  

    
}
  
// Store it in a array
$result = array("$row");
  
// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>

<html>
  
<head>
    <script src=
        "https://code.jquery.com/jquery-3.2.1.min.js">
    </script>
  
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        type="text/javascript">
    </script>
      
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
</head>
  
<body>
    <div class="container">
        <h1>GeeksForGeeks</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Crop Id</label>
                    <input type='text' name="item_id" 
                        id='item_id' class='form-control'
                        placeholder='Enter crop id'
                        onkeyup="GetDetail(this.value)" value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Type</label>
                    <input type="text" name="type" 
                        id="type" class="form-control"
                        placeholder='type'
                        value="">
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
    <script>
  
        // onkeyup event will occur when the user 
        // release the key and calls the function
        // assigned to this event
        function GetDetail(str) {
            if (str.length == 0) {
                document.getElementById("type").value = "";
                
                return;
            }
            else {
  
                // Creates a new XMLHttpRequest object
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
  
                    // Defines a function to be called when
                    // the readyState property changes
                    if (this.readyState == 4 && 
                            this.status == 200) {
                          
                        // Typical action to be performed
                        // when the document is ready
                        var myObj = JSON.parse(this.responseText);
  
                        // Returns the response data as a
                        // string and store this array in
                        // a variable assign the value 
                        // received to first name input field
                          
                        document.getElementById
                            ("type").value = myObj[0];
                          
                    }
                };
  
                // xhttp.open("GET", "filename", true);
                xmlhttp.open("GET", "example.php?item_id=" + str, true);
                  
                // Sends the request to the server
                xmlhttp.send();
            }
        }
    </script>
</body>
  
</html>
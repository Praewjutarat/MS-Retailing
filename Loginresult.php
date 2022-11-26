<?php
   session_start();
   include('Config/Config.php');
   // $servername = "localhost";
   // $username = "root";
   // $password = "";
   // $dbname = "ma_retailing";
   
   // $servername = "localhost";
   // $username = "username";
   // $password = "password";
   // $dbname = "myDB";
   
   // // Create connection
   // $conn = new mysqli($servername, $username, $password, $dbname);
   // // Check connection
   // if ($conn->connect_error) {
   //   die("Connection failed: " . $conn->connect_error);
   // }
   
   // $sql = "SELECT id, firstname, lastname FROM MyGuests";
   // $result = $conn->query($sql);
   
   // if ($result->num_rows > 0) {
   //   // output data of each row
   //   while($row = $result->fetch_assoc()) {
   //     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
   //   }
   // } else {
   //   echo "0 results";
   // }
   // $conn->close();



   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
   }

      $myusername = $_POST['Username'];
      $mypassword = $_POST['Password']; 
      
       $sql = "SELECT* FROM user WHERE username = '$myusername' and password = '$mypassword'" ;
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
           // output data of each row
           while($row = $result->fetch_assoc()) {
            echo $row['name'];
               //session_register("myusername");
               $_SESSION['myusername'] = $row['username']; //เปลี่ยนโชว์ชื่อตรงนี้
               $_SESSION['name'] = $row['name']; //เปลี่ยนโชว์ชื่อตรงนี้

      //-------------------------------------------------------  Login Profile
               if ($row['level'] == "Admin")
               {
                  header("location: PF_Admin.php");

               }else if ($row['level'] == "Account")
               {
                  header("location: PF_Account.php");

               }else if ($row['level'] == "Grafic")
               {
                  header("location: PF_Grafic.php");

               }else if ($row['level'] == "Warehouse")
               {
                  header("location: PF_Warehous.php");

               }else if ($row['level'] == "Sale")
               {
                  header("location: PF_Sale.php");
               }
              


               
      } 
   }
      //-------------------------------------------------------
      else {
      $error = "Your Login Name or Password is invalid";
      
      header("location: loginnopass.html"); //เวลา login ไม่ผ่านจะไปที่ไหนแก้ตรงนี้
   }
      

?>
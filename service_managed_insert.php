<?php




        $serviceName = $_POST['serviceName'];
        $servicePrice = $_POST['servicePrice'];
        
        
        
        $con = mysqli_connect('localhost', 'root', '', 'reg');
        
        if (!$con)
        {
          die("error:".mysqli_connect_error());
        }
 
        $sql = "INSERT INTO `services`(`serviceName`, `servicePrice`) VALUES ('$serviceName','$servicePrice')";
        
        $ret = mysqli_query($con,$sql);
        


        //Disconnect 
        mysqli_close($con);    

      ?> 
        <script type="text/javascript">
            var alertStyle = "padding: 10px; background-color: #f44336; color: white;";
            alert("Insert Successful !!!");
             window.location.href = "admin_dash.php?dashb=Dashboard#";
        </script>
      <?php

        
        
        ?>
<?php 
     
     include_once 'db.php';
     
     
    //    echo "<pre/>";
    //  print_r($_SESSION);
    //  die;
     
     $sql = "SELECT * FROM OC_REQUEST WHERE stud_id = '".$_SESSION['login_user']['id']."'";
    //  echo $sql;
    //  die;
     
     $result = $conn->query($sql);
     $state ="Your Request Is In ";
     if($result->num_rows == 0)
     {
         ?>

            <a href="cert_req_insert.php?stud_id=<?php echo $_SESSION['login_user']['id'];?>">
                Request your certificate
            </a>

         <?php
     
     }
     else
     {
        $arr = $result->fetch_assoc();
        if($arr['status']== 'pending') 
        {
            echo $state.$arr['status'];
        }  
        elseif($arr['status']== 'rejected')
        {
            echo $state.$arr['status'];
        }
        else
        {
            echo $state.$arr['status'];
        }
     }

    //  die;
     // $arr = $result->fetch_assoc();
     // echo "<pre/>";
     // print_r($arr);


    // echo "<pre/>";

    // print_r($_SESSION);
?>
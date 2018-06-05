<?php

$con=mysql_connect("localhost","root","");
	mysql_select_db("user_registration",$con);
 

  $name=$_REQUEST["r1"]; 
	$user_name=$_REQUEST["r2"];
	$email_id=$_REQUEST["r3"];
	$gender=$_REQUEST["gender"];
	$mobile_no=$_REQUEST["r4"];
  $age=$_REQUEST["age"];
  $address=$_REQUEST["address"];
  $city=$_REQUEST["r5"];
  $state=$_REQUEST["r6"];
  $marital_status=$_REQUEST["r7"];
  $education=$_REQUEST["r8"];
  $hobbies=$_REQUEST["r9"];

  


 $query="insert into user_registration set name='".$name."',
                               user_name='".$user_name."',
                               email_id='".$email_id."',
                               gender='".$gender."',
                               mobile_no='".$mobile_no."',
                               age='".$age."',
                               address='".$address."',
                                   
                               city='".$city."',
                               state='".$state."',
                               marital_status='".$marital_status."',
                               education='".$education."',
                               hobbies='".$hobbies."'"; 
                                
                                
                                 
                               
                                 $result=mysql_query($query);

                                echo $result;
                                die();


                                if ($result>0) 
                                {
                                    
                                    ?>
                                    <script language="javascript">
    window.location.href="reg.php?action=msg";

</script>
<?php
                                }
?>
<?php


include('config.php');
if(isset($_POST['Transact']))
{

$sname=$_POST['senderName'];
$rname=$_POST['recipientName'];

$amt=$_POST['amount'];



include('config.php');
$sql='SELECT * FROM `create_user` WHERE NAME ="'.$sname.'"';

//  echo $con->error;
$query= mysqli_query($con,$sql);
$sql1=mysqli_fetch_array($query);
//  echo $con->error;
$sql='SELECT * FROM `create_user` WHERE NAME ="'.$rname.'"';

$query= mysqli_query($con,$sql);
$sql2=mysqli_fetch_array($query);
$s1= $sql1['BALANCE'];
$s2=$sql2['BALANCE'];
if (is_null($s1))
 {
    
    
    header('location:s1.php');
   
}
else if (is_null($s2))
 {
    header('location:s2.php');
    
} 
else if ($sql1['NAME']==$sql2['NAME'])
 {
    header('location:s3.php');
} 



else if(($amt) < 0)
{
        header('location:s4.php');
       
}
else if(($amt) > $sql1['BALANCE'])
{
        header('location:s5.php');
        
}

else{

        $new= $sql1['BALANCE'] - $amt;
        // echo $con->error;
        $sql= 'UPDATE create_user set BALANCE= "'.$new.'" where name="'.$sname.'"';
        mysqli_query($con,$sql);
        $new= $sql2['BALANCE'] + $amt;
        $sql= 'UPDATE create_user set BALANCE= "'.$new.'" where name="'.$rname.'"';
        mysqli_query($con,$sql);

$query="INSERT INTO `trans` (`ID`, `SNAME`, `RNAME`, `BALANCE`) VALUES (NULL, '$sname', '$rname', '$amt')";
        $sql=mysqli_query($con,$query) or die (mysqli_error($con));

 mysqli_query($con,$sql);
      if($sql)
       {

               
        header('location:success.php');

        }

        $new=0;
        $amt=0;
}


}






?>


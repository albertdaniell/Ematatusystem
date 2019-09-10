<?php

require('../pages/database/db.php');



$sql1="CREATE TABLE `agents`(
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `first_name` text NOT NULL,
 `last_name` text NOT NULL,
 `Gender` text NOT NULL,
 `Station` text NOT NULL,
 `Phone` text NOT NULL,
 `email` text NOT NULL,
 `password` text NOT NULL,
 `date_created` text NOT NULL,
 `custom_date` text NOT NULL,
 `delete_status` text NOT NULL,
 `reset_status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1";
$sql1_query=mysqli_query($con,$sql1);

if($sql1_query){
    echo "Agents table has been created 
</br>";
}
else{
    echo "Error creating table agents </br>";
}




$sql2="CREATE TABLE `matatu`(
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `plate_no` text NOT NULL,
 `pic` text NOT NULL,
 `date` text NOT NULL,
 
  
  PRIMARY KEY (`id`)
)ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1";
$sql2_query=mysqli_query($con,$sql2);

if($sql2_query){
    echo "Matatu table has been created </br>";
}
else{
    echo "Error creating table Matatu</br>";
}



$sql3="CREATE TABLE `stakeholders`(
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `first_name` text NOT NULL,
 `last_name` text NOT NULL,
 `rank` text NOT NULL,
 `Gender` text NOT NULL,
 `Phone` text NOT NULL,
 `email` text NOT NULL,
 `password` text NOT NULL,
 `date_created` text NOT NULL,
 `custom_date` text NOT NULL,
 `delete_status` text NOT NULL,
 `reset_status` text NOT NULL,
  PRIMARY KEY (`id`)
 
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1";
$sql3_query=mysqli_query($con,$sql3);

if($sql3_query){
    echo "Stakeholders table has been created 
</br>";
}
else{
    echo "Error creating table stakeholder </br>";
}


$sql4="CREATE TABLE `matatu_ownership`(
 `matatu_id` int(11) NOT NULL,
 `stakeholder_id` int(11) NOT NULL,

  FOREIGN KEY (`matatu_id`) REFERENCES `matatu`(id),
  FOREIGN KEY (`stakeholder_id`) REFERENCES `stakeholders`(id)
 
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1";
$sql4_query=mysqli_query($con,$sql4);

if($sql4_query){
    echo "Ownership of matatu table has been created 
</br>";
}
else{
    echo "Error creating table matatu ownership </br>";
}


$sql5="CREATE TABLE `matatu_payments`(
 `matatu_id` int(11) NOT NULL,
 `payment_type` text NOT NULL,
 `amount` int(11) NOT NULL,
 `agent_id` int(11) NOT NULL,
 `date_of_payment` text NOT NULL,
 `timestamp` text NOT NULL,

  FOREIGN KEY (`agent_id`) REFERENCES `agents`(id),
  FOREIGN KEY (`matatu_id`) REFERENCES `matatu`(id)
 
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1";
$sql5_query=mysqli_query($con,$sql5);

if($sql5_query){
    echo "Matatu payment table has been created 
</br>";
}
else{
    echo "Error creating table matatu payment </br>";
}




$sql6="CREATE TABLE `sacco-employee`(
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `first_name` text NOT NULL,
 `last_name` text NOT NULL,
 `Gender` text NOT NULL,
 `Phone` text NOT NULL,
 `email` text NOT NULL,
 `password` text NOT NULL,
 `date_created` text NOT NULL,
 `custom_date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1";
$sql6_query=mysqli_query($con,$sql6);

if($sql6_query){
    echo "Sacco employee table has been created 
</br>";
}
else{
    echo "Error creating table sacco employee</br>";
}





$admin="CREATE TABLE `superuser`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` text NOT NULL,
    `email` text NOT NULL,
    `password` text NOT NULL,
     PRIMARY KEY (`id`)
   ) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1";
   $admin_query=mysqli_query($con,$admin);
   
   if($admin_query){
       echo "Super user table has been created 
   </br>";
   }
   else{
       echo "Error creating table Superuser</br>";
   }


$sql7="INSERT INTO `sacco-employee`(`id`, `first_name`, `last_name`, `Gender`, `Phone`, `email`, `password`, `date_created`, `custom_date`) 
VALUES ('2','admin','admin','Male','0704054361','admin@info.co.ke','e807f1fcf82d132f9bb018ca6738a19f','28/5/2018','28/5/2018') ";
 $sql7_query=mysqli_query($con,$sql7);

 if($sql7_query){
    echo "Sacco Emp user had been added 
    <br>";

 }
 else{
     echo "Error in adding Sacco emp user<br>";
 }


 $sql8="INSERT INTO `superuser` VALUES ('1290','admin','admin@gmail.com','dan@1995') ";
 $sql8_query=mysqli_query($con,$sql8);

 if($sql8_query){
    echo "Admin user had been added 
    <br>";

 }
 else{
     echo "Error in adding admin user<br>";
 }


?>
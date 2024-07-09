<?php
$sql ="INSERT INTO `product` (`pid`, `pro_name`, `pro_image`, `pro_prise`, `pro_start_time`, `pro_end_time`, `pro_status`) VALUES (NULL, '$fullname', '1.png', '$price', '$stdate', '$enddate', '1');" or die(mysqli_error()); 



?>
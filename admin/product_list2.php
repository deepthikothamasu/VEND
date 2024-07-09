<?php include('header.php'); ?>

   <!--   <?php 
    $i=1;
        $sql="SELECT * FROM product";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        { 
            echo $i;
            $row['pid']; echo '<br>';
            echo $row['pro_name']; echo '<br>';
            echo $row['pro_prise']; echo '<br>';
            echo $row['pro_start_time']; echo '<br>';
            echo $row['pro_end_time']; echo '<br>-----------------------<br>';
        $i++; }
    ?>  -->

<?php 
    $i=1;
        $sql="SELECT * FROM product";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        { 
             $row['pid']; 
            $pname=$row['pro_name']; 
             $row['pro_start_time']; 
             $row['pro_end_time'];
        ?>

        <div>
            <?=$i;?>)
            <?=$pname;?> - 
            <?=$row['pro_prise'];?>
        </div>

        <?php $i++; } 
?> 
<?php include('footer.php');?>
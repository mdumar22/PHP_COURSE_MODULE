<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables In PHP</title>
</head>
<body>
<!-- data types  -->
    <?php
        //string
        $head = 'yellow';
        $User = "Umar";
       var_dump($head);
    ?>
    
    <?php
        //integer or Number
        $numInt = 123;
        var_dump($numInt);
    ?>

    <?php
        //Float(Number with decimal value)
        $numFloat = 123.44;
        var_dump($numFloat);
    ?>

    <?php
        //Boolean 
        $falsyvale = false;
        $trulyvalue = true;
    ?>


    <?php
        //Array

        $ProductArray = array('https://images.unsplash.com/photo-1682687220591-cfd91ab5c1b5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHx8', "Product Name", 123, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, nisi.');

    ?>

    <?php 
    
        //object with fucntion
        //var_dump($obj)
    ?>



    <div>
        <img src="<?php echo $ProductArray[0];?>" alt="">
        <h3><?php echo $ProductArray[1];?></h3>
        <div class="price"><?php echo '$'. $ProductArray[2];?></div>
        <p><?php echo $ProductArray[3]?></p>
    </div>






    <h1 style='color:<?php echo $head;?>;'><?php echo $User . ', ' . $head . ',' . var_dump($head) ?></h1>

    <h1><?php echo $numFloat;?>, <?php var_dump($numFloat)?></h1>
    <h1><?php echo $numInt;?>, <?php var_dump($numInt)?></h1>


    <h1><?php var_dump($falsyvale);?></h1>

    <!-- <h1>Umar, Hello World</h1> -->







</body>
</html>
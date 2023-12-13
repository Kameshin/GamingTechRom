<?php include_once('auth-required.php');?>
<ul>
    <li><a href="/recap/index.php">Home</a></li>
    <li><a href="/recap/produits.php">Products</a></li>
    <li><a href="/recap/contact.php">Constact</a></li>
    <?php if ($logedin == TRUE) { ?>
    <li><a href="/recap/logout.php">Logout</a></li>
    <?php }else{ ?>
    <li><a href="/recap/login.php">Login</a></li>
    <?php
 } ?> 
</ul>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
<?php foreach($css as $stylesheet):?>
<link rel="stylesheet" href="<?php echo $stylesheet; ?>" type="text/css">
<?php endforeach; ?>
    </head>
    <body>


        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="<?php echo base_url(); ?>about">About&nbsp;Chris</a>
            <a href="<?php echo base_url(); ?>blog">Blog</a>
            <a href="<?php echo base_url(); ?>contact">Contact</a>
        </div>

        <!-- Use any element to open the sidenav -->
        <span class="nav-button" onclick="openNav()">
<i class="fa fa-bars fa-2x"></i>
</span>

        <!-- add all page content inside main div, to push content aside with menu -->
        <div id="main">
            <!-- closing tag is in views/footer.php -->


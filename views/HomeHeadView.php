<nav class="navbar navbar-light bg-nav justify-content-around mb-5 ">
    <a class="navbar-brand d-block " href="index.php">
        <img src="imgs/logo.png" width="130">
    </a>
    <div class="form-inline text-center ">

        <?php

        if (!isset($_GET['category'])) {
        ?>
            <a class="nav-link bg-dark text-light text-center" style="font-size: 20px;font-family: ovo;" href="index.php"> All </a>
        <?php
        } else {
        ?>
            <a class="nav-link text-dark text-center text-light " href=" index.php"> All </a>
        <?php
        }

        $nav = CategoryModel::list();

        $cls = "text-dark";

        foreach ($nav as $link) {

            if (isset($_GET['category']) && $link->id == $_GET['category']) {
                $cls = " bg-dark text-light";
            }
        ?>
            <a class="nav-link text-center  <?= $cls ?>" style="font-size: 20px;font-family: ovo;" href="index.php?action=filter&category=<?= $link->id ?>"><?= $link->name ?></a>
        <?php
            $cls = "text-dark";
        }
        ?>
    </div>
    <form class="form-inline" action="index.php">
        <input type="hidden" name="action" value="search">
        <input name="name" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn bg-dark text-light my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>


<div class="w3-row w3-border ">
    <div class="w3-container w3-half bg-dark text-center text-light banner">
        <h2 class="head">GET ABOUT SECRET MENUS TODAY!</h2>
        <p class="text-left">s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
    </div>
    <div class="clearfix"></div>
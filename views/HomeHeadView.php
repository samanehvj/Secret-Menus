<nav class="navbar navbar-light bg-warning justify-content-around mb-5 ">
    <a class="navbar-brand d-block " href="index.php">
        <img src="imgs/logo.png" width="100">
    </a>
    <div class="form-inline text-center ">

        <?php

        if (!isset($_GET['category'])) {
        ?>
            <a class="nav-link bg-dark text-light text-center" style="font-size: 20px;font-family: Vollkorn;" href="index.php"> All </a>
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
            <a class="nav-link text-center  <?= $cls ?>" style="font-size: 20px;font-family: Vollkorn;" href="index.php?action=filter&category=<?= $link->id ?>"><?= $link->name ?></a>
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
<div class="clearfix"></div>
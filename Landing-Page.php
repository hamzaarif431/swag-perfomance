<?php
    include 'includes/header.php';
    $page = 'home';
?>
<main>
    <style>
    header {
        display: none;
    }

    footer {
        display: none;
    }

    .copysec {
        display: none;
    }
    </style>

    <body id="landing_page">
        <!-- <h1 class="diesel_">Diesel</h1>
        <h1 class="gas_">off road</h1> -->
        <div class="diesel_container">
        <h2 class="gas"><a href="index.php">off road</a></h2>
            <h2 class="diesel"><a href="index.php">DIESEL</a></h2>
        </div>
        <div class="gas_container">
            <!-- <h2 class="gas"><a href="index.php">off road</a></h2> -->
        </div>
        <img class="img-1" src="images/swag1.png" alt="">
        <img class="img-2" src="images/swag2.png" alt="">

    </body>

</main>

<?php
    include 'includes/footer.php';
    $page = 'home';
?>
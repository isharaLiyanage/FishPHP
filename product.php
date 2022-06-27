<?php session_start(); ?>
<?php require_once('inc/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name</title>
</head>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/background.css">
<script src="js/jquery-3.6.0.js"></script>

<body>
    <?php require_once('./HandF/header.php') ?>

    <div class="container" id="container">
        <div class="background zIndex">
            <section>
                <div class="buble">
                    <div class="a"><img src="img/background/soap_bubbles_PNG15 - Copy.png" alt=""></div>
                    <div><img src="img/background/soap_bubbles_PNG15.png" alt=""></div>
                    <div><img src="img/background/soap_bubbles_PNG15 - Copy (2).png" alt=""></div>
                    <div><img src="img/background/soap_bubbles_PNG15 - Copy (3).png" alt=""></div>
                    <div><img src="img/background/soap_bubbles_PNG15 - Copy (4).png" alt=""></div>
                    <div><img src="img/background/soap_bubbles_PNG15 - Copy (5).png" alt=""></div>
                    <div><img src="img/background/soap_bubbles_PNG15 - Copy (6).png" alt=""></div>

                </div>
            </section>
        </div>
        <div class="list">

            <div class="productCategory">
                <div class="filter">
                    <h4>Filter</h4>
                </div>
                <ul>
                    <li><button class="ALL"> All </button> </li>
                    <li><button class="category01"> Category 01 </button> </li>
                    <li><button class="category02"> Category 02 </button> </li>
                    <li><button class="category03"> Category 03 </button> </li>
                    <li><button class="category04"> Category 04 </button> </li>
                    <li><button class="category05"> Category 05 </button> </li>
                </ul>
            </div>
            <div class="item">
            </div>


        </div>
    </div>
    </div>
</body>



<script type="text/javascript" src="js/script.js"></script>

</html>
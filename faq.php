<?php


include('./include/config.php');

$sql = "SELECT * FROM `admin_login`";

$result = mysqli_query($conn, $sql) or die("Query Failed.");

// echo $sql;

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        $admin_id = $row['al_id'];
        $admin_user = $row['al_username'];

    }
}

include('./include/header.php');

?>
<style>
    summary {
        font-size: 1.0rem;
        font-weight: 500;
        background-color: transparent;
        color: white;
        outline: none;
        text-align: left;
        cursor: pointer;
        position: relative;
    }

    details[open] summary~* {
        animation: sweep .5s ease-in-out;
    }

    @keyframes sweep {
        0% {
            opacity: 0;
            margin-top: -10px
        }

        100% {
            opacity: 1;
            margin-top: 0px
        }
    }

    details>summary::after {
        position: absolute;
        content: "+";
        right: 20px;
    }

    details[open]>summary::after {
        position: absolute;
        content: "-";
        right: 20px;
    }

    details>summary::-webkit-details-marker {
        display: none;
    }
</style>

<!-- main-area -->
<main class="main-area fix">

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area">
        <div class="breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.png"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="breadcrumb-content text-center">
                        <h3 class="title">Our Faqs</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Faqs</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- faq-area -->
    <section class="faq-area faq-padding inner-faq-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-xl-9 col-lg-11">
                    <div class="accordion" id="accordionExample">
                        <?php
                        $i = 0;
                        $sql = "SELECT * FROM `faq` ";
                        $sql_res = mysqli_query($conn, $sql);
                        $open = "open";


                        while ($row = mysqli_fetch_assoc($sql_res)) {
                            ?>

                            <div class="accordion-item  ">

                                <details <?php echo $open; ?>>
                                    <summary class="title">
                                        <?php echo $i = $i + 1; ?>.
                                        <?php echo $row['f_ques']; ?>
                                        <span class="line"></span>
                                    </summary>
                                    <div class="accordion-body" class="faq__content">
                                        <p class="title">
                                            <?php echo $row['f_ans']; ?>
                                        </p>
                                    </div>
                                </details>
                            </div>

                            <?php
                            $open = "";
                        }
                        ?>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-area-end -->

</main>
<!-- main-area-end -->



<?php

include('./include/footer.php');

?>
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


$sql = "SELECT * FROM `web_setting` ";
$result = mysqli_query($conn, $sql) or die("Query Faild update");
while ($row = mysqli_fetch_assoc($result)) {
    $phone = $row['w_mobile'];
    $email = $row['w_email'];
    $address = $row['w_address'];
}

?>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<style>
    p {
        font-family: fontAwesome
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
                        <h3 class="title">Contact Us</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- contact-area -->
    <section class="contact-area">
        <div class="contact-info-wrapper">
            <div class="container">
                <div class="row justify-content-around">
                    <!-- <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="contact-info-item text-center">
                            <div class="contact-info-icon">
                                <i class="flaticon-chat"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5 class="title">Chat With Us</h5>
                                <p>We've got live Social Experts waiting to help you monday to friday from 9am to 5pm
                                    EST.</p>
                                <a href="#" class="contact-info-link">Chat with us</a>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="contact-info-item text-center">
                            <div class="contact-info-icon">
                            <span class="flaticon" ><p style="font-size: 50px; color:#F9C747;
                                        margin-top:10px;"><span class="fa-map-marker"></span></p></span>
                            </div>
                            <div class="contact-info-content">
                                <h5 class="title">Location</h5>
                                <!-- <p>Simple drop us an email at cycure.agency@mail.com and you'll receive a reply within -->
                                <!-- 24 hours</p> -->
                                <p style="font-size: 18px;" ><?php echo $address; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="contact-info-item text-center">
                            <div class="contact-info-icon">
                                <i class="flaticon-open-mail"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5 class="title">Send Us Email</h5>
                                <!-- <p>Simple drop us an email at cycure.agency@mail.com and you'll receive a reply within -->
                                <!-- 24 hours</p> -->
                                <p style="font-size:25px;" ><?php echo $email; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="contact-info-item text-center">
                            <div class="contact-info-icon">
                            <span class="flaticon" ><p style="font-size: 50px; color:#F9C747;
                                        margin-top:20px;"><i class="fa-sharp fa-regular fa-phone"></i></p></span>
                            </div>
                            <div class="contact-info-content">
                                <h5 class="title">Make a Call</h5>
                                <!-- <p>Give us a ring.Our Experts are standing by monday to friday from 9am to 5pm EST.</p> -->
                                <p style="font-size: 20px;" ><?php echo $phone; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div id="map" data-background="assets/img/bg/map.jpg"></div> -->

        </div>
        <div class="contact-form-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-7 col-md-9 col-sm-10">
                        <div class="section-title text-center mb-50">
                            <h2 class="title">Questions or Comments? Get in Touch</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xxl-8 col-xl-9 col-lg-10">
                        <form action="email.php" class="contact-form text-center" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" maxlength="100" required placeholder="Your full name"
                                            name="e_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="email" maxlength="200" required placeholder="Your email address"
                                            name="e_email">
                                    </div>
                                </div>
                                <div class="form-grp">
                                    <textarea name="message" id="message" maxlength="1000" required
                                        placeholder="Write your message..." name="e_mess"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn" name="send_email">Send message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

</main>
<!-- main-area-end -->

<?php
include('./include/footer.php');
?>
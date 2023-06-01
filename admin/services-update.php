<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {
    include("./include/sidebar.php");

    if (isset($_GET['sid'])) {


        $sql = "SELECT * FROM `services` WHERE `s_id` = {$_GET['sid']}";


        $result = mysqli_query($conn, $sql) or die("Query Faild update");


        while ($row = mysqli_fetch_assoc($result)) {


            ?>

                                    <div class="col-xs-12">
                                        <a href="services.php" class="margin-bottom-10 btn waves-effect waves-light btn-primary btn-xs">Back</a>
                                        <div class="box-content">
                                            <h4 class="box-title">Update Services</h4>

                                            <div class="row">

                                                <div class="col-md-12">
                                                    <form action="save-update-service.php" method="POST" enctype="multipart/form-data">

                                                        <div class="padding-10">

                                                            <input type="hidden" name="s_id" class="form-control" value="<?php echo $row['s_id']; ?>">

                                                            <div class="m-t-10">
                                                                <h5><b>Service Name</b></h5>
                                                                <textarea id="textarea" class="form-control" maxlength="100" rows="1"
                                                                    placeholder="This Heading has a limit of 100 chars." name="s_name"
                                                                    required><?php echo $row['s_name']; ?></textarea>
                                                            </div>

                                                            <div class="m-t-10 ">
                                                                <h5><b>Short Description</b></h5>
                                                                <textarea id="textarea" class="form-control" maxlength="100" rows="2"
                                                                    placeholder="This Description has a limit of 100 chars." name="s_short_desc"
                                                                    required><?php echo $row['s_short_desc']; ?></textarea>
                                                            </div>

                                                            <!-- <div class="m-t-10 ">
                                                    <h5><b>Slug</b></h5>
                                                    <textarea id="textarea" class="form-control" maxlength="100" rows="2"
                                                        placeholder="This Description has a limit of 100 chars." name="s_slug"
                                                        required><?php // echo $row['s_slug']; ?></textarea>
                                                </div> -->

                                                            <!-- icon ----------------------------------------------- -->


                                                            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
                                                                rel="stylesheet" />
                                                            <style>
                                                                select {
                                                                    font-family: fontAwesome
                                                                }
                                                            </style>


            <div class="m-t-10 ">
              <h5><b>Icon</b></h5>
            <select class="form-control" name="s_icon">
             <option selected value="<?php echo $row['s_icon']; ?>"><?php echo $row['s_icon']; ?></option>
                                                <option value='&#xf26e;'>&#xf26e; fa-500px</option>
                                                <option value='&#xf2b9;'>&#xf2b9; fa-address-book</option>
                                                <option value='&#xf2ba;'>&#xf2ba; fa-address-book-o</option>
                                                <option value='&#xf2bb;'>&#xf2bb; fa-address-card</option>
                                                <option value='&#xf2bc;'>&#xf2bc; fa-address-card-o</option>
                                                <option value='&#xf042;'>&#xf042; fa-adjust</option>
                                                <option value='&#xf170;'>&#xf170; fa-adn</option>
                                                <option value='&#xf037;'>&#xf037; fa-align-center</option>
                                                <option value='&#xf039;'>&#xf039; fa-align-justify</option>
                                                <option value='&#xf036;'>&#xf036; fa-align-left</option>
                                                <option value='&#xf038;'>&#xf038; fa-align-right</option>
                                                <option value='&#xf270;'>&#xf270; fa-amazon</option>
                                                <option value='&#xf0f9;'>&#xf0f9; fa-ambulance</option>
                                                <option value='&#xf2a3;'>&#xf2a3; fa-american-sign-language-interpreting</option>
                                                <option value='&#xf13d;'>&#xf13d; fa-anchor</option>
                                                <option value='&#xf17b;'>&#xf17b; fa-android</option>
                                                <option value='&#xf209;'>&#xf209; fa-angellist</option>
                                                <option value='&#xf103;'>&#xf103; fa-angle-double-down</option>
                                                <option value='&#xf100;'>&#xf100; fa-angle-double-left</option>
                                                <option value='&#xf100;'>&#xf100; fa-angle-double-right</option>
                                                <option value='&#xf102;'>&#xf102; fa-angle-double-up</option>
                                                <option value='&#xf107;'>&#xf107; fa-angle-down</option>
                                                <option value='&#xf107;'>&#xf107; fa-angle-left</option>
                                                <option value='&#xf105;'>&#xf105; fa-angle-right</option>
                                                <option value='&#xf106;'>&#xf106; fa-angle-up</option>
                                                <option value='&#xf179;'>&#xf179; fa-apple</option>
                                                <option value='&#xf187;'>&#xf187; fa-archive</option>
                                                <option value='&#xf1fe;'>&#xf1fe; fa-area-chart</option>
                                                <option value='&#xf0ab;'>&#xf0ab; fa-arrow-circle-down</option>
                                                <option value='&#xf0a8;'>&#xf0a8; fa-arrow-circle-left</option>
                                                <option value='&#xf01a;'>&#xf01a; fa-arrow-circle-o-down</option>
                                                <option value='&#xf190;'>&#xf190; fa-arrow-circle-o-left</option>
                                                <option value='&#xf18e;'>&#xf18e; fa-arrow-circle-o-right</option>
                                                <option value='&#xf01b;'>&#xf01b; fa-arrow-circle-o-up</option>
                                                <option value='&#xf0a9;'>&#xf0a9; fa-arrow-circle-right</option>
                                                <option value='&#xf0aa;'>&#xf0aa; fa-arrow-circle-up</option>
                                                <option value='&#xf063;'>&#xf063; fa-arrow-down</option>
                                                <option value='&#xf060;'>&#xf060; fa-arrow-left</option>
                                                <option value='&#xf061;'>&#xf061; fa-arrow-right</option>
                                                <option value='&#xf062;'>&#xf062; fa-arrow-up</option>
                                                <option value='&#xf047;'>&#xf047; fa-arrows</option>
                                                <option value='&#xf0b2;'>&#xf0b2; fa-arrows-alt</option>
                                                <option value='&#xf07e;'>&#xf07e; fa-arrows-h</option>
                                                <option value='&#xf07d;'>&#xf07d; fa-arrows-v</option>
                                                <option value='&#xf2a3;'>&#xf2a3; fa-asl-interpreting</option>
                                                <option value='&#xf2a2;'>&#xf2a2; fa-assistive-listening-systems
                                                </option>
                                                <option value='&#xf069;'>&#xf069; fa-asterisk</option>
                                                <option value='&#xf1fa;'>&#xf1fa; fa-at</option>
                                                <option value='&#xf29e;'>&#xf29e; fa-audio-description</option>
                                                <option value='&#xf1b9;'>&#xf1b9; fa-automobile</option>
                                                <option value='&#xf04a;'>&#xf04a; fa-backward</option>
                                                <option value='&#xf24e;'>&#xf24e; fa-balance-scale</option>
                                                <option value='&#xf05e;'>&#xf05e; fa-ban</option>
                                                <option value='&#xf2d5;'>&#xf2d5; fa-bandcamp</option>
                                                <option value='&#xf19c;'>&#xf19c; fa-bank</option>
                                                <option value='&#xf080;'>&#xf080; fa-bar-chart</option>
                                                <option value='&#xf080;'>&#xf080; fa-bar-chart-o</option>
                                                <option value='&#xf02a;'>&#xf02a; fa-barcode</option>
                                                <option value='&#xf0c9;'>&#xf0c9; fa-bars</option>
                                                <option value='&#xf2cd;'>&#xf2cd; fa-bath</option>
                                                <option value='&#xf2cd;'>&#xf2cd; fa-bathtub</option>
                                                <option value='&#xf240;'>&#xf240; fa-battery</option>
                                                <option value='&#xf244;'>&#xf244; fa-battery-0</option>
                                                <option value='&#xf243;'>&#xf243; fa-battery-1</option>
                                                <option value='&#xf242;'>&#xf242; fa-battery-2</option>
                                                <option value='&#xf241;'>&#xf241; fa-battery-3</option>
                                                <option value='&#xf240;'>&#xf240; fa-battery-4</option>
                                                <option value='&#xf244;'>&#xf244; fa-battery-empty</option>
                                                <option value='&#xf240;'>&#xf240; fa-battery-full</option>
                                                <option value='&#xf242;'>&#xf242; fa-battery-half</option>
                                                <option value='&#xf243;'>&#xf243; fa-battery-quarter</option>
                                                <option value='&#xf241;'>&#xf241; fa-battery-three-quarters</option>
                                                <option value='&#xf236;'>&#xf236; fa-bed</option>
                                                <option value='&#xf0fc;'>&#xf0fc; fa-beer</option>
                                                <option value='&#xf1b4;'>&#xf1b4; fa-behance</option>
                                                <option value='&#xf1b5;'>&#xf1b5; fa-behance-square</option>
                                                <option value='&#xf0f3;'>&#xf0f3; fa-bell</option>
                                                <option value='&#xf0a2;'>&#xf0a2; fa-bell-o</option>
                                                <option value='&#xf1f6;'>&#xf1f6; fa-bell-slash</option>
                                                <option value='&#xf1f7;'>&#xf1f7; fa-bell-slash-o</option>
                                                <option value='&#xf206;'>&#xf206; fa-bicycle</option>
                                                <option value='&#xf1e5;'>&#xf1e5; fa-binoculars</option>
                                                <option value='&#xf1fd;'>&#xf1fd; fa-birthday-cake</option>
                                                <option value='&#xf171;'>&#xf171; fa-bitbucket</option>
                                                <option value='&#xf172;'>&#xf172; fa-bitbucket-square</option>
                                                <option value='&#xf15a;'>&#xf15a; fa-bitcoin</option>
                                                <option value='&#xf27e;'>&#xf27e; fa-black-tie</option>
                                                <option value='&#xf29d;'>&#xf29d; fa-blind</option>
                                                <option value='&#xf293;'>&#xf293; fa-bluetooth</option>
                                                <option value='&#xf294;'>&#xf294; fa-bluetooth-b</option>
                                                <option value='&#xf032;'>&#xf032; fa-bold</option>
                                                <option value='&#xf0e7;'>&#xf0e7; fa-bolt</option>
                                                <option value='&#xf1e2;'>&#xf1e2; fa-bomb</option>
                                                <option value='&#xf02d;'>&#xf02d; fa-book</option>
                                                <option value='&#xf02e;'>&#xf02e; fa-bookmark</option>
                                                <option value='&#xf097;'>&#xf097; fa-bookmark-o</option>
                                                <option value='&#xf2a1;'>&#xf2a1; fa-braille</option>
                                                <option value='&#xf0b1;'>&#xf0b1; fa-briefcase</option>
                                                <option value='&#xf15a;'>&#xf15a; fa-btc</option>
                                                <option value='&#xf188;'>&#xf188; fa-bug</option>
                                                <option value='&#xf1ad;'>&#xf1ad; fa-building</option>
                                                <option value='&#xf0f7;'>&#xf0f7; fa-building-o</option>
                                                <option value='&#xf0a1;'>&#xf0a1; fa-bullhorn</option>
                                                <option value='&#xf140;'>&#xf140; fa-bullseye</option>
                                                <option value='&#xf207;'>&#xf207; fa-bus</option>
                                                <option value='&#xf20d;'>&#xf20d; fa-buysellads</option>
                                                <option value='&#xf1ba;'>&#xf1ba; fa-cab</option>
                                                <option value='&#xf1ec;'>&#xf1ec; fa-calculator</option>
                                                <option value='&#xf073;'>&#xf073; fa-calendar</option>
                                                <option value='&#xf274;'>&#xf274; fa-calendar-check-o</option>
                                                <option value='&#xf272;'>&#xf272; fa-calendar-minus-o</option>
                                                <option value='&#xf133;'>&#xf133; fa-calendar-o</option>
                                                <option value='&#xf271;'>&#xf271; fa-calendar-plus-o</option>
                                                <option value='&#xf273;'>&#xf273; fa-calendar-times-o</option>
                                                <option value='&#xf030;'>&#xf030; fa-camera</option>
                                                <option value='&#xf083;'>&#xf083; fa-camera-retro</option>
                                                <option value='&#xf1b9;'>&#xf1b9; fa-car</option>
                                                <option value='&#xf0d7;'>&#xf0d7; fa-caret-down</option>
                                                <option value='&#xf0d9;'>&#xf0d9; fa-caret-left</option>
                                                <option value='&#xf0da;'>&#xf0da; fa-caret-right</option>
                                                <option value='&#xf150;'>&#xf150; fa-caret-square-o-down</option>
                                                <option value='&#xf191;'>&#xf191; fa-caret-square-o-left</option>
                                                <option value='&#xf152;'>&#xf152; fa-caret-square-o-right</option>
                                                <option value='&#xf151;'>&#xf151; fa-caret-square-o-up</option>
                                                <option value='&#xf0d8;'>&#xf0d8; fa-caret-up</option>
                                                <option value='&#xf218;'>&#xf218; fa-cart-arrow-down</option>
                                                <option value='&#xf217;'>&#xf217; fa-cart-plus</option>
                                                <option value='&#xf20a;'>&#xf20a; fa-cc</option>
                                                <option value='&#xf1f3;'>&#xf1f3; fa-cc-amex</option>
                                                <option value='&#xf24c;'>&#xf24c; fa-cc-diners-club</option>
                                                <option value='&#xf1f2;'>&#xf1f2; fa-cc-discover</option>
                                                <option value='&#xf24b;'>&#xf24b; fa-cc-jcb</option>
                                                <option value='&#xf1f1;'>&#xf1f1; fa-cc-mastercard</option>
                                                <option value='&#xf1f4;'>&#xf1f4; fa-cc-paypal</option>
                                                <option value='&#xf1f5;'>&#xf1f5; fa-cc-stripe</option>
                                                <option value='&#xf1f0;'>&#xf1f0; fa-cc-visa</option>
                                                <option value='&#xf0a3;'>&#xf0a3; fa-certificate</option>
                                                <option value='&#xf0c1;'>&#xf0c1; fa-chain</option>
                                                <option value='&#xf127;'>&#xf127; fa-chain-broken</option>
                                                <option value='&#xf00c;'>&#xf00c; fa-check</option>
                                                <option value='&#xf058;'>&#xf058; fa-check-circle</option>
                                                <option value='&#xf05d;'>&#xf05d; fa-check-circle-o</option>
                                                <option value='&#xf14a;'>&#xf14a; fa-check-square</option>
                                                <option value='&#xf046;'>&#xf046; fa-check-square-o</option>
                                                <option value='&#xf13a;'>&#xf13a; fa-chevron-circle-down</option>
                                                <option value='&#xf137;'>&#xf137; fa-chevron-circle-left</option>
                                                <option value='&#xf138;'>&#xf138; fa-chevron-circle-right</option>
                                                <option value='&#xf139;'>&#xf139; fa-chevron-circle-up</option>
                                                <option value='&#xf078;'>&#xf078; fa-chevron-down</option>
                                                <option value='&#xf053;'>&#xf053; fa-chevron-left</option>
                                                <option value='&#xf054;'>&#xf054; fa-chevron-right</option>
                                                <option value='&#xf077;'>&#xf077; fa-chevron-up</option>
                                                <option value='&#xf1ae;'>&#xf1ae; fa-child</option>
                                                <option value='&#xf268;'>&#xf268; fa-chrome</option>
                                                <option value='&#xf111;'>&#xf111; fa-circle</option>
                                                <option value='&#xf10c;'>&#xf10c; fa-circle-o</option>
                                                <option value='&#xf1ce;'>&#xf1ce; fa-circle-o-notch</option>
                                                <option value='&#xf1db;'>&#xf1db; fa-circle-thin</option>
                                                <option value='&#xf0ea;'>&#xf0ea; fa-clipboard</option>
                                                <option value='&#xf017;'>&#xf017; fa-clock-o</option>
                                                <option value='&#xf24d;'>&#xf24d; fa-clone</option>
                                                <option value='&#xf00d;'>&#xf00d; fa-close</option>
                                                <option value='&#xf0c2;'>&#xf0c2; fa-cloud</option>
                                                <option value='&#xf0ed;'>&#xf0ed; fa-cloud-download</option>
                                                <option value='&#xf0ee;'>&#xf0ee; fa-cloud-upload</option>
                                                <option value='&#xf157;'>&#xf157; fa-cny</option>
                                                <option value='&#xf121;'>&#xf121; fa-code</option>
                                                <option value='&#xf126;'>&#xf126; fa-code-fork</option>
                                                <option value='&#xf1cb;'>&#xf1cb; fa-codepen</option>
                                                <option value='&#xf284;'>&#xf284; fa-codiepie</option>
                                                <option value='&#xf0f4;'>&#xf0f4; fa-coffee</option>
                                                <option value='&#xf013;'>&#xf013; fa-cog</option>
                                                <option value='&#xf085;'>&#xf085; fa-cogs</option>
                                                <option value='&#xf0db;'>&#xf0db; fa-columns</option>
                                                <option value='&#xf075;'>&#xf075; fa-comment</option>
                                                <option value='&#xf0e5;'>&#xf0e5; fa-comment-o</option>
                                                <option value='&#xf27a;'>&#xf27a; fa-commenting</option>
                                                <option value='&#xf27b;'>&#xf27b; fa-commenting-o</option>
                                                <option value='&#xf086;'>&#xf086; fa-comments</option>
                                                <option value='&#xf0e6;'>&#xf0e6; fa-comments-o</option>
                                                <option value='&#xf14e;'>&#xf14e; fa-compass</option>
                                                <option value='&#xf066;'>&#xf066; fa-compress</option>
                                                <option value='&#xf20e;'>&#xf20e; fa-connectdevelop</option>
                                                <option value='&#xf26d;'>&#xf26d; fa-contao</option>
                                                <option value='&#xf0c5;'>&#xf0c5; fa-copy</option>
                                                <option value='&#xf1f9;'>&#xf1f9; fa-copyright</option>
                                                <option value='&#xf25e;'>&#xf25e; fa-creative-commons</option>
                                                <option value='&#xf09d;'>&#xf09d; fa-credit-card</option>
                                                <option value='&#xf283;'>&#xf283; fa-credit-card-alt</option>
                                                <option value='&#xf125;'>&#xf125; fa-crop</option>
                                                <option value='&#xf05b;'>&#xf05b; fa-crosshairs</option>
                                                <option value='&#xf13c;'>&#xf13c; fa-css3</option>
                                                <option value='&#xf1b2;'>&#xf1b2; fa-cube</option>
                                                <option value='&#xf1b3;'>&#xf1b3; fa-cubes</option>
                                                <option value='&#xf0c4;'>&#xf0c4; fa-cut</option>
                                                <option value='&#xf0f5;'>&#xf0f5; fa-cutlery</option>
                                                <option value='&#xf0e4;'>&#xf0e4; fa-dashboard</option>
                                                <option value='&#xf210;'>&#xf210; fa-dashcube</option>
                                                <option value='&#xf1c0;'>&#xf1c0; fa-database</option>
                                                <option value='&#xf2a4;'>&#xf2a4; fa-deaf</option>
                                                <option value='&#xf2a4;'>&#xf2a4; fa-deafness</option>
                                                <option value='&#xf03b;'>&#xf03b; fa-dedent</option>
                                                <option value='&#xf1a5;'>&#xf1a5; fa-delicious</option>
                                                <option value='&#xf108;'>&#xf108; fa-desktop</option>
                                                <option value='&#xf1bd;'>&#xf1bd; fa-deviantart</option>
                                                <option value='&#xf219;'>&#xf219; fa-diamond</option>
                                                <option value='&#xf1a6;'>&#xf1a6; fa-digg</option>
                                                <option value='&#xf155;'>&#xf155; fa-dollar</option>
                                                <option value='&#xf192;'>&#xf192; fa-dot-circle-o</option>
                                                <option value='&#xf019;'>&#xf019; fa-download</option>
                                                <option value='&#xf17d;'>&#xf17d; fa-dribbble</option>
                                                <option value='&#xf2c2;'>&#xf2c2; fa-drivers-license</option>
                                                <option value='&#xf2c3;'>&#xf2c3; fa-drivers-license-o</option>
                                                <option value='&#xf16b;'>&#xf16b; fa-dropbox</option>
                                                <option value='&#xf1a9;'>&#xf1a9; fa-drupal</option>
                                                <option value='&#xf282;'>&#xf282; fa-edge</option>
                                                <option value='&#xf044;'>&#xf044; fa-edit</option>
                                                <option value='&#xf2da;'>&#xf2da; fa-eercast</option>
                                                <option value='&#xf052;'>&#xf052; fa-eject</option>
                                                <option value='&#xf141;'>&#xf141; fa-ellipsis-h</option>
                                                <option value='&#xf142;'>&#xf142; fa-ellipsis-v</option>
                                                <option value='&#xf1d1;'>&#xf1d1; fa-empire</option>
                                                <option value='&#xf0e0;'>&#xf0e0; fa-envelope</option>
                                                <option value='&#xf003;'>&#xf003; fa-envelope-o</option>
                                                <option value='&#xf2b6;'>&#xf2b6; fa-envelope-open</option>
                                                <option value='&#xf2b7;'>&#xf2b7; fa-envelope-open-o</option>
                                                <option value='&#xf199;'>&#xf199; fa-envelope-square</option>
                                                <option value='&#xf299;'>&#xf299; fa-envira</option>
                                                <option value='&#xf12d;'>&#xf12d; fa-eraser</option>
                                                <option value='&#xf2d7;'>&#xf2d7; fa-etsy</option>
                                                <option value='&#xf153;'>&#xf153; fa-eur</option>
                                                <option value='&#xf153;'>&#xf153; fa-euro</option>
                                                <option value='&#xf0ec;'>&#xf0ec; fa-exchange</option>
                                                <option value='&#xf12a;'>&#xf12a; fa-exclamation</option>
                                                <option value='&#xf06a;'>&#xf06a; fa-exclamation-circle</option>
                                                <option value='&#xf071;'>&#xf071; fa-exclamation-triangle</option>
                                                <option value='&#xf065;'>&#xf065; fa-expand</option>
                                                <option value='&#xf23e;'>&#xf23e; fa-expeditedssl</option>
                                                <option value='&#xf08e;'>&#xf08e; fa-external-link</option>
                                                <option value='&#xf14c;'>&#xf14c; fa-external-link-square</option>
                                                <option value='&#xf06e;'>&#xf06e; fa-eye</option>
                                                <option value='&#xf070;'>&#xf070; fa-eye-slash</option>
                                                <option value='&#xf1fb;'>&#xf1fb; fa-eyedropper</option>
                                                <option value='&#xf2b4;'>&#xf2b4; fa-fa</option>
                                                <option value='&#xf09a;'>&#xf09a; fa-facebook</option>
                                                <option value='&#xf09a;'>&#xf09a; fa-facebook-f</option>
                                                <option value='&#xf230;'>&#xf230; fa-facebook-official</option>
                                                <option value='&#xf082;'>&#xf082; fa-facebook-square</option>
                                                <option value='&#xf049;'>&#xf049; fa-fast-backward</option>
                                                <option value='&#xf050;'>&#xf050; fa-fast-forward</option>
                                                <option value='&#xf1ac;'>&#xf1ac; fa-fax</option>
                                                <option value='&#xf09e;'>&#xf09e; fa-feed</option>
                                                <option value='&#xf182;'>&#xf182; fa-female</option>
                                                <option value='&#xf0fb;'>&#xf0fb; fa-fighter-jet</option>
                                                <option value='&#xf15b;'>&#xf15b; fa-file</option>
                                                <option value='&#xf1c6;'>&#xf1c6; fa-file-archive-o</option>
                                                <option value='&#xf1c7;'>&#xf1c7; fa-file-audio-o</option>
                                                <option value='&#xf1c9;'>&#xf1c9; fa-file-code-o</option>
                                                <option value='&#xf1c3;'>&#xf1c3; fa-file-excel-o</option>
                                                <option value='&#xf1c5;'>&#xf1c5; fa-file-image-o</option>
                                                <option value='&#xf1c8;'>&#xf1c8; fa-file-movie-o</option>
                                                <option value='&#xf016;'>&#xf016; fa-file-o</option>
                                                <option value='&#xf1c1;'>&#xf1c1; fa-file-pdf-o</option>
                                                <option value='&#xf1c5;'>&#xf1c5; fa-file-photo-o</option>
                                                <option value='&#xf1c5;'>&#xf1c5; fa-file-picture-o</option>
                                                <option value='&#xf1c4;'>&#xf1c4; fa-file-powerpoint-o</option>
                                                <option value='&#xf1c7;'>&#xf1c7; fa-file-sound-o</option>
                                                <option value='&#xf15c;'>&#xf15c; fa-file-text</option>
                                                <option value='&#xf0f6;'>&#xf0f6; fa-file-text-o</option>
                                                <option value='&#xf1c8;'>&#xf1c8; fa-file-video-o</option>
                                                <option value='&#xf1c2;'>&#xf1c2; fa-file-word-o</option>
                                                <option value='&#xf1c6;'>&#xf1c6; fa-file-zip-o</option>
                                                <option value='&#xf0c5;'>&#xf0c5; fa-files-o</option>
                                                <option value='&#xf008;'>&#xf008; fa-film</option>
                                                <option value='&#xf0b0;'>&#xf0b0; fa-filter</option>
                                                <option value='&#xf06d;'>&#xf06d; fa-fire</option>
                                                <option value='&#xf134;'>&#xf134; fa-fire-extinguisher</option>
                                                <option value='&#xf269;'>&#xf269; fa-firefox</option>
                                                <option value='&#xf2b0;'>&#xf2b0; fa-first-order</option>
                                                <option value='&#xf024;'>&#xf024; fa-flag</option>
                                                <option value='&#xf11e;'>&#xf11e; fa-flag-checkered</option>
                                                <option value='&#xf11d;'>&#xf11d; fa-flag-o</option>
                                                <option value='&#xf0e7;'>&#xf0e7; fa-flash</option>
                                                <option value='&#xf0c3;'>&#xf0c3; fa-flask</option>
                                                <option value='&#xf16e;'>&#xf16e; fa-flickr</option>
                                                <option value='&#xf0c7;'>&#xf0c7; fa-floppy-o</option>
                                                <option value='&#xf07b;'>&#xf07b; fa-folder</option>
                                                <option value='&#xf114;'>&#xf114; fa-folder-o</option>
                                                <option value='&#xf07c;'>&#xf07c; fa-folder-open</option>
                                                <option value='&#xf115;'>&#xf115; fa-folder-open-o</option>
                                                <option value='&#xf031;'>&#xf031; fa-font</option>
                                                <option value='&#xf2b4;'>&#xf2b4; fa-font-awesome</option>
                                                <option value='&#xf280;'>&#xf280; fa-fonticons</option>
                                                <option value='&#xf286;'>&#xf286; fa-fort-awesome</option>
                                                <option value='&#xf211;'>&#xf211; fa-forumbee</option>
                                                <option value='&#xf04e;'>&#xf04e; fa-forward</option>
                                                <option value='&#xf180;'>&#xf180; fa-foursquare</option>
                                                <option value='&#xf2c5;'>&#xf2c5; fa-free-code-camp</option>
                                                <option value='&#xf119;'>&#xf119; fa-frown-o</option>
                                                <option value='&#xf1e3;'>&#xf1e3; fa-futbol-o</option>
                                                <option value='&#xf11b;'>&#xf11b; fa-gamepad</option>
                                                <option value='&#xf0e3;'>&#xf0e3; fa-gavel</option>
                                                <option value='&#xf154;'>&#xf154; fa-gbp</option>
                                                <option value='&#xf1d1;'>&#xf1d1; fa-ge</option>
                                                <option value='&#xf013;'>&#xf013; fa-gear</option>
                                                <option value='&#xf085;'>&#xf085; fa-gears</option>
                                                <option value='&#xf22d;'>&#xf22d; fa-genderless</option>
                                                <option value='&#xf265;'>&#xf265; fa-get-pocket</option>
                                                <option value='&#xf260;'>&#xf260; fa-gg</option>
                                                <option value='&#xf261;'>&#xf261; fa-gg-circle</option>
                                                <option value='&#xf06b;'>&#xf06b; fa-gift</option>
                                                <option value='&#xf1d3;'>&#xf1d3; fa-git</option>
                                                <option value='&#xf1d2;'>&#xf1d2; fa-git-square</option>
                                                <option value='&#xf09b;'>&#xf09b; fa-github</option>
                                                <option value='&#xf113;'>&#xf113; fa-github-alt</option>
                                                <option value='&#xf092;'>&#xf092; fa-github-square</option>
                                                <option value='&#xf296;'>&#xf296; fa-gitlab</option>
                                                <option value='&#xf184;'>&#xf184; fa-gittip</option>
                                                <option value='&#xf000;'>&#xf000; fa-glass</option>
                                                <option value='&#xf2a5;'>&#xf2a5; fa-glide</option>
                                                <option value='&#xf2a6;'>&#xf2a6; fa-glide-g</option>
                                                <option value='&#xf0ac;'>&#xf0ac; fa-globe</option>
                                                <option value='&#xf1a0;'>&#xf1a0; fa-google</option>
                                                <option value='&#xf0d5;'>&#xf0d5; fa-google-plus</option>
                                                <option value='&#xf2b3;'>&#xf2b3; fa-google-plus-circle</option>
                                                <option value='&#xf2b3;'>&#xf2b3; fa-google-plus-official</option>
                                                <option value='&#xf0d4;'>&#xf0d4; fa-google-plus-square</option>
                                                <option value='&#xf1ee;'>&#xf1ee; fa-google-wallet</option>
                                                <option value='&#xf19d;'>&#xf19d; fa-graduation-cap</option>
                                                <option value='&#xf184;'>&#xf184; fa-gratipay</option>
                                                <option value='&#xf2d6;'>&#xf2d6; fa-grav</option>
                                                <option value='&#xf0c0;'>&#xf0c0; fa-group</option>
                                                <option value='&#xf0fd;'>&#xf0fd; fa-h-square</option>
                                                <option value='&#xf1d4;'>&#xf1d4; fa-hacker-news</option>
                                                <option value='&#xf255;'>&#xf255; fa-hand-grab-o</option>
                                                <option value='&#xf258;'>&#xf258; fa-hand-lizard-o</option>
                                                <option value='&#xf0a7;'>&#xf0a7; fa-hand-o-down</option>
                                                <option value='&#xf0a5;'>&#xf0a5; fa-hand-o-left</option>
                                                <option value='&#xf0a4;'>&#xf0a4; fa-hand-o-right</option>
                                                <option value='&#xf0a6;'>&#xf0a6; fa-hand-o-up</option>
                                                <option value='&#xf256;'>&#xf256; fa-hand-paper-o</option>
                                                <option value='&#xf25b;'>&#xf25b; fa-hand-peace-o</option>
                                                <option value='&#xf25a;'>&#xf25a; fa-hand-pointer-o</option>
                                                <option value='&#xf255;'>&#xf255; fa-hand-rock-o</option>
                                                <option value='&#xf257;'>&#xf257; fa-hand-scissors-o</option>
                                                <option value='&#xf259;'>&#xf259; fa-hand-spock-o</option>
                                                <option value='&#xf256;'>&#xf256; fa-hand-stop-o</option>
                                                <option value='&#xf2b5;'>&#xf2b5; fa-handshake-o</option>
                                                <option value='&#xf2a4;'>&#xf2a4; fa-hard-of-hearing</option>
                                                <option value='&#xf292;'>&#xf292; fa-hashtag</option>
                                                <option value='&#xf0a0;'>&#xf0a0; fa-hdd-o</option>
                                                <option value='&#xf1dc;'>&#xf1dc; fa-header</option>
                                                <option value='&#xf025;'>&#xf025; fa-headphones</option>
                                                <option value='&#xf004;'>&#xf004; fa-heart</option>
                                                <option value='&#xf08a;'>&#xf08a; fa-heart-o</option>
                                                <option value='&#xf21e;'>&#xf21e; fa-heartbeat</option>
                                                <option value='&#xf1da;'>&#xf1da; fa-history</option>
                                                <option value='&#xf015;'>&#xf015; fa-home</option>
                                                <option value='&#xf0f8;'>&#xf0f8; fa-hospital-o</option>
                                                <option value='&#xf236;'>&#xf236; fa-hotel</option>
                                                <option value='&#xf254;'>&#xf254; fa-hourglass</option>
                                                <option value='&#xf251;'>&#xf251; fa-hourglass-1</option>
                                                <option value='&#xf252;'>&#xf252; fa-hourglass-2</option>
                                                <option value='&#xf253;'>&#xf253; fa-hourglass-3</option>
                                                <option value='&#xf253;'>&#xf253; fa-hourglass-end</option>
                                                <option value='&#xf252;'>&#xf252; fa-hourglass-half</option>
                                                <option value='&#xf250;'>&#xf250; fa-hourglass-o</option>
                                                <option value='&#xf251;'>&#xf251; fa-hourglass-start</option>
                                                <option value='&#xf27c;'>&#xf27c; fa-houzz</option>
                                                <option value='&#xf13b;'>&#xf13b; fa-html5</option>
                                                <option value='&#xf246;'>&#xf246; fa-i-cursor</option>
                                                <option value='&#xf2c1;'>&#xf2c1; fa-id-badge</option>
                                                <option value='&#xf2c2;'>&#xf2c2; fa-id-card</option>
                                                <option value='&#xf2c3;'>&#xf2c3; fa-id-card-o</option>
                                                <option value='&#xf20b;'>&#xf20b; fa-ils</option>
                                                <option value='&#xf03e;'>&#xf03e; fa-image</option>
                                                <option value='&#xf2d8;'>&#xf2d8; fa-imdb</option>
                                                <option value='&#xf01c;'>&#xf01c; fa-inbox</option>
                                                <option value='&#xf03c;'>&#xf03c; fa-indent</option>
                                                <option value='&#xf275;'>&#xf275; fa-industry</option>
                                                <option value='&#xf129;'>&#xf129; fa-info</option>
                                                <option value='&#xf05a;'>&#xf05a; fa-info-circle</option>
                                                <option value='&#xf156;'>&#xf156; fa-inr</option>
                                                <option value='&#xf16d;'>&#xf16d; fa-instagram</option>
                                                <option value='&#xf19c;'>&#xf19c; fa-institution</option>
                                                <option value='&#xf26b;'>&#xf26b; fa-internet-explorer</option>
                                                <option value='&#xf224;'>&#xf224; fa-intersex</option>
                                                <option value='&#xf208;'>&#xf208; fa-ioxhost</option>
                                                <option value='&#xf033;'>&#xf033; fa-italic</option>
                                                <option value='&#xf1aa;'>&#xf1aa; fa-joomla</option>
                                                <option value='&#xf157;'>&#xf157; fa-jpy</option>
                                                <option value='&#xf1cc;'>&#xf1cc; fa-jsfiddle</option>
                                                <option value='&#xf084;'>&#xf084; fa-key</option>
                                                <option value='&#xf11c;'>&#xf11c; fa-keyboard-o</option>
                                                <option value='&#xf159;'>&#xf159; fa-krw</option>
                                                <option value='&#xf1ab;'>&#xf1ab; fa-language</option>
                                                <option value='&#xf109;'>&#xf109; fa-laptop</option>
                                                <option value='&#xf202;'>&#xf202; fa-lastfm</option>
                                                <option value='&#xf203;'>&#xf203; fa-lastfm-square</option>
                                                <option value='&#xf06c;'>&#xf06c; fa-leaf</option>
                                                <option value='&#xf212;'>&#xf212; fa-leanpub</option>
                                                <option value='&#xf0e3;'>&#xf0e3; fa-legal</option>
                                                <option value='&#xf094;'>&#xf094; fa-lemon-o</option>
                                                <option value='&#xf149;'>&#xf149; fa-level-down</option>
                                                <option value='&#xf148;'>&#xf148; fa-level-up</option>
                                                <option value='&#xf1cd;'>&#xf1cd; fa-life-bouy</option>
                                                <option value='&#xf1cd;'>&#xf1cd; fa-life-buoy</option>
                                                <option value='&#xf1cd;'>&#xf1cd; fa-life-ring</option>
                                                <option value='&#xf1cd;'>&#xf1cd; fa-life-saver</option>
                                                <option value='&#xf0eb;'>&#xf0eb; fa-lightbulb-o</option>
                                                <option value='&#xf201;'>&#xf201; fa-line-chart</option>
                                                <option value='&#xf0c1;'>&#xf0c1; fa-link</option>
                                                <option value='&#xf0e1;'>&#xf0e1; fa-linkedin</option>
                                                <option value='&#xf08c;'>&#xf08c; fa-linkedin-square</option>
                                                <option value='&#xf2b8;'>&#xf2b8; fa-linode</option>
                                                <option value='&#xf17c;'>&#xf17c; fa-linux</option>
                                                <option value='&#xf03a;'>&#xf03a; fa-list</option>
                                                <option value='&#xf022;'>&#xf022; fa-list-alt</option>
                                                <option value='&#xf0cb;'>&#xf0cb; fa-list-ol</option>
                                                <option value='&#xf0ca;'>&#xf0ca; fa-list-ul</option>
                                                <option value='&#xf124;'>&#xf124; fa-location-arrow</option>
                                                <option value='&#xf023;'>&#xf023; fa-lock</option>
                                                <option value='&#xf175;'>&#xf175; fa-long-arrow-down</option>
                                                <option value='&#xf177;'>&#xf177; fa-long-arrow-left</option>
                                                <option value='&#xf178;'>&#xf178; fa-long-arrow-right</option>
                                                <option value='&#xf176;'>&#xf176; fa-long-arrow-up</option>
                                                <option value='&#xf2a8;'>&#xf2a8; fa-low-vision</option>
                                                <option value='&#xf0d0;'>&#xf0d0; fa-magic</option>
                                                <option value='&#xf076;'>&#xf076; fa-magnet</option>
                                                <option value='&#xf064;'>&#xf064; fa-mail-forward</option>
                                                <option value='&#xf112;'>&#xf112; fa-mail-reply</option>
                                                <option value='&#xf122;'>&#xf122; fa-mail-reply-all</option>
                                                <option value='&#xf183;'>&#xf183; fa-male</option>
                                                <option value='&#xf279;'>&#xf279; fa-map</option>
                                                <option value='&#xf041;'>&#xf041; fa-map-marker</option>
                                                <option value='&#xf278;'>&#xf278; fa-map-o</option>
                                                <option value='&#xf276;'>&#xf276; fa-map-pin</option>
                                                <option value='&#xf277;'>&#xf277; fa-map-signs</option>
                                                <option value='&#xf222;'>&#xf222; fa-mars</option>
                                                <option value='&#xf227;'>&#xf227; fa-mars-double</option>
                                                <option value='&#xf229;'>&#xf229; fa-mars-stroke</option>
                                                <option value='&#xf22b;'>&#xf22b; fa-mars-stroke-h</option>
                                                <option value='&#xf22a;'>&#xf22a; fa-mars-stroke-v</option>
                                                <option value='&#xf136;'>&#xf136; fa-maxcdn</option>
                                                <option value='&#xf20c;'>&#xf20c; fa-meanpath</option>
                                                <option value='&#xf23a;'>&#xf23a; fa-medium</option>
                                                <option value='&#xf0fa;'>&#xf0fa; fa-medkit</option>
                                                <option value='&#xf2e0;'>&#xf2e0; fa-meetup</option>
                                                <option value='&#xf11a;'>&#xf11a; fa-meh-o</option>
                                                <option value='&#xf223;'>&#xf223; fa-mercury</option>
                                                <option value='&#xf2db;'>&#xf2db; fa-microchip</option>
                                                <option value='&#xf130;'>&#xf130; fa-microphone</option>
                                                <option value='&#xf131;'>&#xf131; fa-microphone-slash</option>
                                                <option value='&#xf068;'>&#xf068; fa-minus</option>
                                                <option value='&#xf056;'>&#xf056; fa-minus-circle</option>
                                                <option value='&#xf146;'>&#xf146; fa-minus-square</option>
                                                <option value='&#xf147;'>&#xf147; fa-minus-square-o</option>
                                                <option value='&#xf289;'>&#xf289; fa-mixcloud</option>
                                                <option value='&#xf10b;'>&#xf10b; fa-mobile</option>
                                                <option value='&#xf10b;'>&#xf10b; fa-mobile-phone</option>
                                                <option value='&#xf285;'>&#xf285; fa-modx</option>
                                                <option value='&#xf0d6;'>&#xf0d6; fa-money</option>
                                                <option value='&#xf186;'>&#xf186; fa-moon-o</option>
                                                <option value='&#xf19d;'>&#xf19d; fa-mortar-board</option>
                                                <option value='&#xf21c;'>&#xf21c; fa-motorcycle</option>
                                                <option value='&#xf245;'>&#xf245; fa-mouse-pointer</option>
                                                <option value='&#xf001;'>&#xf001; fa-music</option>
                                                <option value='&#xf0c9;'>&#xf0c9; fa-navicon</option>
                                                <option value='&#xf22c;'>&#xf22c; fa-neuter</option>
                                                <option value='&#xf1ea;'>&#xf1ea; fa-newspaper-o</option>
                                                <option value='&#xf247;'>&#xf247; fa-object-group</option>
                                                <option value='&#xf248;'>&#xf248; fa-object-ungroup</option>
                                                <option value='&#xf263;'>&#xf263; fa-odnoklassniki</option>
                                                <option value='&#xf264;'>&#xf264; fa-odnoklassniki-square</option>
                                                <option value='&#xf23d;'>&#xf23d; fa-opencart</option>
                                                <option value='&#xf19b;'>&#xf19b; fa-openid</option>
                                                <option value='&#xf26a;'>&#xf26a; fa-opera</option>
                                                <option value='&#xf23c;'>&#xf23c; fa-optin-monster</option>
                                                <option value='&#xf03b;'>&#xf03b; fa-outdent</option>
                                                <option value='&#xf18c;'>&#xf18c; fa-pagelines</option>
                                                <option value='&#xf1fc;'>&#xf1fc; fa-paint-brush</option>
                                                <option value='&#xf1d8;'>&#xf1d8; fa-paper-plane</option>
                                                <option value='&#xf1d9;'>&#xf1d9; fa-paper-plane-o</option>
                                                <option value='&#xf0c6;'>&#xf0c6; fa-paperclip</option>
                                                <option value='&#xf1dd;'>&#xf1dd; fa-paragraph</option>
                                                <option value='&#xf0ea;'>&#xf0ea; fa-paste</option>
                                                <option value='&#xf04c;'>&#xf04c; fa-pause</option>
                                                <option value='&#xf28b;'>&#xf28b; fa-pause-circle</option>
                                                <option value='&#xf28c;'>&#xf28c; fa-pause-circle-o</option>
                                                <option value='&#xf1b0;'>&#xf1b0; fa-paw</option>
                                                <option value='&#xf1ed;'>&#xf1ed; fa-paypal</option>
                                                <option value='&#xf040;'>&#xf040; fa-pencil</option>
                                                <option value='&#xf14b;'>&#xf14b; fa-pencil-square</option>
                                                <option value='&#xf044;'>&#xf044; fa-pencil-square-o</option>
                                                <option value='&#xf295;'>&#xf295; fa-percent</option>
                                                <option value='&#xf095;'>&#xf095; fa-phone</option>
                                                <option value='&#xf098;'>&#xf098; fa-phone-square</option>
                                                <option value='&#xf03e;'>&#xf03e; fa-photo</option>
                                                <option value='&#xf03e;'>&#xf03e; fa-picture-o</option>
                                                <option value='&#xf200;'>&#xf200; fa-pie-chart</option>
                                                <option value='&#xf2ae;'>&#xf2ae; fa-pied-piper</option>
                                                <option value='&#xf1a8;'>&#xf1a8; fa-pied-piper-alt</option>
                                                <option value='&#xf1a7;'>&#xf1a7; fa-pied-piper-pp</option>
                                                <option value='&#xf0d2;'>&#xf0d2; fa-pinterest</option>
                                                <option value='&#xf231;'>&#xf231; fa-pinterest-p</option>
                                                <option value='&#xf0d3;'>&#xf0d3; fa-pinterest-square</option>
                                                <option value='&#xf072;'>&#xf072; fa-plane</option>
                                                <option value='&#xf04b;'>&#xf04b; fa-play</option>
                                                <option value='&#xf144;'>&#xf144; fa-play-circle</option>
                                                <option value='&#xf01d;'>&#xf01d; fa-play-circle-o</option>
                                                <option value='&#xf1e6;'>&#xf1e6; fa-plug</option>
                                                <option value='&#xf067;'>&#xf067; fa-plus</option>
                                                <option value='&#xf055;'>&#xf055; fa-plus-circle</option>
                                                <option value='&#xf0fe;'>&#xf0fe; fa-plus-square</option>
                                                <option value='&#xf196;'>&#xf196; fa-plus-square-o</option>
                                                <option value='&#xf2ce;'>&#xf2ce; fa-podcast</option>
                                                <option value='&#xf011;'>&#xf011; fa-power-off</option>
                                                <option value='&#xf02f;'>&#xf02f; fa-print</option>
                                                <option value='&#xf288;'>&#xf288; fa-product-hunt</option>
                                                <option value='&#xf12e;'>&#xf12e; fa-puzzle-piece</option>
                                                <option value='&#xf1d6;'>&#xf1d6; fa-qq</option>
                                                <option value='&#xf029;'>&#xf029; fa-qrcode</option>
                                                <option value='&#xf128;'>&#xf128; fa-question</option>
                                                <option value='&#xf059;'>&#xf059; fa-question-circle</option>
                                                <option value='&#xf29c;'>&#xf29c; fa-question-circle-o</option>
                                                <option value='&#xf2c4;'>&#xf2c4; fa-quora</option>
                                                <option value='&#xf10d;'>&#xf10d; fa-quote-left</option>
                                                <option value='&#xf10e;'>&#xf10e; fa-quote-right</option>
                                                <option value='&#xf1d0;'>&#xf1d0; fa-ra</option>
                                                <option value='&#xf074;'>&#xf074; fa-random</option>
                                                <option value='&#xf2d9;'>&#xf2d9; fa-ravelry</option>
                                                <option value='&#xf1d0;'>&#xf1d0; fa-rebel</option>
                                                <option value='&#xf1b8;'>&#xf1b8; fa-recycle</option>
                                                <option value='&#xf1a1;'>&#xf1a1; fa-reddit</option>
                                                <option value='&#xf1a2;'>&#xf1a2; fa-reddit-square</option>
                                                <option value='&#xf021;'>&#xf021; fa-refresh</option>
                                                <option value='&#xf25d;'>&#xf25d; fa-registered</option>
                                                <option value='&#xf00d;'>&#xf00d; fa-remove</option>
                                                <option value='&#xf18b;'>&#xf18b; fa-renren</option>
                                                <option value='&#xf0c9;'>&#xf0c9; fa-reorder</option>
                                                <option value='&#xf01e;'>&#xf01e; fa-repeat</option>
                                                <option value='&#xf112;'>&#xf112; fa-reply</option>
                                                <option value='&#xf122;'>&#xf122; fa-reply-all</option>
                                                <option value='&#xf1d0;'>&#xf1d0; fa-resistance</option>
                                                <option value='&#xf079;'>&#xf079; fa-retweet</option>
                                                <option value='&#xf157;'>&#xf157; fa-rmb</option>
                                                <option value='&#xf018;'>&#xf018; fa-road</option>
                                                <option value='&#xf135;'>&#xf135; fa-rocket</option>
                                                <option value='&#xf0e2;'>&#xf0e2; fa-rotate-left</option>
                                                <option value='&#xf01e;'>&#xf01e; fa-rotate-right</option>
                                                <option value='&#xf158;'>&#xf158; fa-rouble</option>
                                                <option value='&#xf09e;'>&#xf09e; fa-rss</option>
                                                <option value='&#xf143;'>&#xf143; fa-rss-square</option>
                                                <option value='&#xf158;'>&#xf158; fa-rub</option>
                                                <option value='&#xf158;'>&#xf158; fa-ruble</option>
                                                <option value='&#xf156;'>&#xf156; fa-rupee</option>
                                                <option value='&#xf2cd;'>&#xf2cd; fa-s15</option>
                                                <option value='&#xf267;'>&#xf267; fa-safari</option>
                                                <option value='&#xf0c7;'>&#xf0c7; fa-save</option>
                                                <option value='&#xf0c4;'>&#xf0c4; fa-scissors</option>
                                                <option value='&#xf28a;'>&#xf28a; fa-scribd</option>
                                                <option value='&#xf002;'>&#xf002; fa-search</option>
                                                <option value='&#xf010;'>&#xf010; fa-search-minus</option>
                                                <option value='&#xf00e;'>&#xf00e; fa-search-plus</option>
                                                <option value='&#xf213;'>&#xf213; fa-sellsy</option>
                                                <option value='&#xf1d8;'>&#xf1d8; fa-send</option>
                                                <option value='&#xf1d9;'>&#xf1d9; fa-send-o</option>
                                                <option value='&#xf233;'>&#xf233; fa-server</option>
                                                <option value='&#xf064;'>&#xf064; fa-share</option>
                                                <option value='&#xf1e0;'>&#xf1e0; fa-share-alt</option>
                                                <option value='&#xf1e1;'>&#xf1e1; fa-share-alt-square</option>
                                                <option value='&#xf14d;'>&#xf14d; fa-share-square</option>
                                                <option value='&#xf045;'>&#xf045; fa-share-square-o</option>
                                                <option value='&#xf20b;'>&#xf20b; fa-shekel</option>
                                                <option value='&#xf20b;'>&#xf20b; fa-sheqel</option>
                                                <option value='&#xf132;'>&#xf132; fa-shield</option>
                                                <option value='&#xf21a;'>&#xf21a; fa-ship</option>
                                                <option value='&#xf214;'>&#xf214; fa-shirtsinbulk</option>
                                                <option value='&#xf290;'>&#xf290; fa-shopping-bag</option>
                                                <option value='&#xf291;'>&#xf291; fa-shopping-basket</option>
                                                <option value='&#xf07a;'>&#xf07a; fa-shopping-cart</option>
                                                <option value='&#xf2cc;'>&#xf2cc; fa-shower</option>
                                                <option value='&#xf090;'>&#xf090; fa-sign-in</option>
                                                <option value='&#xf2a7;'>&#xf2a7; fa-sign-language</option>
                                                <option value='&#xf08b;'>&#xf08b; fa-sign-out</option>
                                                <option value='&#xf012;'>&#xf012; fa-signal</option>
                                                <option value='&#xf2a7;'>&#xf2a7; fa-signing</option>
                                                <option value='&#xf215;'>&#xf215; fa-simplybuilt</option>
                                                <option value='&#xf0e8;'>&#xf0e8; fa-sitemap</option>
                                                <option value='&#xf216;'>&#xf216; fa-skyatlas</option>
                                                <option value='&#xf17e;'>&#xf17e; fa-skype</option>
                                                <option value='&#xf198;'>&#xf198; fa-slack</option>
                                                <option value='&#xf1de;'>&#xf1de; fa-sliders</option>
                                                <option value='&#xf1e7;'>&#xf1e7; fa-slideshare</option>
                                                <option value='&#xf118;'>&#xf118; fa-smile-o</option>
                                                <option value='&#xf2ab;'>&#xf2ab; fa-snapchat</option>
                                                <option value='&#xf2ac;'>&#xf2ac; fa-snapchat-ghost</option>
                                                <option value='&#xf2ad;'>&#xf2ad; fa-snapchat-square</option>
                                                <option value='&#xf2dc;'>&#xf2dc; fa-snowflake-o</option>
                                                <option value='&#xf1e3;'>&#xf1e3; fa-soccer-ball-o</option>
                                                <option value='&#xf0dc;'>&#xf0dc; fa-sort</option>
                                                <option value='&#xf15d;'>&#xf15d; fa-sort-alpha-asc</option>
                                                <option value='&#xf15e;'>&#xf15e; fa-sort-alpha-desc</option>
                                                <option value='&#xf160;'>&#xf160; fa-sort-amount-asc</option>
                                                <option value='&#xf161;'>&#xf161; fa-sort-amount-desc</option>
                                                <option value='&#xf0de;'>&#xf0de; fa-sort-asc</option>
                                                <option value='&#xf0dd;'>&#xf0dd; fa-sort-desc</option>
                                                <option value='&#xf0dd;'>&#xf0dd; fa-sort-down</option>
                                                <option value='&#xf162;'>&#xf162; fa-sort-numeric-asc</option>
                                                <option value='&#xf163;'>&#xf163; fa-sort-numeric-desc</option>
                                                <option value='&#xf0de;'>&#xf0de; fa-sort-up</option>
                                                <option value='&#xf1be;'>&#xf1be; fa-soundcloud</option>
                                                <option value='&#xf197;'>&#xf197; fa-space-shuttle</option>
                                                <option value='&#xf110;'>&#xf110; fa-spinner</option>
                                                <option value='&#xf1b1;'>&#xf1b1; fa-spoon</option>
                                                <option value='&#xf1bc;'>&#xf1bc; fa-spotify</option>
                                                <option value='&#xf0c8;'>&#xf0c8; fa-square</option>
                                                <option value='&#xf096;'>&#xf096; fa-square-o</option>
                                                <option value='&#xf18d;'>&#xf18d; fa-stack-exchange</option>
                                                <option value='&#xf16c;'>&#xf16c; fa-stack-overflow</option>
                                                <option value='&#xf005;'>&#xf005; fa-star</option>
                                                <option value='&#xf089;'>&#xf089; fa-star-half</option>
                                                <option value='&#xf123;'>&#xf123; fa-star-half-empty</option>
                                                <option value='&#xf123;'>&#xf123; fa-star-half-full</option>
                                                <option value='&#xf123;'>&#xf123; fa-star-half-o</option>
                                                <option value='&#xf006;'>&#xf006; fa-star-o</option>
                                                <option value='&#xf1b6;'>&#xf1b6; fa-steam</option>
                                                <option value='&#xf1b7;'>&#xf1b7; fa-steam-square</option>
                                                <option value='&#xf048;'>&#xf048; fa-step-backward</option>
                                                <option value='&#xf051;'>&#xf051; fa-step-forward</option>
                                                <option value='&#xf0f1;'>&#xf0f1; fa-stethoscope</option>
                                                <option value='&#xf249;'>&#xf249; fa-sticky-note</option>
                                                <option value='&#xf24a;'>&#xf24a; fa-sticky-note-o</option>
                                                <option value='&#xf04d;'>&#xf04d; fa-stop</option>
                                                <option value='&#xf28d;'>&#xf28d; fa-stop-circle</option>
                                                <option value='&#xf28e;'>&#xf28e; fa-stop-circle-o</option>
                                                <option value='&#xf21d;'>&#xf21d; fa-street-view</option>
                                                <option value='&#xf0cc;'>&#xf0cc; fa-strikethrough</option>
                                                <option value='&#xf1a4;'>&#xf1a4; fa-stumbleupon</option>
                                                <option value='&#xf1a3;'>&#xf1a3; fa-stumbleupon-circle</option>
                                                <option value='&#xf12c;'>&#xf12c; fa-subscript</option>
                                                <option value='&#xf239;'>&#xf239; fa-subway</option>
                                                <option value='&#xf0f2;'>&#xf0f2; fa-suitcase</option>
                                                <option value='&#xf185;'>&#xf185; fa-sun-o</option>
                                                <option value='&#xf2dd;'>&#xf2dd; fa-superpowers</option>
                                                <option value='&#xf12b;'>&#xf12b; fa-superscript</option>
                                                <option value='&#xf1cd;'>&#xf1cd; fa-support</option>
                                                <option value='&#xf0ce;'>&#xf0ce; fa-table</option>
                                                <option value='&#xf10a;'>&#xf10a; fa-tablet</option>
                                                <option value='&#xf0e4;'>&#xf0e4; fa-tachometer</option>
                                                <option value='&#xf02b;'>&#xf02b; fa-tag</option>
                                                <option value='&#xf02c;'>&#xf02c; fa-tags</option>
                                                <option value='&#xf0ae;'>&#xf0ae; fa-tasks</option>
                                                <option value='&#xf1ba;'>&#xf1ba; fa-taxi</option>
                                                <option value='&#xf2c6;'>&#xf2c6; fa-telegram</option>
                                                <option value='&#xf26c;'>&#xf26c; fa-television</option>
                                                <option value='&#xf1d5;'>&#xf1d5; fa-tencent-weibo</option>
                                                <option value='&#xf120;'>&#xf120; fa-terminal</option>
                                                <option value='&#xf034;'>&#xf034; fa-text-height</option>
                                                <option value='&#xf035;'>&#xf035; fa-text-width</option>
                                                <option value='&#xf00a;'>&#xf00a; fa-th</option>
                                                <option value='&#xf009;'>&#xf009; fa-th-large</option>
                                                <option value='&#xf00b;'>&#xf00b; fa-th-list</option>
                                                <option value='&#xf2b2;'>&#xf2b2; fa-themeisle</option>
                                                <option value='&#xf2c7;'>&#xf2c7; fa-thermometer</option>
                                                <option value='&#xf2cb;'>&#xf2cb; fa-thermometer-0</option>
                                                <option value='&#xf2ca;'>&#xf2ca; fa-thermometer-1</option>
                                                <option value='&#xf2c9;'>&#xf2c9; fa-thermometer-2</option>
                                                <option value='&#xf2c8;'>&#xf2c8; fa-thermometer-3</option>
                                                <option value='&#xf2c7;'>&#xf2c7; fa-thermometer-4</option>
                                                <option value='&#xf2cb;'>&#xf2cb; fa-thermometer-empty</option>
                                                <option value='&#xf2c7;'>&#xf2c7; fa-thermometer-full</option>
                                                <option value='&#xf2c9;'>&#xf2c9; fa-thermometer-half</option>
                                                <option value='&#xf2ca;'>&#xf2ca; fa-thermometer-quarter</option>
                                                <option value='&#xf2c8;'>&#xf2c8; fa-thermometer-three-quarters</option>
                                                <option value='&#xf08d;'>&#xf08d; fa-thumb-tack</option>
                                                <option value='&#xf165;'>&#xf165; fa-thumbs-down</option>
                                                <option value='&#xf088;'>&#xf088; fa-thumbs-o-down</option>
                                                <option value='&#xf087;'>&#xf087; fa-thumbs-o-up</option>
                                                <option value='&#xf164;'>&#xf164; fa-thumbs-up</option>
                                                <option value='&#xf145;'>&#xf145; fa-ticket</option>
                                                <option value='&#xf00d;'>&#xf00d; fa-times</option>
                                                <option value='&#xf057;'>&#xf057; fa-times-circle</option>
                                                <option value='&#xf05c;'>&#xf05c; fa-times-circle-o</option>
                                                <option value='&#xf2d3;'>&#xf2d3; fa-times-rectangle</option>
                                                <option value='&#xf2d4;'>&#xf2d4; fa-times-rectangle-o</option>
                                                <option value='&#xf043;'>&#xf043; fa-tint</option>
                                                <option value='&#xf150;'>&#xf150; fa-toggle-down</option>
                                                <option value='&#xf191;'>&#xf191; fa-toggle-left</option>
                                                <option value='&#xf204;'>&#xf204; fa-toggle-off</option>
                                                <option value='&#xf205;'>&#xf205; fa-toggle-on</option>
                                                <option value='&#xf152;'>&#xf152; fa-toggle-right</option>
                                                <option value='&#xf151;'>&#xf151; fa-toggle-up</option>
                                                <option value='&#xf25c;'>&#xf25c; fa-trademark</option>
                                                <option value='&#xf238;'>&#xf238; fa-train</option>
                                                <option value='&#xf224;'>&#xf224; fa-transgender</option>
                                                <option value='&#xf225;'>&#xf225; fa-transgender-alt</option>
                                                <option value='&#xf1f8;'>&#xf1f8; fa-trash</option>
                                                <option value='&#xf014;'>&#xf014; fa-trash-o</option>
                                                <option value='&#xf1bb;'>&#xf1bb; fa-tree</option>
                                                <option value='&#xf181;'>&#xf181; fa-trello</option>
                                                <option value='&#xf262;'>&#xf262; fa-tripadvisor</option>
                                                <option value='&#xf091;'>&#xf091; fa-trophy</option>
                                                <option value='&#xf0d1;'>&#xf0d1; fa-truck</option>
                                                <option value='&#xf195;'>&#xf195; fa-try</option>
                                                <option value='&#xf1e4;'>&#xf1e4; fa-tty</option>
                                                <option value='&#xf173;'>&#xf173; fa-tumblr</option>
                                                <option value='&#xf174;'>&#xf174; fa-tumblr-square</option>
                                                <option value='&#xf195;'>&#xf195; fa-turkish-lira</option>
                                                <option value='&#xf26c;'>&#xf26c; fa-tv</option>
                                                <option value='&#xf1e8;'>&#xf1e8; fa-twitch</option>
                                                <option value='&#xf099;'>&#xf099; fa-twitter</option>
                                                <option value='&#xf081;'>&#xf081; fa-twitter-square</option>
                                                <option value='&#xf0e9;'>&#xf0e9; fa-umbrella</option>
                                                <option value='&#xf0cd;'>&#xf0cd; fa-underline</option>
                                                <option value='&#xf0e2;'>&#xf0e2; fa-undo</option>
                                                <option value='&#xf29a;'>&#xf29a; fa-universal-access</option>
                                                <option value='&#xf19c;'>&#xf19c; fa-university</option>
                                                <option value='&#xf127;'>&#xf127; fa-unlink</option>
                                                <option value='&#xf09c;'>&#xf09c; fa-unlock</option>
                                                <option value='&#xf13e;'>&#xf13e; fa-unlock-alt</option>
                                                <option value='&#xf0dc;'>&#xf0dc; fa-unsorted</option>
                                                <option value='&#xf093;'>&#xf093; fa-upload</option>
                                                <option value='&#xf287;'>&#xf287; fa-usb</option>
                                                <option value='&#xf155;'>&#xf155; fa-usd</option>
                                                <option value='&#xf007;'>&#xf007; fa-user</option>
                                                <option value='&#xf2bd;'>&#xf2bd; fa-user-circle</option>
                                                <option value='&#xf2be;'>&#xf2be; fa-user-circle-o</option>
                                                <option value='&#xf0f0;'>&#xf0f0; fa-user-md</option>
                                                <option value='&#xf2c0;'>&#xf2c0; fa-user-o</option>
                                                <option value='&#xf234;'>&#xf234; fa-user-plus</option>
                                                <option value='&#xf21b;'>&#xf21b; fa-user-secret</option>
                                                <option value='&#xf235;'>&#xf235; fa-user-times</option>
                                                <option value='&#xf0c0;'>&#xf0c0; fa-users</option>
                                                <option value='&#xf2bb;'>&#xf2bb; fa-vcard</option>
                                                <option value='&#xf2bc;'>&#xf2bc; fa-vcard-o</option>
                                                <option value='&#xf221;'>&#xf221; fa-venus</option>
                                                <option value='&#xf226;'>&#xf226; fa-venus-double</option>
                                                <option value='&#xf228;'>&#xf228; fa-venus-mars</option>
                                                <option value='&#xf237;'>&#xf237; fa-viacoin</option>
                                                <option value='&#xf2a9;'>&#xf2a9; fa-viadeo</option>
                                                <option value='&#xf2aa;'>&#xf2aa; fa-viadeo-square</option>
                                                <option value='&#xf03d;'>&#xf03d; fa-video-camera</option>
                                                <option value='&#xf27d;'>&#xf27d; fa-vimeo</option>
                                                <option value='&#xf194;'>&#xf194; fa-vimeo-square</option>
                                                <option value='&#xf1ca;'>&#xf1ca; fa-vine</option>
                                                <option value='&#xf189;'>&#xf189; fa-vk</option>
                                                <option value='&#xf2a0;'>&#xf2a0; fa-volume-control-phone</option>
                                                <option value='&#xf027;'>&#xf027; fa-volume-down</option>
                                                <option value='&#xf026;'>&#xf026; fa-volume-off</option>
                                                <option value='&#xf028;'>&#xf028; fa-volume-up</option>
                                                <option value='&#xf071;'>&#xf071; fa-warning</option>
                                                <option value='&#xf1d7;'>&#xf1d7; fa-wechat</option>
                                                <option value='&#xf18a;'>&#xf18a; fa-weibo</option>
                                                <option value='&#xf1d7;'>&#xf1d7; fa-weixin</option>
                                                <option value='&#xf232;'>&#xf232; fa-whatsapp</option>
                                                <option value='&#xf193;'>&#xf193; fa-wheelchair</option>
                                                <option value='&#xf29b;'>&#xf29b; fa-wheelchair-alt</option>
                                                <option value='&#xf1eb;'>&#xf1eb; fa-wifi</option>
                                                <option value='&#xf266;'>&#xf266; fa-wikipedia-w</option>
                                                <option value='&#xf2d3;'>&#xf2d3; fa-window-close</option>
                                                <option value='&#xf2d4;'>&#xf2d4; fa-window-close-o</option>
                                                <option value='&#xf2d0;'>&#xf2d0; fa-window-maximize</option>
                                                <option value='&#xf2d1;'>&#xf2d1; fa-window-minimize</option>
                                                <option value='&#xf2d2;'>&#xf2d2; fa-window-restore</option>
                                                <option value='&#xf17a;'>&#xf17a; fa-windows</option>
                                                <option value='&#xf159;'>&#xf159; fa-won</option>
                                                <option value='&#xf19a;'>&#xf19a; fa-wordpress</option>
                                                <option value='&#xf297;'>&#xf297; fa-wpbeginner</option>
                                                <option value='&#xf2de;'>&#xf2de; fa-wpexplorer</option>
                                                <option value='&#xf298;'>&#xf298; fa-wpforms</option>
                                                <option value='&#xf0ad;'>&#xf0ad; fa-wrench</option>
                                                <option value='&#xf168;'>&#xf168; fa-xing</option>
                                                <option value='&#xf169;'>&#xf169; fa-xing-square</option>
                                                <option value='&#xf23b;'>&#xf23b; fa-y-combinator</option>
                                                <option value='&#xf1d4;'>&#xf1d4; fa-y-combinator-square</option>
                                                <option value='&#xf19e;'>&#xf19e; fa-yahoo</option>
                                                <option value='&#xf23b;'>&#xf23b; fa-yc</option>
                                                <option value='&#xf1d4;'>&#xf1d4; fa-yc-square</option>
                                                <option value='&#xf1e9;'>&#xf1e9; fa-yelp</option>
                                                <option value='&#xf157;'>&#xf157; fa-yen</option>
                                                <option value='&#xf2b1;'>&#xf2b1; fa-yoast</option>
                                                <option value='&#xf167;'>&#xf167; fa-youtube</option>
                                                <option value='&#xf16a;'>&#xf16a; fa-youtube-play</option>
                                                <option value='&#xf166;'>&#xf166; fa-youtube-square</option>
                                                                </select>
                                                            </div>

                                                            <!-- end incon ------------------------------>



                                                            <div class="m-t-10 ">
                                                                <h5><b>Image Uplaod</b></h5>
                                                                <input type="file" id="exampleInputFile" name="new_s_image" id="image"
                                                                    style="margin-top:10px;">
                                                                <img class="m-t-20" src="../upload/<?php echo $row['s_image']; ?>"
                                                                    alt="<?php echo $row['s_image']; ?>" style="margin-top:10px;margin-bottom:10px;"
                                                                    width="500" height="500" >
                                                                <input type="hidden" name="old_s_image" value="<?php echo $row['s_image']; ?>">
                                                                <div id="preview"></div>
                                                            </div>


                                                            <div class="m-t-10 ">
                                                                <h5><b>Key Points </b></h5>
                                                                <textarea id="textarea" class="form-control" maxlength="1000" rows="2"
                                                                    placeholder="separate by comma example : one ,two ,three" name="s_key_point"
                                                                    required><?php echo $row['s_key_point']; ?></textarea>
                                                            </div>

                                                            <div class="m-t-10 ">
                                                                <h5><b>Heading </b></h5>
                                                                <textarea id="textarea" class="form-control" maxlength="100" rows="2"
                                                                    placeholder="This Description has a limit of 100 chars." name="s_one_heading"
                                                                    required><?php echo $row['s_one_heading']; ?></textarea>
                                                            </div>

                                                            <div class="m-t-10 ">
                                                                <h5><b>Description </b></h5>
                                                                <textarea id="textarea" class="form-control" maxlength="2000" rows="2"
                                                                    placeholder="This Description has a limit of 2000 chars." name="s_one_paragraph"
                                                                    required><?php echo $row['s_one_paragraph']; ?></textarea>
                                                            </div>

                                                            <button type="submit" class="margin-top-20 btn btn-primary btn-sm waves-effect waves-light"
                                                                name="update">update</button>
                                                        </div>
                                                    </form>

                                                    <?php
                                                    $sql_new_h = "SELECT * FROM `services_advance` WHERE `s_id` = {$_GET['sid']}";


                                                    $result_new = mysqli_query($conn, $sql_new_h) or die("Query Faild update");

                                                    if (mysqli_num_rows($result_new) > 0) {

                                                        while ($newrow = mysqli_fetch_assoc($result_new)) {
                                                            ?>

                                                                            <!-- update heading and destiption -->
                                                                            <form action="service-advance-update.php" method="POST">

                                                                                <div class="padding-10">

                                                                                    <input type="hidden" name="sa_id" class="form-control" value="<?php echo $newrow['sa_id']; ?>">

                                                                                    <input type="hidden" name="s_id" class="form-control" value="<?php echo $newrow['s_id']; ?>">


                                                                                    <div class="m-t-10 ">
                                                                                        <h5><b>Heading </b></h5>
                                                                                        <textarea id="textarea" class="form-control" maxlength="100" rows="2"
                                                                                            placeholder="This Description has a limit of 100 chars." name="sa_heading"
                                                                                            required><?php echo $newrow['sa_heading']; ?></textarea>
                                                                                    </div>

                                                                                    <div class="m-t-10 ">
                                                                                        <h5><b>Description </b></h5>
                                                                                        <textarea id="textarea" class="form-control" maxlength="2000" rows="2"
                                                                                            placeholder="This Description has a limit of 2000 chars." name="sa_paragraph"
                                                                                            required><?php echo $newrow['sa_paragraph']; ?></textarea>
                                                                                    </div>

                                                               
                                                                                        <button type="submit" class="margin-top-20 btn btn-primary btn-sm waves-effect waves-light"
                                                                                            name="update_add">update</button>

                                                                                        <a class="margin-top-20 btn btn-danger btn-sm waves-effect waves-light"
                                                                                        href="services-advance-delete.php?said=<?php echo $newrow['sa_id']; ?>&sid=<?php echo $row['s_id']; ?>"
                                                                                            name="ser_adv_delete">delete</a>
                                                                            </form>


                                                                            <?php
                                                        }
                                                    }
                                                    ?>


                                                    <h2>Add More Heading and Description </h2>
                                                    <form action="service-advance-add.php" method="POST">

                                                        <div class="padding-10">


                                                            <input type="hidden" name="s_id" class="form-control" value="<?php echo $_GET['sid']; ?>">


                                                            <div class="m-t-10 ">
                                                                <h5><b>Heading </b></h5>
                                                                <textarea id="textarea" class="form-control" maxlength="100" rows="2"
                                                                    placeholder="This Description has a limit of 100 chars." name="sa_heading"
                                                                    required></textarea>
                                                            </div>

                                                            <div class="m-t-10 ">
                                                                <h5><b>Description </b></h5>
                                                                <textarea id="textarea" class="form-control" maxlength="2000" rows="2"
                                                                    placeholder="This Description has a limit of 2000 chars." name="sa_paragraph"
                                                                    required></textarea>
                                                            </div>

                                                            <button type="submit" class="margin-top-20 btn btn-primary btn-sm waves-effect waves-light"
                                                                name="ser_advance_add">Add</button>

                                                        </div>

                                                    </form>

                                                </div>
                                                <?php

        }
        ?>
                                    <!-- /.col-md-6 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.box-content -->
                        </div>






                        <?php
    } else {
        ?>
                        <script>
                            window.location.href = "<?php $homename ?>services.php";
                        </script>
                        <?php
    }
?>
<?php

}
include("./include/footer.php");
?>

<script>
    function imagePreview(fileInput) {
        if (fileInput.files && fileInput.files[0]) {
            var fileReader = new FileReader();
            fileReader.onload = function (event) {
                $('#preview').html('<img src="' + event.target.result + '" width="150px" height="150px"/>');
            };
            fileReader.readAsDataURL(fileInput.files[0]);
        }
    }
    $("#image").change(function () {
        imagePreview(this);
    });
</script>
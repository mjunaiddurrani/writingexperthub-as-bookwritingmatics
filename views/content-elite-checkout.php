<!doctype html>
<html lang="en">

<head>
    <title>proficient tech inc Services Start from $149 ONLY</title>

    <meta name="description"
        content="proficient tech inc is the new competitor in the web designing service market. proficient tech inc offers the best of services related to web development & designing.">







    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include_once("includes/head.php")?>


    <style>
    /*form styles*/
    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px;
    }

    #msform fieldset .form-card {
        background: white;
        border: 0 none;
        border-radius: 0px;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        padding: 20px 40px 30px 40px;
        box-sizing: border-box;
        width: 94%;
        margin: 0 3% 20px 3%;

        /*stacking fieldsets above each other*/
        position: relative;
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;

        /*stacking fieldsets above each other*/
        position: relative;
    }

    /*Hide all except first fieldset*/
    #msform fieldset:not(:first-of-type) {
        display: none;
    }

    #msform fieldset .form-card {
        text-align: left;
        color: #9E9E9E;
    }

    #msform input,
    #msform textarea {
        padding: 0px 8px 4px 8px;
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 16px;
        letter-spacing: 1px;
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: none;
        font-weight: bold;
        border-bottom: 2px solid skyblue;
        outline-width: 0;
    }

    /*Blue Buttons*/
    #msform .action-button {
        width: 100px;
        background: skyblue;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue;
    }

    /*Previous Buttons*/
    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
    }

    /*Dropdown List Exp Date*/
    select.list-dt {
        border: none;
        outline: 0;
        border-bottom: 1px solid #ccc;
        padding: 2px 5px 3px 5px;
        margin: 2px;
    }

    select.list-dt:focus {
        border-bottom: 2px solid skyblue;
    }

    /*The background card*/
    .card {
        z-index: 0;
        border: none;
        border-radius: 0.5rem;
        position: relative;
    }

    /*FieldSet headings*/
    .fs-title {
        font-size: 25px;
        color: #2C3E50;
        margin-bottom: 10px;
        font-weight: bold;
        text-align: left;
    }

    /*progressbar*/
    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey;
    }

    #progressbar .active {
        color: #000000;
    }

    #progressbar li {
        list-style-type: none;
        font-size: 12px;
        width: 25%;
        float: left;
        position: relative;
    }

    /*Icons in the ProgressBar*/
    #progressbar #account:before {
        font-family: FontAwesome;
        content: "\f007";
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f24a";
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f09d";
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c";
    }

    /*ProgressBar before any progress*/
    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 18px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px;
    }

    /*ProgressBar connectors*/
    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1;
    }

    /*Color number of the step and the connector before it*/
    #progressbar li.active:before,
    #progressbar li.active:after {
        background: skyblue;
    }

    /*Imaged Radio Buttons*/
    .radio-group {
        position: relative;
        margin-bottom: 25px;
    }

    .radio {
        display: inline-block;
        width: 204;
        height: 104;
        border-radius: 0;
        background: lightblue;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        box-sizing: border-box;
        cursor: pointer;
        margin: 8px 2px;
    }

    .radio:hover {
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
    }

    .radio.selected {
        box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
    }

    /*Fit image in bootstrap div*/
    .fit-image {
        width: 100%;
        object-fit: cover;
    }

    /* img {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        z-index: -1;
    } */

    .plan {
        margin-top: 87px;
        position: relative;
        overflow: hidden;
        border: 3px solid #442232;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        background-color: #fff;
    }

    .plan.bestseller {
        transform: scale(1.1)
    }

    /* .plan:hover i,
.plan.hover i {
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
} */
    .plan.bestseller:after {
        content: "BEST SELLER";
        color: #fff;
        font-size: 12px;
        font-weight: bold;
        vertical-align: middle;
        padding: 7px 10px;
        text-indent: -15px;
        display: block;
        -ms-transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        height: 35px;
        width: 180px;
        background-color: red;
        position: absolute;
        border: 2px solid #b70000;
        box-shadow: 2px 1px 7px -1px #b70000;
        right: -62px;
        top: 23px;
        text-align: center;
    }

    * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: all 0.25s ease-out;
        transition: all 0.25s ease-out;
    }



    .plan-title {
        background-color: #bb0e62;
        position: relative;
        margin: 0;
        padding: 20px 20px 0;
        text-transform: uppercase;
        letter-spacing: 4px;
        color: #fff;
    }

    .plan-title:after {
        position: absolute;
        content: '';
        top: 100%;
        left: 0;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 40px 300px 0 0;
        border-color: #73103f transparent transparent;
    }

    .plan-cost {
        padding: 40px 20px 10px;
        text-align: center;
    }

    .plan-price {
        font-weight: 600;
        font-size: 22px;
        color: #000;
    }

    .plan-type {
        opacity: 0.8;
        font-size: 0.7em;
        text-transform: uppercase;
    }

    .plan-features {
        padding: 0 0 20px;
        margin: 0;
        list-style: outside none none;
    }

    .plan-features li {
        padding: 8px 5%;
        color: #000
    }

    .plan-features i {
        margin-right: -1px;
        color: #09a3d9;
    }

    .plan-select {
        border-top: 1px solid rgba(0, 0, 0, 0.2);
        padding: 20px;
        text-align: center;
    }

    .plan-select a {
        background: #73103f;
        color: #ffffff;
        text-decoration: none;
        padding: 12px 20px;
        font-size: 0.75em;
        font-weight: 600;
        border-radius: 20px;
        text-transform: uppercase;
        letter-spacing: 4px;
        display: inline-block;
    }

    .plan-select a:hover {
        background: linear-gradient(90deg, rgba(7, 91, 90, 1) 0%, rgba(161, 84, 1, 0.6194852941176471) 0%, rgba(184, 101, 18, 1) 50%, rgba(172, 117, 28, 1) 100%);
    }

    .featured {
        margin-top: -10px;
        border-color: #331926;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
        z-index: 1;
        border-radius: 8px;
    }

    .featured .plan-select {
        padding: 30px 20px;
    }

    @media only screen and (max-width: 767px) {
        .plan {
            width: 50%;
        }

        .plan-title,
        .plan-select a {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        .plan-select,
        .featured .plan-select {
            padding: 20px;
        }

        .featured {
            margin-top: 0;
        }
    }

    @media only screen and (max-width: 440px) {
        .plan {
            width: 100%;
        }
    }

    .cardCta {
        font-size: 14px;
    }

    .cardCta a:first-child {
        border-bottom: 2px solid #000;
        padding-right: 7px;
    }

    .confused {
        margin-top: 15px;
    }

    .scrollbar {


        height: 100%;

        background: #F5F5F5;
        /* overflow-y: scroll; */
        margin-bottom: 25px;
    }

    .force-overflow {
        min-height: 450px;
    }

    #wrapper {
        text-align: center;
        /* width: 285px; */
        /* margin: auto; */
    }


    #style-1::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        background-color: #F5F5F5;
    }

    #style-1::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
    }

    #style-1::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #555;
    }

    .mCustomScrollbar {
        height: 100%;
    }
    </style>
</head>

<body class="hompg">




    <noscript>
        <div id="jqcheck"><img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB60lEQVQ4T2NkwAHePzrxf3ebL1jWp/0oA5egGiM2pVgFQQq31uj/N/ANZvj+8T3D7aNHGDwbTxNvwKtbO/9f3dLHYJ+axfDn5w+GI/NnMRhFtTEISJtjGIIh8Pv39/87ak0ZzCLiGMRUNMCufnLxDMOlrZsY3JtOMrCwsKPowTDg3tGZ/59f2sVgFRvPkO+bAzZgwsZJDEcXzWNQtIlikDGIwG3Az+9v/+9qsGOwTc1h4JeQhhswcfMUhrcP7zEcXzyXwb3xMAMbuwDcEBTTzi7P/s/M8IFB3zccbDPMBSADQODs2sUMzFwyDIah/ZgGfHt/7/+BvmAGm+RsBl4RMawGfHr5jOHowlkMjiUbGDj55MCGwE060Of1X0RZi0Hb2Q4e3eguAElc2X2A4e2DmwwOhVsRBnx6cfH/yXm5DFZxyQxcAoJ4Dfj24T3DsUVzGcwSJjLwSxkygk3ZVmv4X805gkHZRBNXwkQRv3/+NsP1nUsYvFvOMzI+PLXo/73DSxgsouIYOHj5UBRi8wJIwY8vnxlOLV/CIGcewsC4vkDhv01yLoOIoiqG7bgMACn88Owxw8HpvQyMGwqV/vs19TMwQnxDEthYW8DAeGCC3/9XN46TpBGmWEzDkoHx06dP/z9//kyWAby8vAwAcza2SBMOSCMAAAAASUVORK5CYII="
                alt="No Script" /> Javascript is disabled. Please enable it for better working experience.</div>
    </noscript>

    <?php include_once("includes/header.php")?>


    <section class="home-bnerwrp homewrp" style="    background-color: #343a40;">
        <!--<img class="offer-img" src="assets/images/web-design-prime-banner-img.png">-->
        <span class="ovrlaywrprr"></span>
        <!-- <video  autoplay="" loop="" muted="" playsinline="" preload=""> -->
        <div class="container" id="grad1">
            <div class="row justify-content-center" style="">
                <div class=" col-lg-8 text-center p-0 mt-10 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-5 mb-3">
                        <h2><strong style="
                        color: black;
                        font-weight:normal;
                    ">Let's Get Started With Your Project</strong></h2>
                        <p>Please Provide the information requested below.</p>
                        <div class="row">
                            <div class="col-md-12 mx-0">
                                <form action="/thank-you/" id="msform">
                                    <!-- progressbar -->
                                    <!-- <ul id="progressbar">
                                <li class="active" id="account"><strong>Order Now</strong></li>
                                <li id="personal"><strong>Design Brief</strong></li>
                                <li id="payment"><strong>Payment</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul> -->
                                    <!-- fieldsets -->
                                    <fieldset>
                                        <div class="form-card">
                                            <h2 class="fs-title">Countact</h2>
                                            <input type="text" name="uname" placeholder="Name" required />
                                            <input type="email" name="email" placeholder="Email Id" required />
                                            <input type="number" name="pwd" placeholder="Phone Number" required />
                                        </div>
                                        
                                        <div class="form-card">
                                            <h2 class="fs-title">Payment Information</h2>

                                            
                                            
                                            <label class="pay">Card Holder Name*</label>
                                            <input type="text" name="holdername" placeholder="" />
                                            <div class="row">
                                                <div class="col-9">
                                                    <label class="pay">Card Number*</label>
                                                    <input type="text" name="cardno" placeholder="" />
                                                </div>
                                                <div class="col-3">
                                                    <label class="pay">CVC*</label>
                                                    <input type="password" name="cvcpwd" placeholder="***" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label class="pay">Expiry Date*</label>
                                                </div>
                                                <div class="col-9">
                                                    <select class="list-dt" id="month" name="expmonth" required>
                                                        <option selected>Month</option>
                                                        <option>January</option>
                                                        <option>February</option>
                                                        <option>March</option>
                                                        <option>April</option>
                                                        <option>May</option>
                                                        <option>June</option>
                                                        <option>July</option>
                                                        <option>August</option>
                                                        <option>September</option>
                                                        <option>October</option>
                                                        <option>November</option>
                                                        <option>December</option>
                                                    </select>
                                                    <select class="list-dt" id="month" name="expyear" required>
                                                        <option selected>Year</option>
                                                        <option value="">2019</option>
                                                        <option value="">2020</option>
                                                        <option value="">2021</option>
                                                        <option value="">2022</option>
                                                        <option value="">2023</option>
                                                        <option value="">2024</option>
                                                        <option value="">2025</option>
                                                        <option value="">2026</option>
                                                        <option value="">2027</option>
                                                        <option value="">2028</option>
                                                        <option value="">2029</option>
                                                        <option value="">2030</option>
                                                        <option value="">2031</option>
                                                        <option value="">2032</option>
                                                        <option value="">2033</option>
                                                        <option value="">2034</option>
                                                        <option value="">2035</option>
                                                        <option value="">2036</option>
                                                        <option value="">2037</option>
                                                        <option value="">2038</option>
                                                        <option value="">2039</option>
                                                        <option value="">2040</option>
                                                        <option value="">2041</option>
                                                        <option value="">2042</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-md-12">
                                                    <div class="fldst">
                                                        <label for="">I ACCEPT TREMS & CONDITIONS AND PRIVACY POLICY
                                                            *</label>
                                                        <input class="form-check-input"
                                                            style="min-height:15px !important; width: 15%;"
                                                            type="checkbox" value="" id="flexCheckDefault" required>
                                                    </div>
                                                    <h3 class="text-dark">Descriptor</h3>
                                                    <p> <i> Please note that the descriptor on your billing statement
                                                            will
                                                            be “8883639727writingexpert” </i></p>
                                                    <a href="terms-and-conditions/"> Trems And Conditions</a>
                                                </div>
                                                <!-- <div class="trems ml-3">
                                            </div> -->
                                            </div>
                                        </div>
                                        <input type="submit" name="next" class="action-button" value="Submit" />
                                        <!-- </fieldset>
                       
                            <fieldset>
                               
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="make_payment" class="next action-button" value="Confirm"/>
                            </fieldset> -->
                                        <!-- <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Payment Was Successfull!</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset> -->
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="pack-wrap green bg-white p-3 mt-44 rounded">
                        <div class="hdarea">
                            <h4>$2,399</h4>
                            <h3>Exclusive</h3>


                        </div>
                        <div class="bdarea">
                            <ul class="list-scroll mCustomScrollbar _mCS_2">
                                <div id="mCSB_2" class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside"
                                    tabindex="0" style="max-height: none;">
                                    <div id="mCSB_2_container" class="mCSB_container"
                                        style="position: relative; top: 0px; left: 0px;" dir="ltr">
                                        <li>Pros Will Write a 20-Page Blog or Article for You</li>
                                                        <li>Original and well-written by 1 Expert Blog/Article Writer in the Industry</li>
                                                        <li>300 words per page and unlimited changes
                                                        </li>
                                                        <li>7–8 Business Days Rotation based on what You want.</li>
                                                        <li>Proofreading</li>
                                                        <li>Each custom blog post or article will have a catchy title, keywords, and a page description.</li>
                                                        <li>SEO-friendly: Your keyword(s) will appear in the title, the first and last paragraphs, and throughout the blog/article.
                                                        </li>
                                                        <li>Money Back Guarantee for 30 Days</li>
                                    </div>
                                    <div id="mCSB_2_scrollbar_vertical"
                                        class="mCSB_scrollTools mCSB_2_scrollbar mCS-light-1 mCSB_scrollTools_vertical"
                                        style="display: block;"><a href="#" class="mCSB_buttonUp"
                                            style="display: block;"></a>
                                        <div class="mCSB_draggerContainer">
                                            <div id="mCSB_2_dragger_vertical" class="mCSB_dragger"
                                                style="position: absolute; min-height: 30px; display: block; height: 57px; max-height: 125px; top: 0px;">
                                                <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                            </div>
                                            <div class="mCSB_draggerRail"></div>
                                        </div><a href="#" class="mCSB_buttonDown" style="display: block;"></a>
                                    </div>
                                </div>
                            </ul>
                        </div>

                    </div>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </section>






    <?php include_once("includes/footer.php")?>
</body>

</html>
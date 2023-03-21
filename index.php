<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
use Application\EmailController;

require 'vendor/autoload.php';

if (isset($_POST['send_email'])) {
    $email = new EmailController();
    $email->processForm();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Scrap My Car in Sheffield, Doncaster, Rotherham, South Yorkshire</title>
    <meta name="description"
          content="Remove My Car South Yorkshire are one of the biggest scrap car buyers in Sheffield, Doncaster, Rotherham, Barnsley and South Yorkshire. Call: 07540 298942."/>
    <!-- CSS  -->
    <!--    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">-->
    <!--    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>-->
    <meta name="google-site-verification" content="DBY6nTLZox3cJX-RcxuSHruMHLO3HHhKwbAhEXaf9GQ"/>
    <?php include "Application/css.php"; //Cheats google page speed for 100/100 ?>
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" type="text/css" rel="stylesheet"
          media="screen,projection"/>
</head>
<body>
<div class="navbar-fixed">
    <nav class="blue accent-2" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo white-text">Remove my Car<br>
                <small>South Yorkshire</small>
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#we-buy-cars">We Buy Cars</a></li>
                <li><a href="#about-us">About Us</a></li>
                <li><a href="#contact-us">Get a Quote</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse white-text
"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>
<ul id="nav-mobile" class="side-nav">
    <li><a href="#we-buy-cars">We Buy Cars</a></li>
    <li><a href="#about-us">About Us</a></li>
    <li><a href="#contact-us">Get a Quote</a></li>
</ul>
<a id="we-buy-cars"></a>
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br><br>
            <h1 class="header center white-text text-darken-4 flow-text transparency">Remove My Car – Scrap Car Buyers in Sheffield, Doncaster, Rotherham and South Yorkshire</h1>
            <h3 class="header center white-text text-darken-4 flow-text transparency">
                <!--                We Buy Scrap Cars in South Yorkshire<br>-->
                Call us now on <a href="tel:07540298942">07540 298942</a></h3>
            <div class="row center">
                <a href="#contact-us" id="download-button"
                   class="btn-large waves-effect waves-light blue lighten-1">Get a quote Online NOW.</a>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="./images/background1.jpg" alt="Unsplashed background img 1"></div>
</div>
<div class="container">
    <div class="section">
        <!--   Icon Section   -->
        <div class="row">
            <h2 class="center">We Buy Scrap Cars For Cash in Sheffield and South Yorkshire</h2>
            <div class="col s12 m3">
                <div class="icon-block">
                    <h2 class="center blue-text text-lighten-1"><i class="material-icons">£</i></h2>
                    <h5 class="center">Best Price</h5>
                    <p class="light">As one of the best-known buyers of scrap cars in South Yorkshire we are always looking to give the most for cars at the end of their life. So, whether your car is accident damaged or irreparable mechanically or otherwise we will pay cash into your bank account for your old vehicle. Our scrap car buyers work throughout South Yorkshire and will ensure that you get the best price for your unwanted vehicle, and there’s no need to bring it to our car scrap yard as we’ll be happy to collect it from you for free.</p>
                </div>
            </div>

            <div class="col s12 m3">
                <div class="icon-block">
                    <h2 class="center blue-text text-lighten-1"><i class="material-icons">directions_car</i></h2>
                    <h5 class="center">For Cash</h5>
                    <p class="light">Do you want to scrap your car for cash in South Yorkshire? Do you want to get the best price for your scrap car? We are one of the leading car scrap yards in Sheffield and South Yorkshire and provide a professional scrappage service to our customers. From small vans and large commercial vehicles to minibuses and compact cars, our scrap car buyers will give you the best price for your unwanted automobiles.</p>
                </div>
            </div>

            <div class="col s12 m3">
                <div class="icon-block">
                    <h2 class="center blue-text text-lighten-1"><i class="material-icons">local_shipping</i></h2>
                    <h5 class="center">Collections</h5>
                    <p class="light">At Remove my Car we have a large car scrap yard in Sheffield where we are able to process scrap cars, unwanted cars, accident damaged cars, MOT failures and scrap commercial vehicles. All vehicles are disposed of in the legal way, with all details being registered and processed via the DVLA to notify them that the vehicle is being scrapped. We cover the whole of South Yorkshire including Rotherham, Doncaster, Barnsley, Sheffield, Chesterfield and the surroundings towns. Give us a call today to get the best price and scrap your car for cash.</p>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="icon-block">
                    <h2 class="center blue-text text-lighten-1"><i class="material-icons">mood</i></h2>
                    <h5 class="center">Removal</h5>
                    <p class="light">We are scrap car buyers and offer a full collection and disposal service in Sheffield and throughout South Yorkshire. As one of the best car scrap yards in the area we provide our customers with a first-class service with collection at a time that’s convenient for you. Want to find out “How to scrap my car for cash?”, we are the people to speak with. We offer fast secure payment on collection for your car with payments direct to your bank account.</p>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="parallax-container valign-wrapper" id="about-us">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h3 class="header col s12 white-text transparency">No Tax, No MOT, No Problem!</h3>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="./images/background2.jpg" alt="Unsplashed background img 2"></div>
</div>

<div class="container">
    <div class="section">

        <div class="row">
            <div class="col s12 center">
                <h3><i class="mdi-content-send brown-text"></i></h3>
                <h4>About Remove My Car South Yorkshire</h4>
                <p class="left-align light">Remove My Car South Yorkshire are one of the largest scrap car buyers in Sheffield and across South Yorkshire. We pride ourselves on offering our customers a professional service for both cars and vans as well as commercial vehicles. All vehicles that we purchase are recycled in-line with scrap guidelines and in an environmentally friendly way.
                </p>
                <p class="left-align light">
                    We purchase the vehicle from you. This ensures that you are no longer responsible for it and do not
                    have to worry about any vehicle scrapping procedures you would normally be responsible for.
                </p>
                <p class="left-align light">
                    As a registered car scrap yard, we take care of all the paperwork and send this off to the DVLA to confirm that you are no longer the registered owner of the vehicle and that it is being scrapped. Looking to scrap your car for cash in Sheffield, Doncaster, Rotherham or Barnsley? We will give you a great price for your unwanted, non-runner, accident damaged or MOT failure.
                </p>
                <p class="left-align light">
                    We guarantee that we’ll purchase your car when we say we will and following an inspection by one of our expert team we’ll make you an offer based on the scrap value of the car – this is guaranteed to be the best price in the area. Following payment, we’ll take the car away and ensure that all parts are recycled responsibly, legally and in an environmentally friendly way.
                </p>
                <h4>Can I scrap my car for cash?</h4>
                <p class="left-align light">It is no longer possible to get cash for your scrap car. As one of the best car scrap yards in Sheffield we buy end of life cars, vans, and commercial vehicles and offer the very best prices in South Yorkshire. From MOT failures and accident damaged cars, to non-runners and vehicles that aren’t worth repairing, our team of scrap car buyers will give you a great price for your unwanted vehicles.</p>
                <p class="left-align light">We offer free vehicle collection in Doncaster, Rotherham, Barnsley, Chesterfield, Sheffield and further afield so get in touch today to find out more. Give us a call to find out the price that we’ll pay for your scrap car. </p>
                <p class="left-align light">If you want to scrap your car for cash then we can help. The price we quote is the price that we’ll pay, and we offer free collection within South Yorkshire. There are no hidden fees and because we are a licensed car scrap yard you can be sure that we’ll dispose of your vehicle responsibly.</p>
                <p class="left-align light">If you have any questions about our vehicle recycling or about anything you are not sure of we would be happy to talk to you, call us on <a href="tel:07540 298942">07540 298942</a>.</p>
            </div>
        </div>
        <hr>

        <div class="row" id="contact-us">
            <div class="col s12 center">
                <h4>Get a Quote</h4>
                <p>Fill the form out below in order to get a free no obligation quote from a member of our specialist
                    team.</p>
                <div class="row">
                    <form class="col s12" method="POST">
                        <h3>About You.</h3>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="first_name" name="name" type="text" required class="validate">
                                <label for="first_name">Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="email" name="email" type="text" required class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="address" name="address" type="text" class="validate">
                                <label for="address">Address</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="postcode" name="postcode" type="text" class="validate">
                                <label for="postcode">Postcode</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="phone" type="text" name="phone" class="validate">
                                <label for="phone">Phone</label>
                            </div>
                        </div>
                        <h3>A little about the car.</h3>
                        <div class="row">
                            <div class="input-field col s6">
                                <select class="validate" id="car_make" required name="car_make">
                                    <option disabled selected>Choose the make.</option>
                                    <option value="AC">AC</option>
                                    <option value="Alfa Romeo">Alfa Romeo</option>
                                    <option value="Audi">Audi</option>
                                    <option value="BMW">BMW</option>
                                    <option value="Chrysler Jeep">Chrysler Jeep</option>
                                    <option value="Citroen">Citroen</option>
                                    <option value="Daewoo">Daewoo</option>
                                    <option value="Daihatsu">Daihatsu</option>
                                    <option value="Fiat">Fiat</option>
                                    <option value="Ford">Ford</option>
                                    <option value="Honda">Honda</option>
                                    <option value="Hyundai">Hyundai</option>
                                    <option value="Isuzu">Isuzu</option>
                                    <option value="Jaguar">Jaguar</option>
                                    <option value="Jeep">Jeep</option>
                                    <option value="Kia">Kia</option>
                                    <option value="Land Rover">Land Rover</option>
                                    <option value="Lexus">Lexus</option>
                                    <option value="Mazda">Mazda</option>
                                    <option value="Mercedes-Benz">Mercedes-Benz</option>
                                    <option value="MG">MG</option>
                                    <option value="Mitsubishi">Mitsubishi</option>
                                    <option value="Nissan">Nissan</option>
                                    <option value="Perodua">Perodua</option>
                                    <option value="Peugeot">Peugeot</option>
                                    <option value="Proton">Proton</option>
                                    <option value="Renault">Renault</option>
                                    <option value="Rover">Rover</option>
                                    <option value="Saab">Saab</option>
                                    <option value="SEAT">SEAT</option>
                                    <option value="Skoda">Skoda</option>
                                    <option value="smart">smart</option>
                                    <option value="Subaru">Subaru</option>
                                    <option value="Suzuki">Suzuki</option>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Vauxhall">Vauxhall</option>
                                    <option value="Volvo">Volvo</option>
                                    <option value="Volkswagen">Volkswagen</option>
                                    <option value="Other - State in Model">Other</option>
                                </select>
                                <label for="car_make">Car Make</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="car_model" type="text" name="car_model" required class="validate">
                                <label for="car_model">Model</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="car_registration" name="car_registration" type="text" class="validate">
                                <label for="car_registration">Registration Number</label>
                            </div>
                            <div class="input-field col s6">
                                <select class="validate" id="car_keys" name="car_keys">
                                    <option value="" disabled selected>How many keys do you have.</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <label for="car_keys">How many keys?</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <select class="validate" name="car_runner" required id="car_runner">
                                    <option disabled selected>Is it a runner?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <label for="car_runner">Runner</label>
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" name="send_email"
                                    class="btn-large waves-effect waves-light blue lighten-1"><i
                                        class="material-icons left">send</i>Request Quote Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h3 class="header col s12 light transparency">We will <br> call you back!</h3>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="./images/background3.jpg" alt="Unsplashed background img 3"></div>
</div>
<footer class="page-footer blue">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <p class="white-text">Here at Remove my Car South Yorkshire we come to you at a
                    time that suits you, whether it be after working hours or weekends.</p>
                <p class="white-text">All DVLA paperwork is completed for you hassle free, and payments for your
                    unwanted vehicle can either be paid in cash or via bank transfers.
                </p>
            </div>
            <div class="col l3 s12">
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="https://www.instagram.com/Removemycarsy/"><i
                                    class="ion-social-instagram tiny"></i> removemycarsy</a></li>
                    <li><a class="white-text" href="https://twitter.com/Removemycarsy/"><i
                                    class="ion-social-twitter tiny"></i>@removemycarsy</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright grey darken-3">
        <div class="container">
            Made by <a class="grey-text">TD-Design</a>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script src="js/init.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>

</body>
</html>

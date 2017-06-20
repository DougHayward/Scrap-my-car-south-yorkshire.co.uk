<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use Application\EmailController;

require 'vendor/autoload.php';

if (isset($_POST['send_email'])) {
    $email = new EmailController();
    $email->processForm();
    print "HERE";
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Remove My Car - South Yorkshire</title>
    <!-- CSS  -->
    <!--    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">-->
    <!--    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>-->

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
            <h1 class="header center white-text text-darken-4 flow-text transparency">
                <!--                We Buy Scrap Cars in South Yorkshire<br>-->
                Call us now on <a href="tel:07540298942">07540 298942</a></h1>
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
            <h2 class="center">We Buy Scrap Cars</h2>
            <div class="col s12 m3">
                <div class="icon-block">
                    <h2 class="center blue-text text-lighten-1"><i class="material-icons">£</i></h2>
                    <h5 class="center">Best Price</h5>
                    <p class="light">As one of the best-known buyers of scrap cars in South Yorkshire we are always
                        looking to give the most for cars at the end of their life. So whether your car is accident
                        damaged or irreparable mechanically or otherwise we will buy and offer you the best price in
                        South Yorkshire. Our business is buying scrap cars, that’s why we will give you the best price
                        on your car for scrap.</p>
                </div>
            </div>

            <div class="col s12 m3">
                <div class="icon-block">
                    <h2 class="center blue-text text-lighten-1"><i class="material-icons">directions_car</i></h2>
                    <h5 class="center">For Cash</h5>
                    <p class="light">Do you want to scrap your car for cash in South Yorkshire? Do you want a good price
                        for your scrap car in South Yorkshire? If yes then we are here to help you to provide you with a
                        professional scrap car collection service in South Yorkshire.</p>
                </div>
            </div>

            <div class="col s12 m3">
                <div class="icon-block">
                    <h2 class="center blue-text text-lighten-1"><i class="material-icons">local_shipping</i></h2>
                    <h5 class="center">Collections</h5>
                    <p class="light">We collect scrap cars, unwanted cars, accident damaged cars, MOT failures and scrap
                        commercial vehicles, and we also dispose of your vehicle in the legal way, filling out all of
                        the required DVLA paperwork. We don't care if your MOT has expired or if you are trying to sell
                        your written off car. You can sell us your car with no tax or mot. Scrap Car Collection Scrap a
                        Car for Cash Scrap Car Services We will satisfy you in all kind of scrap cars collections
                        services or car breakdown cover.</p>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="icon-block">
                    <h2 class="center blue-text text-lighten-1"><i class="material-icons">mood</i></h2>
                    <h5 class="center">Removal</h5>
                    <p class="light">We offer a first class scrap car removal, collection and disposal in South
                        Yorkshire and
                        can offer good prices for your scrap car today. As one of the best known scrap car breakers in
                        South Yorkshire we can dispose of your unwanted scrap car, we offer scrap car collection in
                        South Yorkshire
                        and the surrounding areas.</p>
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
                <h4>About Us</h4>
                <p class="left-align light">Remove My Car Sheffield are one of the biggest scrap car buyers in Sheffield
                    and we make every effort to ensure your vehicle is recycled in an environmentally friendly way.
                </p>
                <p class="left-align light">
                    We purchase the vehicle from you. This ensures that you are no longer responsible for it and do not
                    have to worry about any vehicle scrapping procedures you would normally be responsible for.
                </p>
                <p class="left-align light">
                    After inspection of the vehicle we will offer you the best possible price for your vehicle and
                    remove it from your premises, ensuring all parts are recycled responsibly, legally and in an
                    environmentally friendly way.
                </p>
                <p class="left-align light">
                    We buy Scrap Cars and offer a car removal service for unwanted cars. We buy Mot Failures, Accident
                    Damaged Cars, Non Runners and in fact we will buy any Scrap Car in Sheffield and all surrounding
                    areas of Sheffield and South Yorkshire.
                </p>
                <p class="left-align light">
                    Call now and you could get money for your scrap car today. Or fill out the online form for a call
                    back with a quote for your scrap car.
                </p>
                <p class="left-align light">
                    If you have a scrap car for sale in Sheffield, we offer free collection of Scrap Cars and there are
                    no hidden fees when you scrap a car with us. We are fully insured and pay cash for scrap cars in
                    Sheffield and throughout South Yorkshire.
                </p>
                <a id="contact-us"></a>
                <p class="left-align light">
                    If you have any questions about our vehicle recycling or about anything you are not sure of we would
                    be happy to talk to you, call us on <a href="tel:07540 298942">07540 298942</a>.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col s12 center">
                <h4>Get a Quote</h4>
                <p>Fill the form out below in order to get a free no obligation quote from a member of our specialist
                    team.</p>
                <div class="row">
                    <form class="col s12" method="POST">
                        <h3>About You.</h3>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="first_name" name="name" type="text" class="validate">
                                <label for="first_name">Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="email" name="email" type="text" class="validate">
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
                                <select class="validate" id="car_make" name="car_make">
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
                                <input id="car_model" type="text" name="car_model" class="validate">
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
                                <select class="validate" name="car_runner" id="car_runner">
                                    <option disabled selected>Is it a runner?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <label for="car_runner">Runner</label>
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" name="send_email" class="btn-large waves-effect waves-light blue lighten-1"><i
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
                <h5 class="white-text">Remove My Car - South Yorkshire</h5>
                <p class="grey-text text-lighten-4"></p>
            </div>
            <!--            <div class="col l3 s12">-->
            <!--                <h5 class="white-text">Settings</h5>-->
            <!--                <ul>-->
            <!--                    <li><a class="white-text" href="#!">Link 1</a></li>-->
            <!--                    <li><a class="white-text" href="#!">Link 2</a></li>-->
            <!--                    <li><a class="white-text" href="#!">Link 3</a></li>-->
            <!--                    <li><a class="white-text" href="#!">Link 4</a></li>-->
            <!--                </ul>-->
            <!--            </div>-->
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="https://www.instagram.com/Removemycarsy/"><i
                                    class="ion-social-instagram small"></i> @Removemycarsy</a></li>
                    <li><a class="white-text" href="https://twitter.com/Removemycarsy/"><i
                                    class="ion-social-twitter small"></i>@Removemycarsy</a></li>
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

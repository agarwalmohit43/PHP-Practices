<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GET Private Limited</title>



    <!-- CSS files-->
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/external.css"/>
    <link href="css/icon.css" rel="stylesheet">

    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="fonts/font-awesome.min.css"/>
    <link href="fonts/roboto/Roboto-Regular.woff2"/>

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/externalFilldata.js"></script>
    <script src="js/login.js"></script>
    <!-- Include jQuery Popup Overlay -->
    <script src="js/jquery.popupoverlay.js"></script>


    <!--sweetalert-->
    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">

    
</head>
<body>



<div class="parallax-container">
    <div class="parallax"><img src="images/para0.jpe"></div>

        <nav class="transparent" >
            <div class="nav-wrapper">
                <a href="#" class="brand-logo black-text" id="logoBtn">&nbsp;GET</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <a class="initialism fadeandscale_open black-text"  href="#fadeandscale" id="demobtn">DEMO</a>
                        <div id="fadeandscale" class="well" style="background: white">
                            <center><h5><strong>PLEASE FILL DETAILS</strong></h5></center>
                            <div class="row">
                                <form  class="col s12" id="fillDetails" method="post">
                                    <div class="row ">
                                        <div class="input-field col s6">
                                            <i class="material-icons prefix">perm_identity</i>
                                            <input id="firstname" type="text" class="validate" onkeypress="return isString(event)" required title="* Mark field are compulsory">
                                            <label for="icon_prefix">First Name<sup>*</sup></label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input id="lastname" type="text" class="validate" onkeypress="return isString(event)">
                                            <label for="icon_prefix">Last Name</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s6">
                                            <i class="material-icons prefix">phone</i>
                                            <input id="telephone" type="tel" class="validate" maxlength="10" minlength="10" onkeypress="return isNumber(event)" required>
                                            <label for="icon_telephone">Contact Number<sup>*</sup></label>
                                        </div>
                                        <div class="input-field col s6">
                                            <select class="icons" required id="country" >
                                                <option value="" disabled selected></option>
                                                <option value="INDIA" data-icon="images/india.png" class="circle">INDIA</option>
                                                <option value="USA" data-icon="images/usa.png" class="circle">USA</option>
                                                <option value="CHINA" data-icon="images/china.png" class="circle">CHINA</option>
                                            </select>
                                            <label>Choose your country<sup>*</sup></label>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">email</i>
                                            <input id="email" type="email" class="validate" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                            <label for="email" data-error="wrong" data-success="">Email<sup>*</sup></label>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">subject</i>
                                            <input id="subject" type="text" class="validate">
                                            <label for="icon_prefix">Subject</label>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">message</i>
                                            <textarea id="message" class="materialize-textarea"></textarea>
                                            <label for="icon_prefix2">Message</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s1">
                                            <div id='loadingmessage' style='display:none'>
                                                <img src='images/loading.gif'/>
                                            </div>
                                        </div>
                                        <div class="input-field col s4">
                                            <button class="btn waves-effect waves-light " style="width:150px;" id="supbtn">Submit<i class="material-icons right">send</i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="initialism fade_open black-text" href="#fade" id="loginbtn">LOGIN</a>
                        <div id="fade" class="well" style="background: white">
                            <center><h5><strong>LOGIN</strong></h5></center>
                            <div class="row">
                                <form class="col s12" id="signin" method="post">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input id="uname" type="text" class="validate" required>
                                            <label for="icon_prefix">Username</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">vpn_key</i>
                                            <input id="password" type="password" class="validate" required>
                                            <label for="icon_telephone">Password</label>
                                        </div>
                                    </div>

                                    <div class="row col s12">
                                        <p class="col s6">
                                            <input type="checkbox" id="test5" />
                                            <label for="test5">Remember</label>
                                        </p>
                                        <div class="input-field col s6">
                                            <button class="btn waves-effect waves-light" style="width:100px;" id="login">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>


<div class="section grey lighten-2" id="box">
    <div class="row container" >
        <h2 class="header" id="header2">LOREM IPSUM SAMPLE DUMMY TEXT</h2>
        <p class="grey-text text-darken-3 lighten-3" id="myp1" >
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam imperdiet mauris et orci condimentum pretium. Praesent tincidunt tristique nisl ut gravida. Donec eget odio vitae tortor lobortis tincidunt. Proin et turpis a enim mollis pharetra. Sed et bibendum nunc, sed dapibus enim. Pellentesque scelerisque, quam commodo congue convallis, sem diam convallis nunc, non fermentum dui nulla vel justo. Vestibulum a semper odio. Maecenas lacinia, mauris eu venenatis semper, mauris neque mattis risus, vel porta urna lectus nec felis. Maecenas aliquet, elit id sagittis finibus, quam ligula congue neque, eu scelerisque urna turpis eget mi. Integer nunc odio, accumsan volutpat euismod vel, efficitur sed lectus.
        </p>
        <p id="myp2">
            Integer ultricies augue ac arcu porta, non malesuada mi hendrerit. Integer at nulla porttitor, luctus metus id, blandit ex. Suspendisse auctor ligula sed dapibus congue. Aliquam vestibulum luctus dictum. Quisque semper odio nunc, quis convallis ante laoreet a. Proin blandit metus semper porta pulvinar. Phasellus egestas, lorem ac commodo luctus, ex sapien mollis sem, dictum luctus nulla nibh in tortor. Duis eleifend lobortis sem, eu pretium massa porttitor quis.
        </p>
        <p id="myp3">
            Fusce ornare velit quis sodales dapibus. Sed mattis diam at sem facilisis, eu luctus neque lobortis. Cras consequat purus sed porta pretium. Quisque congue, augue quis posuere ultrices, arcu diam porta nisl, eu semper sapien tortor eget nulla. Morbi eu faucibus tortor. Vestibulum et lectus id justo fringilla lobortis. In ultricies molestie euismod. Fusce a diam porttitor, ornare lectus ultricies, sodales lorem. Aenean erat tellus, fermentum sed dictum at, bibendum dignissim magna. Morbi sollicitudin lacinia malesuada. Morbi fringilla, libero id feugiat efficitur, metus enim mattis dolor, sed malesuada magna nisl vitae lacus. Donec fringilla nulla in leo elementum, eu condimentum mi elementum. Aliquam quis lobortis purus.
        </p>
    </div>
    <div class="row">

        <div class="col s24">
            <div class="container col s4">
                <img src="images/india.png" alt="Avatar" class="image" width="200px" height="200px">
                <div class="overlay">
                    <div class="text">INDIA</div>
                </div>
            </div>
            <div class="container col s4">
                <img src="images/usa.png" alt="Avatar" class="image" width="200px" height="200px">
                <div class="overlay">
                    <div class="text">USA</div>
                </div>
            </div>
            <div class="container col s4">
                <img src="images/china.png" alt="Avatar" class="image" width="200px" height="200px">
                <div class="overlay">
                    <div class="text">CHINA</div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="images/para1.jpe"></div>

</div>



<footer class="page-footer blue-grey darken-2">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer</h5>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>
<script type="text/javascript">

    $(document).ready(function(){
        $('.parallax').parallax();
        $('select').material_select();


        $.fn.popup.defaults.pagecontainer = '.container'
        $('#fadeandscale,#fade').popup({
            pagecontainer: '.container',
            transition: 'all 0.3s',

        });

    });

</script>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Search</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->

    <link rel="stylesheet" href="css/search.css">


    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>

    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
</head>
<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->

    <header class="header-1">
        <div id="stuck_container" class="stuck_container">
            <div class="container container-wide container container-wide-wide">

                <nav class="navbar navbar-default navbar-static-top">

                    <div class="navbar-header center-xs">
                        <h1 class="navbar-brand">
                            <a href="./">
                                <img src="images/logo.png" alt="">
                                buzarco
                            </a>
                        </h1>
                    </div>


                    <ul class="navbar-nav sf-menu navbar-right" data-type="navbar">
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li>
                            <a href="index-1.html">Our services</a>
                            
                        </li>
                        <li>
                            <a href="index-2.html">Clients</a>
                        </li>
                         <li class="dropdown">
                            <a href="index-3.html">About us</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">News</a>
                                </li>
                                <li>
                                    <a href="#">Events</a>
                                    <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Latest</a>
                                </li>
                                <li>
                                    <a href="#">Popular</a>
                                </li>
                                <li>
                                    <a href="#">Archive</a>
                                </li>
                            </ul>
                                </li>
                                <li>
                                    <a href="#">Prices</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="index-4.html">Contacts</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </header>


    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section id="content" class="content well text-center">
            <div class="container container-2051-fluid">

                <div class="search-form">
                    <form id="search" action="search.php" method="GET" accept-charset="utf-8">
                        <label class="search-form_label" for="in">
                            <input id="in" class="search-form_input" type="text" name="s"
                                   placeholder=""/>
                            <span class="search-form_liveout"></span>
                        </label>
                        <button type="submit" class="search-form_submit btn btn-lg  btn-default">search</button>
                    </form>
                </div>
                <h3 class="center-sm">Search Results</h3>

                <div id="search-results"></div>
            </div>
        </section>
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer>

        <section class="bg-dark text-center ">

            <div class="container container-wide">
                <div class="clearfix pull-left-sm">
                    <p class="h5 left-sm">Follow Us on Social Networks</p>
                    <ul class="list-inline">
                        <li><a href="#" class="icon icon-xs icon-contrast fa-facebook-square"></a></li>
                        <li><a href="#" class="icon icon-xs icon-contrast fa-linkedin-square"></a></li>
                        <li><a href="#" class="icon icon-xs icon-contrast fa-instagram"></a></li>
                        <li><a href="#" class="icon icon-xs icon-contrast fa-pinterest-square"></a></li>
                        <li><a href="#" class="icon icon-xs icon-contrast  fa-twitter-square"></a></li>
                    </ul>
                </div>
                </ul>
                <div class="clearfix pull-right-sm">
                    <p class="rights ">
                        <span id="copyright-year"></span> copyright by buzarco. <a href="index-5.html">Privacy
                            Policy</a>
                    </p>
                </div>

            </div>
        </section>
    </footer>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
<!-- </script> -->

</body>
</html>
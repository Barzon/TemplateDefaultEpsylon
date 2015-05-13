<?php
//error_reporting(E_ALL && ~E_NOTICE);
include('includes/SystemUtil.php'); //clase de funcionalidades
include('includes/menu.php'); //definiciones de menu
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="scripts/jquery/jquery-2.0.3.min.js" type="text/javascript"></script>
        <link href="css/bootstrap/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="css/bootstrap/bootstrap-3.3.2-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/bootstrap-3-lightbox/lightbox-3.2.2/dist/ekko-lightbox.min.css" rel="stylesheet" type="text/css"/>
        <script src="css/bootstrap-3-lightbox/lightbox-3.2.2/dist/ekko-lightbox.min.js" type="text/javascript"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/dropdown.css" rel="stylesheet" type="text/css"/>		
        <link href="css/font-awesome/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TemplateDefault</title>
        <script>
            (function ($) {
                $(document).ready(function () {
                    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
                        event.preventDefault();
                        event.stopPropagation();
                        $(this).parent().siblings().removeClass('open');
                        $(this).parent().toggleClass('open');
                    });
                });
            })(jQuery);
        </script>		
    </head>
    <body>
        <div class="container-fluid">
            <header>
                <div class="row">
                    <div class="col-xs-12 status-bar">                        
                        <h5 class="title"><strong>STATUS BAR</strong></h5>                        
                    </div>                    
                    <div class="col-xs-12">
                        <div class="l-margin">
                            <!-- header banner o top banner -->
                            <div class="col-xs-12">LOGO</div>
                            <div class="col-xs-12"><h3>Template Default</h3></div>
                            <div class="col-xs-12"><p>default para usar en diseños web.</p></div>                                                
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- menu -->
                    <?php SystemUtil::createMenuNav($menuParametro); ?>
                </div>
                <div class="row">
                    <ol class="breadcrumb">
                        <li class="active">Home</li>
                        <li><a href="#">Item 1</a></li>
                        <li><a href="#">Item 2</a></li>
                    </ol>
                </div>
            </header>
            <main><!-- contenedor main -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="jumbotron">
                            <h4>SLIDER TYPE / JUMBOTRON</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>                            
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <h4>ALL WIDTH CONTENT</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="col-xs-12">
                        <!-- box type -->
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="images/photo_wide.jpg" alt="photo" class="img-responsive">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="images/photo_wide.jpg" alt="photo" class="img-responsive">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="images/photo_wide.jpg" alt="photo" class="img-responsive">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="images/photo_wide.jpg" alt="photo" class="img-responsive">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-2 col-md-3"><!-- columna izquierda -->
                        <h4>LEFT CONTENT</h4>                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-6"><!-- columna central -->
                        <h4>CENTER CONTENT</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                            Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                        </p>                        
                    </div>
                    <div class="col-xs-12 col-sm-2 col-md-3"><!-- columna derecha -->       
                        <h4>RIGHT CONTENT</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>                
            </main><!-- fin contenedor principal/main -->
            <footer>
                <div class="row footer">
                    <div class="col-xs-12">
                        <!-- footer -->
                        <h5 class="text-center"><?php echo date("Y"); ?> <i class="fa fa-copyright"></i> Copyright Alejandro Lira</h5>
                        <p class="text-center">
                            Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris, sed placerat ipsum urna sed risus. In convallis tellus a mauris. Curabitur non elit ut libero tristique sodales. Mauris a lacus. Donec mattis semper leo. In hac habitasse platea dictumst. Vivamus facilisis diam at odio. Mauris dictum, nisi eget consequat elementum, lacus ligula molestie metus, non feugiat orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque gravida ipsum non sapien. Proin turpis lacus, scelerisque vitae, elementum at, lobortis ac, quam. Aliquam dictum eleifend risus. In hac habitasse platea dictumst. Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. In semper bibendum libero.
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>

<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Demo LingDao</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body-bg">
            <!-- Phone/Email -->
            <div id="pre-header" class="background-gray-lighter">
                <div class="container no-padding">
                    <div class="row hidden-xs">
                        <div class="col-sm-6 padding-vert-5">
                           
                        </div>
                        <div class="col-sm-6 text-right padding-vert-5">
                          <li>
                                       <strong><a href="pages-login.html" class="fa-user"> Se connecter</a></strong> 
                                    </li>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Phone/Email -->
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                  <div class="logo">
                            <a href="index.html" title="">
                                <h2>LING DAO Mieux être</h2>
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- End Header -->
            <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-12 no-padding">
                            <div class="visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                        <a href="admin.php" class="fa-home active">accueil</a>
                                    </li>
                                    <li>
                                    <a href="admin-formation.php" class="">E-learning</a>
                                    </li>
                                    <li >
                                        <a href="admin-blog.php" class="" >Blog</a>
                                    </li>
                                    <li >
                                        <a href="#" class="" >Journées de massage</a>
                                    </li>
                                    <li >
                                        <a href="#" class="" >Modéles</a>
                                    </li>
                                    <li >
                                        <a href="#" class="" >conférences</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div> 
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Main Column -->
                        <div class="col-md-12">
                        <form class="signup-page" action="ajouter-formation.php" method="POST" enctype="multipart/form-data">
                                <div class="signup-header">
                                    <h2>Ajouter une formation</h2>
                                   <br>
                                </div>
                               
                                
                                <label>Titre</label>
                                <input class="form-control margin-bottom-15" type="text" name="titre">

                                 <label>Type</label>
                                <select class="form-control" name="type">
  								<option value="Massage">Massage</option>
  								<option value="Naturopathie">Naturopathie</option>
  								<option value="Developpement">Developpement personnel</option>
  								<option value="Autres">Autres</option>
								</select> <br/>
                                 
								<label>Image</label>
								<input type="file" name="imgformation"/><br />

                                
                               	<label>Fichier PDF</label>
								<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
     							<input type="file" name="pdf" id="mon_fichier" /><br />

     							<label>Video</label>
								<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
     							<input type="file" name="video"  /><br />

                                <label>desription </label>
                              	<textarea rows="8" class="form-control" name="texte"></textarea>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-12 text-right">
                                        <button class="btn btn-primary" type="submit">Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>    
           

            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->
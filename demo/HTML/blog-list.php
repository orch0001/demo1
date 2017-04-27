<?php
require 'include/header.php'; 
require 'include/db.php';

            $req = $bdd->prepare('SELECT * FROM blog ');
            $req->execute();
            ?>
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Main Column -->
                        <div class="col-md-10">
                            <!-- Blog Post -->
                            <div class="blog-post padding-bottom-20">
                                <!-- Blog Item Header -->
                                <?php while($res = $req->fetch(PDO::FETCH_ASSOC)) :  ?>
                                <div class="blog-item-header">
                                    <!-- Title -->
                                    <h2>
                                        <a href="#">
                                        <?= $res['titre']; ?></a>
                                    </h2>
                                    <div class="clearfix"></div>
                                    <!-- End Title -->
                                    <!-- Date -->
                                    <div class="blog-post-date">
                                        <a href="#"><?= $res['date']; ?></a>
                                    </div>
                                    <!-- End Date -->
                                </div>
                                <!-- End Blog Item Header -->
                                
                                <!-- End Blog Item Details -->
                                <!-- Blog Item Body -->
                                <div class="blog">
                                    <div class="clearfix"></div>
                                    <div class="blog-post-body row margin-top-15">
                                        <div class="col-md-5">
                                            <img class="margin-bottom-20" src="assets/img/blog/image1.jpg" alt="thumb1">
                                        </div>
                                        <div class="col-md-7">
                                            <p><?= $res['texte']; ?></p>
                                            <!-- Read More -->
                                            <a href="#" class="btn btn-primary">
                                                Read More
                                                <i class="icon-chevron-right readmore-icon"></i>
                                            </a>
                                            <!-- End Read More -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Blog Item Body -->
                            </div>
                            <?php endwhile; ?>
                            <!-- Pagination -->
                            <ul class="pagination">
                                <li>
                                    <a href="#">&laquo;</a>
                                </li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li class="disabled">
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#">&raquo;</a>
                                </li>
                            </ul>
                            <!-- End Pagination -->
                        </div>
                        <!-- End Main Column -->
                        
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
           
            <!-- Footer -->
            <div id="base">
                <div class="container bottom-border padding-vert-30">
                    <div class="row">
                        <!-- Disclaimer -->
                        <div class="col-md-5">
                            <h3 class="class margin-bottom-10">Description</h3>
                            <p>Formations certifiantes : Massage, Médecines alternatives, Spa, Naturopathie, Hypnose " agréé ASCA et RME dans le cadre de la formation continue - agrément FFPMM - formations depuis 15 ans sous la direction de Pierre Linden - Praticien en Energie.</p>
                           
                        </div>
                        <!-- End Disclaimer -->
                        <!-- Contact Details -->
                        <div class="col-md-3 margin-bottom-20">
                            <h3 class="margin-bottom-10">Contact Details</h3>
                            <p>
                                <span class="fa-phone">Telephone:</span>1-800-123-4567
                                <br>
                                <span class="fa-envelope">Email:</span>
                                <a href="mailto:info@example.com">info@example.com</a>
                                <br>
                                <span class="fa-home">Adresse:</span>Adresse
                                
                            
                        </div>
                        <!-- End Contact Details -->
                        <!-- Sample Menu -->
                     
                            <div class="col-md-3 no-padding">
                            <ul class="social-icons pull-right">
                                <li class="social-twitter">
                                    <a href="#" target="_blank" title="Twitter"></a>
                                </li>
                                <li class="social-facebook">
                                    <a href="#" target="_blank" title="Facebook"></a>
                                </li>
                                <li class="social-googleplus">
                                    <a href="#" target="_blank" title="Google+"></a>
                                </li>
                            </ul>
                        </div>
                           
                        <!-- End Sample Menu -->
                    </div>
                </div>
            </div>
            <!-- End Footer -->
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
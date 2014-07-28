<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Luis Rodríguez</title>

  
  <link rel="stylesheet" href="css/foundation.css">

  <link rel="stylesheet" type="text/css" href="css/social_foundicons.css">
  <link rel="stylesheet" type="text/css" href="css/social_foundicons_ie7.css">
  
  
  <script type="text/javascript" src="js/analytics.js"></script>
  <script src="js/vendor/custom.modernizr.js"></script>
  <script type="text/javascript" src="js/instafeed.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/flickr.js"></script>




<!--   Look for https://github.com/stevenschobert/instafeed.js
//   <script type="text/javascript">
//     var feed = new Instafeed({
//         get: 'user',
//         userId: '4257307',
//         clientId: '640d33cb9dae4ee6a7b158dd1d2d9829',
//         limit: '4'
//     });
//     feed.run();
// </script>
-->


</head>
<body>
<!-- Navigation -->
 
  <nav class="top-bar">
    <ul class="title-area">
      <!-- Title Area -->
      <li class="name">
        <h1>
          <a href="#">
            Luis Rodríguez
          </a>
        </h1>
      </li>
    </ul>
 
    
  </nav>
 
  <!-- End Top Bar -->
 
  <div class="row">
    <div class="large-12 columns">
 
      <div class="row">
        <div class="large-12 columns">
          <div class="row">

            <!-- About Me -->
            <div class="large-4 small-12 columns">
 
              <h4>About Me</h4><hr>
 
              <div class="row">
                <div class="large-12 columns">

                	
                	<img src="img/LuisRodriguez.jpg"> <hr>
                	

                	
                  <p style="text-align:justify;">Student in Computer Engineering at the National Autonomous University of Mexico (UNAM), Chief Technology Ofﬁcer at AITS Consulting, IT Solutions Company based in Mexico City, Specialised 
                  in custom software development for small business. Expertise with project management and 
                  process optimisation. Research assistant at CPLD Lab. from UNAM’s school of Engineering. 
                  </p>
                  <h6 class="subheader">Contact:</h6> say.hi[at]luigisrs.me
                </div>
              </div>
            </div>
            <!-- End About Me -->
 
 			<!-- Work -->
            <div class="large-4 small-12 columns">
 
              <h4>Work</h4><hr>
 
              <div class="row">
                <div class="large-12 columns">
                  <h5 class="subheader">CTO  at <a href="http://aits.mx" target="_BLANK">AITS Consulting</a></h5>
                  <p>México, D.F. January 2013 - Present
                    <ul>
                      <li>Corporate Sites Development and Online Stores implementation, focusing on UX and Project Development Activities.</li>
                      <li>Development Team Planning and Leadership.</li>
                    </ul>
                  </p>
                  <h5 class="subheader">Research Assistant at <a href="http://ingenieria.unam.mx" target="_BLANK">UNAM</a></h5>
                  <p>México, D.F. September 2013 - Present
                    <ul>
                      <li>Identify and formalize research questions.</li>
                      <li>Design and manage analyses. System Design.</li>
                      <li>Writing and presenting research results.</li>
                    </ul>
                  </p>
                  <h5 class="subheader">Senior ITS Manager at <a href="http://ailum.org" target="_BLANK">AILUM A.C.</a></h5>
                  <p>México, D.F. September 2013 - Present
                    <ul>
                      <li>Website Development and Maintenance.</li>
                      <li>Media and Press Communications.</li>
                    </ul>
                  </p>

                  

                </div>
              </div><br><br><br> 
            </div>

            <div class="large-4 small-12 columns">
              <h4>Education & Research </h4><hr>

              <h6>Computer Engineering — <a href="http://www.ingenieria.unam.mx">UNAM</a></h6>
              <hr>

              <h5 class="subheader">Real time Crowdsourcing of Volunteer tasks</h5>
                  <p>Web-based application that, via data mining techniques, helps users identify in real time skilful people to collaborate and coordinate in community labours and causes, based on their social media behaviour.</p>
              <h5 class="subheader">Visual Analysis of Volunteer tasks</h5>
                  <p>We study the use of data visualisations to help community leaders find the right candidates for their various events and tasks for social good.</p>
              <h5 class="subheader">Conceptualising Technologies to Support Collaboration and Coordination of Volunteers</h5>
                  <p>This work analyses the needs of participants and organizers of volunteer events, to design technology that can help both parties in their tasks and goals. </p>

            </div>
          </div>

        </div>
      </div>


      <div class="row">
        <div class="large-12 small-12">
              
              <h4>Data Feed</h4><hr>
              
              <div class="large-4 small-12 columns">
                <div class="panel">
                  <h5><i class="foundicon-rss"></i> Blog</h5>
                    <h6 class="subheader">
                    <?php
                      include('php/rssclass.php');
                      $feedlist = new rss('http://luigisrs.me/blog/?feed=rss2');
                      echo $feedlist->display(1," ");
                    ?>
                    </h6>
                <a href="http://blog.luigisrs.me">More»</a>
                </div>
              </div>

              <div class="large-4 small-12 columns">
                <div class="panel">
                  <h5><i class="foundicon-twitter"></i> Twitter</h5>
                  <h6 class="subheader">
                   <?php 
                    include('php/twitter.php');
                    echo getTweets('luigisrs', 1);
                   ?> 
                  </h6>
                  <br> <a href="http://twitter.com/luigisrs">More»</a>
                </div>
              </div>

              <div class="large-4 small-12 columns">
                <div class="panel">
                  <h5><i class="foundicon-flickr"></i> Flickr</h5>
                  <div id="images"></div>
                  <hr><a href="http://www.flickr.com/luigisrs">More»</a>
                  
                  
                </div>
              </div>

          </div>

      </div>

 
    <!-- End Content -->
 
 
    <!-- Footer -->
 
      <footer class="row">
        <div class="large-12 columns"><hr>
            <div class="row">
 
              <div class="large-6 columns">
                  <p><a class="social" href="http://facebook.com/luigisrs"><i class="foundicon-facebook"></i></a> 
        <a class="social" href="http://instagram.com/luigisrs"><i class="foundicon-instagram"></i></a> 
        <a class="social" href="http://www.linkedin.com/profile/view?id=36906535&trk=tab_pro"><i class="foundicon-linkedin"></i></a> 
        <a class="social" href="http://flickr.com/luigisrs"><i class="foundicon-flickr"></i></a> 
        <a class="social" href="http://tumblr.luigisrs.me"><i class="foundicon-tumblr"></i></a>    &copy; <script>document.write(new Date().getFullYear())</script>. Luis Rodríguez</p>

              </div>


 
              <!-- <div class="large-6 small-12 columns">
                  <ul class="inline-list right">
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                  </ul>
              </div> -->
 
            </div>
        </div>
      </footer>
 
    <!-- End Footer -->
 
    </div>
  </div>
 
  <script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
<!-- End Footer -->
</body>
</html>

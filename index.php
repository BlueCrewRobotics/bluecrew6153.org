<html lang="en">

<?php
include_once('resources/include/head.php');
include_once('resources/include/navbar.php');
?>
    
<body>

<section>

    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
              <div class="container pad">
                <h1 class="display-3">Blue Crew Robotics</h1>
                <p class="lead">Spreading Science, Technology, Engineering, and Mathematics in Franklin County.</p>
                <hr class="my-4">
                <p class="lead">We are The Blue Crew and we are a not-for-profit robotics team based in Farmington, Maine. We mainly operate out of Mt. Blue Campus and are headed by our coach Mr. Richard Wilde. Our team consists of 18 devoted members from all throughout Franklin County, Maine.</p>
                <hr class="my-4">
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="/about/" role="button">Learn More</a>
                </p>
            </div>
        </div>
    </div>

    <div id="imageCarousel" class="carousel slide pad" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#imageCarousel" data-slide-to="1"></li>
        <li data-target="#imageCarousel" data-slide-to="2"></li>
        <li data-target="#imageCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
        <img src="resources/images/2018.jpg" alt="...">
        <script type="text/javascript">
            if(window.innerWidth >= 800 && window.innerHeight >= 600) {
                document.write('<div class="carousel-caption"><h3>Winning the Entrepreneurship Award at Pine Tree</h3></div>');
            }
        </script>
        </div>
        <div class="item">
        <img src="resources/images/2018_2.jpg" alt="...">
        <script type="text/javascript">
            if(window.innerWidth >= 800 && window.innerHeight >= 600) {
                document.write('<div class="carousel-caption"><h3>Our Team</h3></div>');
            }
        </script>
        </div>
        <div class="item">
        <img src="resources/images/pratt.jpg" alt="...">
        <script type="text/javascript">
            if(window.innerWidth >= 800 && window.innerHeight >= 600) {
                document.write('<div class="carousel-caption"><h3>Pratt &amp; Whitney</h3></div>');
            }
        </script>
        </div>
        <div class="item">
        <img src="resources/images/stand.jpg" alt="...">
        <script type="text/javascript">
            if(window.innerWidth >= 800 && window.innerHeight >= 600) {
                document.write('<div class="carousel-caption"><h3>Root Beer Float Stand</h3></div>');
            }
        </script>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#imageCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#imageCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

    <br />
    
</section>

<?php
include_once('resources/include/footer.php');
?>

</body>

</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="/wedding/wedding_style.css" rel="stylesheet" type="text/css" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet' type='text/css'>
        
        <title>Photos | Wedding</title>
        
        <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="/js/jquery.fittext.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.carousel').carousel();
            });
        </script>
    </head>
    <body>
        <header>            
            <h1 id="photohead">The Photos</h1>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/wedding/wedcommon/wedfooter.php'; ?>
        </header>
        <div id="myCarousel" class="carousel">
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="active item"><img src="/wedding/images/1.jpg" /></div>
                <div class="item"><img src="/wedding/images/2.jpg" /></div>
                <div class="item"><img src="/wedding/images/3.jpg" /></div>
                <div class="item"><img src="/wedding/images/4.jpg" /></div>
                <div class="item"><img src="/wedding/images/5.JPG" /></div>
                <div class="item"><img src="/wedding/images/6.JPG" /></div>
                <div class="item"><img src="/wedding/images/7.JPG" /></div>
                <div class="item"><img src="/wedding/images/8.JPG" /></div>
                <div class="item"><img src="/wedding/images/9.JPG" /></div>
                <div class="item"><img src="/wedding/images/10.JPG" /></div>
                <div class="item"><img src="/wedding/images/11.JPG" /></div>
                <div class="item"><img src="/wedding/images/12.JPG" /></div>
                <div class="item"><img src="/wedding/images/13.JPG" /></div>
                <div class="item"><img src="/wedding/images/14.JPG" /></div>
                <div class="item"><img src="/wedding/images/15.JPG" /></div>
                <div class="item"><img src="/wedding/images/16.JPG" /></div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
        <br />
        <footer>
            
        </footer>
        <script type="text/javascript">
            $("#photohead").fitText();
        </script>
    </body>
</html>
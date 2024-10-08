<!DOCTYPE html>
<html  lang="pl">

<head>
    <meta charset="utf-8"/>
    <title>Najquiz.com</title>
    <meta name="description" content="Najepszy quiz w internecie"/>
    <meta name="keywords" content="Quiz" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="author" content="Dominik Szczepański" />
    <link rel="stylesheet"href="styles.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="stylesheet"href="quiz_css/fontello.css" type="text/css" />
</head>

<body>

    <div class="wrapper">
        <div class="hedder">
            <div class="logo">
                <span style="color: #c34f4f"> najquiz</span>.com
                <div style="clear:both;"></div>
            </div>
        </div>
        <div class="nav">
            <ol>
                <li><a href="index.php">Strona główna</a></li>
                <li><a href="start.php">Graj</a> </a>   
                </li>
                <li><a href="#">Kontakt</a>
                    <ul>
                        <li><a href="#">Mail</a></li>
                       
                        <li><a href="#">Telefon</a></li>
                    </ul>
                </li>
               
                <li><a href="#">Akty prawne</a>
                    <ul>
                        <li><a href="#">Regulamin <br>serwisu</a></li>
                        
                    </ul>
                </li>
                <li><a href="#">O nas</a>
                    <ul>
                        <li>Autor</li>
                    </ul>                              
                </li>
                


            </ol>


        </div>
    </div>

    <div class="content">
         
        <div class="witam">

            <div class="napis">
                Autor programu: Dominik Szczepański 3A1
                <div class="thx">
                    
                    IV LO im. Stanisława Staszica w Sosnowcu
                <br><br>
                    Współtwórcy: Profesor, Jakub, YouTube, Google
                </div>
                
            </div>
        </div>
        

        <div class="socials">
            <div class="socialdivs">  
                <div class="fb">
                    <i class="icon-facebook-1"></i>
                </div> 
                <div class="yt">
                    <i class="icon-youtube"></i>
                </div> 
                <div class="tw">
                    <i class="icon-twitter"></i>
                </div> 
                <div class="ig">
                    <i class="icon-instagram-filled"></i>
                </div> 
                <div style="clear:both"></div>
            </div>
        </div>
        <div class="footer">
             Dominik Szczepański - najquiz.com &copy; 2023 - <?php echo date('Y'); ?>


        </div>

    </div>


    
    <!-- JS script: sticki menu & jQuery -->
	<script src="jquery-1.11.3.min.js"></script>
	
    <script>

        $(document).ready(function() {
        var NavY = $('.nav').offset().top;
        
        var stickyNav = function(){
        var ScrollY = $(window).scrollTop();
            
        if (ScrollY > NavY) { 
            $('.nav').addClass('sticky');
        } else {
            $('.nav').removeClass('sticky'); 
        }
        };
        
        stickyNav();
        
        $(window).scroll(function() {
            stickyNav();
        });
        });
	
    </script>

</body>
</html>

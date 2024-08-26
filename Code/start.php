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
              <!--  <img src=.'quiz.jpg' style="float: left;"/> -->
                <span style="color: #c34f4f"> najquiz</span>.com
                <div style="clear:both;"></div>
            </div>
        </div>
        <div class="nav">
            <ol>
                <li><a href="index.php">Strona główna</a></li>
                <li>Graj</li>
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
                        <li><a href="autor.php">Autor</a></li>
                    </ul>                              
                </li>
            </ol>
        </div>
    </div>  

    <?php
        for($i=1; $i<=10; $i++)
            $tab[$i]=rand(0,14);
            


        for($i=1; $i<=10; $i++)
        {
            for($j=1; $j<=10; $j++)
            {
                if($tab[$i]==$tab[$j] & $i!=$j)
                {
                    $tab[$i]=rand(0,14);
                    $j=0;
                }
            }
        }
           
        $zaw=fopen('kolejnosc.txt','w');
        for($j=1; $i<=10; $i++)
        fwrite($zaw,$tab[$i]. "\n");
        fclose($zaw)

    ?>

        <form action=result.php method="post">
            
    <div class="content">

        <!--<form action=Quiz2.php method="post">-->

            <?php
                for($j=1; $j<=10; $j++)
                {
                $z=fopen('quiz.txt', 'r');
            
                for($i=1;$i<=5*$tab[$j];$i++)
                fgets($z);
            ?>

            <div class="pytanie">
                <?php
                    $t = fgets($z);
                    echo $t;
                    $k=0;
                ?>
            </div>
            
            <div class="odp">
                <input type="radio" value="A" name="<?php echo $j ?>" id="<?php echo $k+4*$tab[$j]?>">
                    <label for="<?php echo $k+4*$tab[$j]?>">
                        <?php
                            $t = fgets($z);
                            echo $t;
                            $k++;
                        ?>
                    </label>
            </div>
                
            <div class="odp">
                <input type="radio" value="B" name="<?php echo $j ?>" id="<?php echo $k+4*$tab[$j]?>">
                    <label for="<?php echo $k+4*$tab[$j]?>">
                        <?php
                            $t = fgets($z);
                            echo $t;
                            $k++;
                        ?>
                    </label>
            </div>

            <div class="odp">
                <input type="radio" value="C" name="<?php echo $j ?>" id="<?php echo $k+4*$tab[$j]?>">
                    <label for="<?php echo $k+4*$tab[$j]?>">
                        <?php
                            $t = fgets($z);
                            echo $t;
                            $k++;
                        ?>
                </label>
            </div>

            <div class="odp">
                <input type="radio" value="D" name="<?php echo $j ?>" id="<?php echo $k+4*$tab[$j]?>">
                    <label for="<?php echo $k+4*$tab[$j]?>">
                        <?php
                            $t = fgets($z);
                            echo $t;
                            fclose($z);
                        ?>
                    </label>
            </div>
                
            <br>
            <?php
                }      
            ?>
            <div class="input">

            <input type="submit" class="guzik" value="Sprawdź">
            </form>
            <br><br>
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
             Dominik Szczepański- najquiz.com &copy; 2023 - <?php echo date('Y'); ?>
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


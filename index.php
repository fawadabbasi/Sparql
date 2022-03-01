<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
    <meta charset="UTF-8">
    <title>KESW Project</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){
            $('.resultdata').hide();
            $(".results").click(function(){
                if($(".resultdata").is(":visible")){
                    $('.resultdata').hide(2000);
                }else {
                    $('.resultdata').show(2000);
                }
            });
        });

    </script>
</head>
<body>
<div id="header">
    <div class="clearfix">
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt="LOGO" height="52" width="200"></a>
        </div>
        <ul class="navigation">
            <li class="active">
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#" class="results">Results</a>
            </li>
        </ul>
    </div>
</div>
<div id="contents">
    <div id="adbox">
        <div class="clearfix">
            <img src="images/sparql.png" alt="Img" height="382" width="594">
            <div class="detail">
                <h1>Knowledge Engineering<br>& Semantic Web</h1>
                <p>
                    Data <br> Representation.
                </p>
            </div>
        </div>
    </div>
    <div class="highlight">
        <div class="clearfix">

            <h1>Results</h1>
            <p class="resultdata hidden">
              <?php
              include_once ("data.php");
              ?>
            </p>
        </div>
    </div>
    <div class="featured">
        <h2>Statistics</h2>
        <ul class="clearfix">
            <li>
                <div class="frame1">
                    <div class="box">
                        <img src="nimages/actorsbirthplaces.png" alt="Img" height="130" width="197">
                    </div>
                </div>
                <p>
                    <b>Actors Birth places</b> Highest numbers of actors born in US.<br><br>
                </p>
                </p>
                <a target="_blank" href="nimages/actorsbirthplaces.png" class="more">View Large</a>
            </li>
            <li>
                <div class="frame1">
                    <div class="box">
                        <img src="nimages/awardscount.png" alt="Img" height="130" width="197">
                    </div>
                </div>
                <p>
                    <b>Awards Count</b> Most of  actors have 14 awards according to  results from the query.
                </p>
                <a target="_blank" href="nimages/awardscount.png" class="more">View Large</a>
            </li>
            <li>
                <div class="frame1">
                    <div class="box">
                        <img src="nimages/deathVsdate.png" alt="Img" height="130" width="197">
                    </div>
                </div>
                <p>
                    <b>Death Cause w.r.t Date</b> Heart Failure and  Lungs cancer is the major cause of Death in last 2 decadesx
                </p>
                <a href="nimages/deathVsdate.png" class="more">View Large</a>
            </li>
            <li>
                <div class="frame1">
                    <div class="box">
                        <img src="nimages/resultdeathcause.png" alt="Img" height="130" width="197">
                    </div>
                </div>
                <p>
                    <b>Cause of Death</b>Thrombus is the major cause of death<br><br>
                </p>
                <a href="nimages/resultdeathcause.png" class="more">View Large</a>
            </li>
        </ul>
    </div>
</div>
<div id="footer">
    <div class="clearfix" style="width: 100%">
        <?php
            include_once('graph.php');
        ?>
    </div>
    <div id="footnote">
        <div class="clearfix">
            <div class="connect">
                </div>
            <p>
                Fawad Abbasi. knowledge Eng & Semantic Web
            </p>
        </div>
    </div>
</div>
</body>
</html>
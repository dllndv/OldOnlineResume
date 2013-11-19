<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="/wedding/wedding_style.css" rel="stylesheet" type="text/css" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet' type='text/css'>
        <title>Home | Wedding</title>

        <script type="text/javascript">

            //Set the time you want to count to, the timezone, and the end message
            var ourYear = 2012;
            var ourMonth = 07;
            var ourDay = 28;
            var ourHour = 10;
            var ourMinute = 30;
            var ourZone = -6;
            var ourMessage = "We're Married! :D"

            //declare month array
            var months = new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

            //Here's the function that does all the magic!
            function countDownTime(year, month, day, hour, minute){
                //Set variables to be used in recursion
                conYear = year;
                conMonth = month;
                conDay = day;
                conHour = hour;
                conMin = minute;

                //store the parts of today's date
                var today = new Date();
                var tYear = today.getYear();
                if (tYear < 1000)
                    tYear += 1900;
                var tMonth = today.getMonth();
                var tDay = today.getDate();
                var tHour = today.getHours();
                var tMin = today.getMinutes();
                var tSec = today.getSeconds();

                //Take today's date info, and the future one, format them as proper dates, and subtract them
                var tempString = months[tMonth] + " " + tDay + ", " + tYear + " " + tHour + ":" + tMin + ":" + tSec;
                var todayString = Date.parse(tempString) + (ourZone * 3600000);
                tempString = (months[month - 1] + " " + day + ", " + year + " " + hour + ":" + minute);
                var futureString = Date.parse(tempString) - (today.getTimezoneOffset() * (60000));

                //Do the math that figures out the number to be displayed on the screen
                dDate = futureString - todayString;
                dDay = Math.floor(dDate / (60 * 60 * 1000 * 24) * 1);
                dHour = Math.floor((dDate % (60 * 60 * 1000 * 24)) / (60 * 60 * 1000) * 1);
                dMin = Math.floor(((dDate % (60 * 60 * 1000 * 24)) % (60 * 60 * 1000)) / (60 * 1000) * 1);
                dSec = Math.floor((((dDate % (60 * 60 * 1000 * 24)) % (60 * 60 * 1000)) % (60 * 1000)) / 1000 * 1);

                //Recursion time! 
                if (dDay <= 0 && dHour <= 0 && dMin <= 0 && dSec <= 0) {
                    $("#endNote").html(ourMessage);
                    $("#dday").html(dDay);
                    $("#dhour").html(dHour);
                    $("#dmin").html(dMin);
                    $("#dsec").html(dSec);
                    return;
                } else {
                    $("#endNote").html("");
                    $("#dday").html(dDay);
                    $("#dhour").html(dHour);
                    $("#dmin").html(dMin);
                    $("#dsec").html(dSec);
                    setTimeout("countDownTime(conYear, conMonth, conDay, conHour, conMin)" , 1000);
                }
            }
        </script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="/js/jquery.fittext.js"></script>
    </head>
    <body onload="countDownTime(ourYear,ourMonth,ourDay,ourHour,ourMinute)">   
        <header>            
            <h1 id="wedMain" align="center">Gettin' Married.</h1>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/wedding/wedcommon/wedfooter.php'; ?>
            <h1 id="wedSub" align="center">Dallen Loder &hearts; McCall Hobbs</h1>
            <h1 id="wedDubSub" align="center">July 28th, 2012</h1>
        </header>

        <h1 id="endNote"></h1>

        <div id="number">
            <div class="countItems">
                <h1 class="countsub" id="dday"></h1>
                <h1 class="countsub" id="ldays">Days</h1>
            </div>
            <div class="countItems">
                <h1 class="countsub" id="dhour"></h1>
                <h1 class="countsub" id="lhours">Hours</h1>
            </div>
            <div class="countItems">
                <h1 class="countsub" id="dmin"></h1>
                <h1 class="countsub" id="lminutes">Minutes</h1>
            </div>
            <div class="countItems">
                <h1 class="countsub" id="dsec"></h1>
                <h1 class="countsub" id="lseconds">Seconds</h1>
            </div>
        </div>
        <br />
        <footer>
           
        </footer>
        
        <script type="text/javascript">
            $("#number").fitText(4.5, { minFontSize: '10px', maxFontSize: '30px' });  
            $("#wedMain").fitText();
            $("#wedSub").fitText(1.5, { minFontSize: '1px', maxFontSize: '60px' });
            $("#wedDubSub").fitText(0.8, { minFontSize: '1px', maxFontSize: '35px' });
            
            //to fix the fonts...
            $('.countsub').each(function(){
                $(this).attr('style','');
            });   
        </script>

    </body>

</html>
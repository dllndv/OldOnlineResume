<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="/wedding/wedding_style.css" rel="stylesheet" type="text/css" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet' type='text/css'>
        
        <title>Information | Wedding</title>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="/js/jquery.fittext.js"></script>
        <script>
           function password(){
                var realPass = "DallenMcCall2012";
                var fromUser = document.information.word.value;
            
                if(fromUser === realPass)
                    $("#infocontent").slideDown(500, function(){
                        $(".goaway").slideUp(500, function(){
                            $("#navigate").animate({top:"110px"}, "normal");
                        });
                    });
                else
                    alert("Password Incorrect.");
                return false;
            }
        </script>
    </head>
    <body>
        <header>
            <div class="goaway">
                <h1 id="infohead" style="margin: 0;">Information</h1>
            </div>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/wedding/wedcommon/wedfooter.php'; ?>
            <h1 id="infodescr" style="margin-top: 0;">This is where to find everything you need to know...</h1>
        </header>
        <div class="goaway">
            <div id="mainaddress">
                <div class="container-fluid">
                    <div class="row-fluid"> 
                        <div class="span4 offset4">
                            <p></p>
                            <form class="form-horizontal" name="information">
                                <fieldset>
                                    <legend style="margin-bottom: 0;">Password Protected:</legend>
                                    <div class="control-group">
                                        <p class="help-block" style="width: 450px; margin: 0 0 10px 0px;">This page is invite only. You must enter the password to see the content.</p>
                                    
                                        <div class="controls" style="margin-left: 120px;">
                                            <input type="text" class="input-medium" id="fname" name="word" placeholder="Type Password Here." autofocus="autofocus">
                                            <input type="submit" name="pass" class="btn" onclick="return password();" value="Submit">
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="infocontent">
            <h1 id="welbanner">Welcome!</h1>
            <div id="reception" class="infosections">
                <h1 id="recep">Here's Some Information About The Wedding:</h1>
                <hr />
                <h2 class="infoheader">When:</h2>
                <p>The Temple sealing will take place at 10:30am in the Idaho Falls Temple on Saturday, July 28th 2012</p>
                <p>The Reception in Shelley will be held from 6:30 to 8:30pm on Saturday, July 28th 2012</p>
                <p>The Open House in Tracy will be held from 6:30 to 8:30pm on Friday, August 3rd 2012</p>
                <br />
                <h2 class="infoheader">Where:</h2>
                <h2 class="places">Shelley Reception</h2>
                <p>The reception will be held at the Shelley South Stake Center. A map and a QR code with directions to the Stake Center are located below:</p>
                <div style="max-width: 100%;">
                    <div style="display: inline-block; margin: 50px 0 0 10%;">
                        <iframe width="600" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?hl=en&amp;q=target-new+property+css&amp;ie=UTF8&amp;t=m&amp;ll=43.373143,-112.127988&amp;spn=0.005459,0.012875&amp;z=16&amp;iwloc=lyrftr:m,3658365645415236472,43.370882,-112.117871&amp;output=embed"></iframe>
                        <br />
                        <small><a href="https://maps.google.com/?ie=UTF8&amp;t=m&amp;ll=43.371794,-112.118053&amp;spn=0.00273,0.006437&amp;z=17&amp;iwloc=lyrftr:unknown,3658365645415236472,,&amp;source=embed" style="color:#FF7F00;text-align:left;">View Larger Map</a></small>
                    </div>
                    <div style="display: inline-block; margin-left: 10%; vertical-align: 10%;">
                        <h2 style="text-align: center; margin: 0;">Have A Smart Phone?</h2>
                        <p>Scan with your phone to get directions!</p>
                        <img class="codes" src="/wedding/images/church.jpg" />
                    </div>
                </div>
                <br/>
                <hr />
                <h2 class="places">Tracy Open House</h2>
                <p>The Open house will be held at the Loder residence. A map and a QR code with directions to the house are located below:</p>
                <div style="max-width: 100%;">
                    <div style="display: inline-block; margin: 50px 0 0 10%;">
                        <iframe width="600" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=8420+Fairoaks+Rd,+Tracy,+CA&amp;aq=0&amp;oq=8420&amp;sll=43.370734,-112.116455&amp;sspn=0.006653,0.013905&amp;ie=UTF8&amp;hq=&amp;hnear=8420+Fairoaks+Rd,+Tracy,+California+95304&amp;t=m&amp;ll=37.707081,-121.416414&amp;spn=0.005942,0.012875&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe>
                        <br />
                        <small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=8420+Fairoaks+Rd,+Tracy,+CA&amp;aq=0&amp;oq=8420&amp;sll=43.370734,-112.116455&amp;sspn=0.006653,0.013905&amp;ie=UTF8&amp;hq=&amp;hnear=8420+Fairoaks+Rd,+Tracy,+California+95304&amp;t=m&amp;ll=37.704756,-121.408947&amp;spn=0.005942,0.012875&amp;z=16&amp;iwloc=A" style="color:#FF7F00;text-align:left">View Larger Map</a></small>
                    </div>
                    <div style="display: inline-block; margin-left: 10%; vertical-align: 10%;">
                        <h2 style="text-align: center; margin: 0;">Have A Smart Phone?</h2>
                        <p>Scan with your phone to get directions!</p>
                        <img class="codes" src="/wedding/images/home.jpg" />
                    </div>
                </div>
                <br />
                <h2 class="infoheader">Registries:</h2>
                <p>We are registered at the following locations:</p>
                <div style="max-width: 90%; right: 0; margin-left: 5%;">
                    <div  style="display: inline-block; text-align: center; max-width: 33%; min-width: 30%;">
                        <h2 class="stores">Target</h2>
                        <a target="_newtab0" href="http://www.target.com/wedd/registry/rfPygJCC2mevyTMNNxzA2Q"><button class="btn">See Registry</button></a>
                    </div>
                    <div  style="display: inline-block; text-align: center; max-width: 33%; min-width: 30%;">
                        <h2 class="stores">Bed Bath and Beyond</h2>
                        <a target="_newtab1" href="http://www.bedbathandbeyond.com/reggiftregistry.asp?wrn=-951862194"><button class="btn">See Registry</button></a>
                    </div>
                    <div  style="display: inline-block; text-align: center; max-width: 33%; min-width: 30%;">
                        <h2 class="stores">Kohls</h2>
                        <a target="_newtab2" href="http://www.kohls.com/upgrade/gift_registry/kohlsgrw_registry_view.jsp?REGISTRY_SEARCH%3C%3EREGISTRY_TYPE=-1&REGISTRY_SEARCH%3C%3ESEARCH_REGISTRY=1%2C696%2C209&REGISTRY_SEARCH%3C%3ESTATUS=4&FOLDER%3C%3Efolder_id=2534374757646390&bmForm=grw_search_registry&bmFormID=1341354687172&bmSubmit=SUBMIT_FILTER_ID&bmUID=1341354687172&bmHash=3706f4d567d0a7d1daea450ec90040f34f057140"><button class="btn">See Registry</button></a>
                    </div>
                </div>
                <p style="margin-top: 30px; margin-bottom: 20px;">If sending gifts, please send them to the Hobb's home address</p>
            </div>
        </div>
        <div id="footer">
            
        </div>
        <script type="text/javascript">
            $("#infohead").fitText();
            $("#infodescr").fitText(3.0, { minFontSize: '10px', maxFontSize: '60px' });
            $("#welbanner").fitText();
            $(".infoheader").fitText(1.0, { minFontSize: '10px', maxFontSize: '60px' });
            $("#recep").fitText(3.0, { minFontSize: '10px', maxFontSize: '50px' });
            $(".places").fitText(1.0, { minFontSize: '10px', maxFontSize: '35px' });
            $(".stores").fitText(1.0, { minFontSize: '10px', maxFontSize: '35px' });
            
            $("#infocontent").hide();
        </script>
    </body>
</html>
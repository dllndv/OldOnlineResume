<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="/wedding/wedding_style.css" rel="stylesheet" type="text/css" media="screen">
        <link href="/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet' type='text/css'>
        <title>Invitations | Wedding</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="/js/jquery.fittext.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>

        </header>
        <h1 id="construction">Under Construction.</h1>
        <h1 id="construction2">I will be up and running shortly.</h1>
        <div id="mainaddress">

            <div class="container-fluid">
                <div class="row-fluid"> 
                    <div class="span4 offset4">
                        <p></p>
                        <form class="form-horizontal">
                            <fieldset>
                                <legend>Please Enter Your Address:</legend>
                                <div class="control-group">
                                    <label class="control-label" for="fname">First Name</label>
                                    <div class="controls">
                                        <input type="text" class="input-medium" id="fname" placeholder="Type First Name Here." autofocus="autofocus">
                                        <p class="help-block"></p>
                                    </div>
                                    <label class="control-label" for="lname">Last Name</label>
                                    <div class="controls">
                                        <input type="text" class="input-medium" id="lname" placeholder="Type Last Name Here.">
                                        <p class="help-block"></p>
                                    </div>
                                    <label class="control-label" for="address">Address</label>
                                    <div class="controls">
                                        <input type="text" class="input-xlarge" id="address"  placeholder="Type Address Here.">
                                        <p class="help-block">ex. 123 1st street, Apt 108</p>
                                    </div>
                                    <label class="control-label" for="city">City</label>
                                    <div class="controls">
                                        <input type="text" class="input-large" id="city" placeholder="Type City Here.">
                                        <p class="help-block"></p>
                                    </div>
                                    <label class="control-label" for="state">State</label>
                                    <div class="controls">
                                        <input type="text" class="input-mini" id="state" maxlength="2" size="3">
                                        <p class="help-block">Two letters please!</p>
                                    </div>
                                    <label class="control-label" for="zip">Zip Code</label>
                                    <div class="controls">
                                        <input type="text" class="input-small" id="zip" maxlength="5">
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="controls">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-inverse">Clear</button>
                                        <p style="float: right; margin-top: 3px; margin-right: 15px; color: #555; font-size: 90%;">All fields are required.</p>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/wedding/wedcommon/wedfooter.php'; ?>
        </footer>
        <script type="text/javascript">
            $("#construction").fitText();
            $("#construction2").fitText(3.0, { minFontSize: '10px', maxFontSize: '60px' });
        </script>
    </body>
</html>

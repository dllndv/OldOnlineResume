<!DOCTYPE html>
<html>
    <head>
        <link href="/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link href="/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" media="screen">
        <script src="/bootstrap/js/bootstrap.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript">            
                $('.input-mini').typeahead();
        </script>
    </head>
    <body>
        <header>
            <h1>Form Testing!</h1>
        </header> 
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
                                    <input type="text" class="input-xlarge" id="fname">
                                    <p class="help-block"></p>
                                </div>
                                <label class="control-label" for="lname">Last Name</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" id="lname">
                                    <p class="help-block"></p>
                                </div>
                                <label class="control-label" for="address">Address</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" id="address">
                                    <p class="help-block">ex. 123 1st street, Apt 108</p>
                                </div>
                                <label class="control-label" for="city">City</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" id="city">
                                    <p class="help-block"></p>
                                </div>
                                <label class="control-label" for="state">State</label>
                                <div class="controls">
                                    <input type="text" class="input-mini" autocomplete="on" data-provide="typeahead" id="state"  maxlength="2" data-items="6" data-source="[&quot;AL&quot;,&quot;AK&quot;,&quot;AZ&quot;,&quot;AR&quot;,&quot;CA&quot;,&quot;CO&quot;,&quot;CT&quot;,&quot;DE&quot;,&quot;FL&quot;,&quot;GA&quot;,&quot;HI&quot;,&quot;ID&quot;,&quot;IL&quot;,&quot;IN&quot;,&quot;IA&quot;,&quot;KS&quot;,&quot;KY&quot;,&quot;LA&quot;,&quot;ME&quot;,&quot;MD&quot;,&quot;MA&quot;,&quot;MI&quot;,&quot;MN&quot;,&quot;MS&quot;,&quot;MO&quot;,&quot;MT&quot;,&quot;NE&quot;,&quot;NV&quot;,&quot;NH&quot;,&quot;NJ&quot;,&quot;NM&quot;,&quot;NY&quot;,&quot;NC&quot;,&quot;ND&quot;,&quot;OH&quot;,&quot;OK&quot;,&quot;OR&quot;,&quot;PA&quot;,&quot;RI&quot;,&quot;SC&quot;,&quot;TN&quot;,&quot;TX&quot;,&quot;UT&quot;,&quot;VT&quot;,&quot;VA&quot;,&quot;WA&quot;,&quot;WV&quot;,&quot;WI&quot;,&quot;WY&quot;]">
                                    <p class="help-block"></p>
                                </div>
                                <label class="control-label" for="zip">Zip Code</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" id="zip">
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

        
    </body>
</html>

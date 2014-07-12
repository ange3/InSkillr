<html>
<head>

	<script type="text/javascript" src="http://platform.linkedin.com/in.js">
 //  		api_key: 753p0qzm9kbapl
 //  		onLoad: onLinkedInLoad
 //  		authorize: true
	</script>

	<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
	<link rel="stylesheet" type="text/css" href="assets/index.css">

	<title>Path to your dreams!</title>
</head>
<body>
    <style>
    body {
        background: url("bg3.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    
    }
    </style>

<br><br><br><br><br><br><br><br><br><br><br><br>
<h1><center>What do you dream of becoming?</center></h1>

<script type="in/Login">
// Hello, <?js= firstName ?> <?js= lastName ?>.
// <img alt="<?js= headline ?>" src="<?js= pictureUrl ?>"></img>
</script>

<div class="container">
    
    <div style="position: relative; height: 150px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="country" id="autocomplete-ajax" style="position: absolute; z-index: 2;"/>
        <input type="text" name="country" id="autocomplete-ajax-x" disabled="disabled" style="color: #EEE; position: absolute; z-index: 1;"/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php $position = $_GET['country'];
            echo $position;
        echo "<a href=\"index2.html?"+ .$position+ "\"><img src=\"search_icon.jpg\" height=\"30\" width=\"30\"></a>"
        ?>
    </div>
    
</div>

<script type="text/javascript" src="scripts/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="scripts/jquery.mockjax.js"></script>
<script type="text/javascript" src="src/jquery.autocomplete.js"></script>
<script type="text/javascript" src="scripts/countries.js"></script>
<script type="text/javascript" src="scripts/demo.js"></script>
<!-- Use of this code assumes agreement with the Google Custom Search Terms of Service. -->
<!-- The terms of service are available at http://www.google.com/cse/docs/tos.html -->
<!--<form name="cse" id="searchbox_demo" action="http://www.google.com/cse">
    <input type="hidden" name="cref" value="" />
    <input type="hidden" name="ie" value="utf-8" />
    <input type="hidden" name="hl" value="" />
    <input name="q" type="text" size="40" />
    <input type="submit" name="sa" value="Search" />
</form>
<script type="text/javascript" src="https://www.google.com/cse/tools/onthefly?form=searchbox_demo&lang="></script>-->

<script type="text/javascript" src="scripts/countries.js"></script>

</body>
</html>
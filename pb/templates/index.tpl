<?xml version="1.0" ?>
<opt:root>
<opt:prolog/>
<opt:dtd template="html5"/>
<html>
<head>
    <title>index page</title>
    <link rel="stylesheet" type="text/css" parse:href="$site~'media/css/index.css'" />    
</head>
<body>
    <div id="container">
    
     <div class="header"></div>
     
     <div class="menu"></div>
     
     <opt:section name="modules">
        <div class="content">
            <opt:include from="modules"/>
        </div>
     </opt:section>
    </div>
</body>
</html>
</opt:root>
<<?php echo '?'; ?>xml version="<?php echo '1.0'; ?>" standalone="<?php echo 'yes'; ?>" ?>
<!DOCTYPE html>




<html>
<head>
    <title>index page</title>
    <link rel="stylesheet" type="text/css" href="<?php  echo htmlspecialchars($this->_data['site'].'media/css/index.css');   ?>" />    
</head>
<body>
    <div id="container">
    
     <div class="header"></div>
     
     <div class="menu"></div>
     
     <?php $_sectmodules_vals = &$this->_data['modules']; if(is_array($_sectmodules_vals) && ($_sectmodules_cnt = sizeof($_sectmodules_vals)) > 0){  for($_sect1_i = 0; $_sect1_i < $_sectmodules_cnt; $_sect1_i++){   ?>
        <div class="content">
            <?php   $_sectmodules_vals[$_sect1_i]['view']->_parse($output, $exception);   ?>
        </div>
     <?php  }   }   ?>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
<!--        <meta name="viewport" content="width=device-width, initial-scale=1.0">--> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All images</title>
    <link rel="stylesheet" href="css/grid.min.css">
    <link rel="stylesheet" href="css/common.min.css">
    <link rel="stylesheet" href="css/storage.css">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>

<body class="grid">
    <header class="header"> <a href="index.php" class="logo">Home</a> <span class="tagline">
    </span> </header>
    <nav class="nav">  
       <div class="btn clear">Clear</div>
       <div class="btn remove-first">Remove first</div>
       <div class="btn remove-last">Remove last</div>
        <?php
            
$dir = "all-imgs";
            
            function readFilesRecursive($dir) {  
                
$odir = opendir($dir);
static $i = 1; 
                echo '<ul class="directory level-'.$i.'">';
                while (($file = readdir($odir)) !== FALSE) {
                    if ($file == '.' || $file == '..') {
                        continue;
                    } else {
                        echo "<li><span>".$file."</span>";  
                    }
                    if (is_dir($dir.DIRECTORY_SEPARATOR.$file)) {
                        $i ++;
                        
                        readFilesRecursive($dir.DIRECTORY_SEPARATOR.$file);
                        $i --; 
                    } else {  
                        echo '<img src='. $dir.DIRECTORY_SEPARATOR.$file. ' alt=' .$file. ' title=' .$file. '>';
                    }
                }
                closedir($odir);
                echo '</li></ul>';
            }
            readFilesRecursive($dir);   
 ?>
    </nav>
    <main class="main">
        <div class="imgs-container">
        
         <h1 class="choose-folder">Choose folder</h1> 
        
        </div>
    </main>
    <aside class="aside"> </aside>
    <footer class="footer"> 2017 © All rights reserved </footer>
    <script src="js/storage.js"></script>
</body>

</html>
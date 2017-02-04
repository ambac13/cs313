<!DOCTYPE html>
<html>
<head>
    <title>PHP Survey</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <main class="sit-content container" id="Content" role="main">
          <header>
                <h1>RESULTS</h1> </header>
            <div class="plane">
            <div class="center">
                    <?php echo $_POST["name"]; ?>, you would rather...
                    <br/>
                    <br/>
                    <?php echo $_POST["feeling"]; ?>
                    <br/>
                    <?php echo $_POST["invi"]; ?>
                    <br/>
                    <?php echo $_POST["huge&weak"]; ?>
                    <br/>
                    <?php echo $_POST["time"]; ?>
                    <br/>
                    <?php echo $_POST["blood&brain"]; ?>
                    <br/>
                    <?php echo $_POST["genius"]; ?>
                    <br/>
                    <?php echo $_POST["book&film"]; ?>
                    <br/>
                    <?php echo $_POST["scary"]; ?>
                    <br/>
                    <?php echo $_POST["language"]; ?>
                    <br/>
                    <?php echo $_POST["breakfast"]; ?>
                    <br/>
                    <br/>
                    Your comments:
                    <?php echo $_POST['comments']; ?>
                    <br/> 
                    <br/>
                </div> 
                </div>    
    </main>

     <?php
       
//copy answers to a text file
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
fwrite($myfile, $_POST["name"]);
fwrite($myfile, $_POST["feeling"]);
fwrite($myfile, $_POST["invi"]);
fwrite($myfile, $_POST["huge&weak"]);
fwrite($myfile, $_POST["time"]);
fwrite($myfile, $_POST["blood&brain"]);
fwrite($myfile, $_POST["genius"]);
fwrite($myfile, $_POST["book&film"]);
fwrite($myfile, $_POST["scary"]);
fwrite($myfile, $_POST["language"]);
fwrite($myfile, $_POST["breakfast"]);
fwrite($myfile, $_POST['comments']);
fclose($myfile);
?> 
</body>
</html>

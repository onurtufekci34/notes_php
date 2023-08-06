<?php
    require_once('db.php');
    require_once('functions.php');

   if($_SERVER["REQUEST_METHOD"]=="POST"){
    $title = prep_data($_POST['title']);
    $content = prep_data($_POST['content']);
    $important = prep_data($_POST['important']);

    $sql = "INSERT INTO notes (title,content,important) VALUES ('";
    $sql .= $title . "','" . $content . "','" . $important ."')";
    if(mysqli_query($conn,$sql)){
        echo 'Successs';
    }
    
   }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv=ÂPragmaÂ content=Âno-cacheÂ>
        <meta http-equiv=ÂExpiresÂ content=Â-1?>
        <meta http-equiv=ÂCACHE-CONTROLÂ content=ÂNO-CACHEÂ>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="index.css">
        <title>Notes App</title>
    </head>
<body>
    <header>
        Notes App
    </header>

    <div class="titleDiv">
        <div class="backLink"><a class="nav-link" href="index.php">Home</a></div>
        <div class="head">New Note</div>
    </div>
    <form action="new.php" method="post">     
        <span class="label">Title</span>
        <input type="text" name="title" />
        
        <span class="label">Content</span>
        <textarea name="content"></textarea>

        <div class="chkgroup">
            <span class="label-in">Important</span>
            <input type="hidden" name="important" value="0" />
            <input type="checkbox" name="important" value="1" />
        </div>
            
        <input type="submit" />
    </form>
</body>
</html>
<?php require_once('footer.php') ?>

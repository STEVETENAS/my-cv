<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="TENADJANG STEVE">
    <meta name="description" content="TENADJANG CV">
    <link href="styles/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>TENADJANG CV</title>
</head>
<body>
    <div class="container">
        <div id="left_panel">
            <?php 
                require_once "views/profiler_profil.php"
            ?>

            <?php 
                require_once "views/profiler_about.php"
            ?>
            
            <?php 
                require_once "views/profiler_skills.php"
            ?>
        </div>

        <div id="right_panel">
            <?php 
                require_once "views/profiler_exp.php"
            ?>

            <?php 
                require_once "views/profiler_pi_lang.php"
            ?>

            <?php 
                require_once "views/profiler_academic.php"
            ?>
        </div>
    </div>
</body>
</html>
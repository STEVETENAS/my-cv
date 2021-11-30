<?php
    include("./connexionDB.php");
    $req = "SELECT * FROM pofileracademic";
    $res = $BD -> query($req) or die($BD);
?>

<section id="academic">
    <div class="academic_head">
        <div class="academic_head_start">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="48" height="48"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ecf0f1"><path d="M86,42.42611l-86,36.40723l28.66667,18.19661v31.97006h114.66667v-31.97006l14.33333,-9.09831v41.06836h14.33333v-50.16667z"></path></g></g>
            </svg>    
            <div class="academic_head_txt">
                <h1>Cursus academique</h1>
                <i>Diplomes et formations certifiantes</i>
            </div>
        </div>
        <div class="menuIcon">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="30" height="30"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,22.93333c-9.4993,0 -17.2,7.7007 -17.2,17.2c0,9.4993 7.7007,17.2 17.2,17.2c9.4993,0 17.2,-7.7007 17.2,-17.2c0,-9.4993 -7.7007,-17.2 -17.2,-17.2zM86,68.8c-9.4993,0 -17.2,7.7007 -17.2,17.2c0,9.4993 7.7007,17.2 17.2,17.2c9.4993,0 17.2,-7.7007 17.2,-17.2c0,-9.4993 -7.7007,-17.2 -17.2,-17.2zM86,114.66667c-9.4993,0 -17.2,7.7007 -17.2,17.2c0,9.4993 7.7007,17.2 17.2,17.2c9.4993,0 17.2,-7.7007 17.2,-17.2c0,-9.4993 -7.7007,-17.2 -17.2,-17.2z"></path></g></g>
            </svg>

        </div>
    </div>
    <div class="academic_body">
        <?php while($aca = $res->fetch()) { ?> 
            <div class="academic_item">
                <h3> <?php echo $aca['diploma'] ?> - 
                <b>@<?php echo $aca['school'] ?></b></h3>
                <p>
                    <span class="duration"><?php echo $aca['period'] ?>
                    </span> - <span class="desciption">
                    <i><?php echo $aca['diplomaDesc'] ?></i></span>
                </p>
            </div>
        <?php } ?>
    </div>
</section>

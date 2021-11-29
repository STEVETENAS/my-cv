<?php
    $profiler_academic = array(
        array
        (
            "diploma" => "DIPET 2 Electrotechnique",
            "school" => "ENSET de Douala",
            "time" => "Aout 2016",
            "desc" => "Gestion d'eclairage d'une maison (Android + Adruino)",
        ),
        array
        (
            "diploma" => "Oracle Certified Associate",
            "school" => "Kentnix Sarl",
            "time" => "Mars 2009",
            "desc" => "Oracle database 11g Administration",
        ),
        array
        (
            "diploma" => "Oracle SQl Certified",
            "school" => "Kentnix Sarl",
            "time" => "Decembre 2008",
            "desc" => "SQl 2, SQL 3, XML",
        ),
        array
        (
            "diploma" => "Licence professionnelle",
            "school" => "Douala Institute of Tech.",
            "time" => "Octobre 2008",
            "desc" => "Telecommunication & Reseaux",
        ),
        array
        (
            "diploma" => "DEC / BTS",
            "school" => "CCNB Dieppe - Canada",
            "time" => "Septembre 2007",
            "desc" => "Programmation Appliquee Pour Internet",
        ),
        array
        (
            "diploma" => "Baccalaureat",
            "school" => "Lycee Technique de Douala Bassa",
            "time" => "Aout 2005",
            "desc" => "Electrotechnique, mention BIEN (major de centre)",
        ),
    );    
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
        <?php foreach($profiler_academic as $aca) { ?> 
            <div class="academic_item">
                <h3> <?php echo $aca['diploma'] ?> - 
                <b>@<?php echo $aca['school'] ?></b></h3>
                <p>
                    <span class="duration"><?php echo $aca['time'] ?>
                    </span> - <span class="desciption">
                    <i><?php echo $aca['desc'] ?></i></span>
                </p>
            </div>
        <?php } ?>
    </div>
</section>

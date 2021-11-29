<?php
    $profiler_pi = 
    [
        "../img/eFootball-PES-2021.jpg",
        "../img/logo-stackoverflow.png",
        "../img/Screenshot 2021-11-23 043215.png",
        "../img/692px-Criminal-Minds.svg.png",
        "../img/pl.png",
        "../img/danse.png",
        "../img/guiness.png",
    ];

    $profiler_lang = ["Francais","Anglais"];
?>

<section id="pi_lang">
    <section id="intrest">
        <div class="int_head">
            <h1>Point d'interets</h1>
            <i>Passe-temps pour se faire un peu plaisir</i>
        </div>
        <div class="int_body">
            <?php foreach($profiler_pi as $pi) { ?>
                <img src="<?php echo $pi ?>" width="100px" height="50px">
            <?php } ?>
        </div>
    </section>
    
    <section id="lang">
        <div class="lang_head">
            <h1>Langues</h1>
            <i>Pratiquees en entreprise</i>
        </div>
        <div class="lang_body">
            <?php foreach($profiler_lang as $lang) { ?>
                <div class="lang_item">
                    <img src="https://img.icons8.com/office/32/000000/checked-2--v1.png"/>
                    <p><?php echo $lang ?></p>
                </div>
            <?php } ?>
        </div>
    </section>

</section>

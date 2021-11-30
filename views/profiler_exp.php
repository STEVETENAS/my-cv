<?php
    include("./connexionDB.php");
    $req = "SELECT * FROM profilerexp";
    $res = $BD -> query($req) or die($BD);

?>

<section id="pro_exp">
    <div class="pro_exp_head">
        <div class="pro_head_start">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="64" height="64"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M53.75,20.87012l-37.625,18.8125v110.81738h75.25h64.5v-96.75h-64.5v-14.06738zM53.75,32.87988l26.875,13.4375v93.43262h-53.75v-93.43262zM37.625,53.75v10.75h10.75v-10.75zM59.125,53.75v10.75h10.75v-10.75zM91.375,64.5h53.75v75.25h-53.75zM37.625,75.25v10.75h10.75v-10.75zM59.125,75.25v10.75h10.75v-10.75zM102.125,75.25v10.75h10.75v-10.75zM123.625,75.25v10.75h10.75v-10.75zM37.625,96.75v10.75h10.75v-10.75zM59.125,96.75v10.75h10.75v-10.75zM102.125,96.75v10.75h10.75v-10.75zM123.625,96.75v10.75h10.75v-10.75zM37.625,118.25v10.75h10.75v-10.75zM59.125,118.25v10.75h10.75v-10.75zM102.125,118.25v10.75h10.75v-10.75zM123.625,118.25v10.75h10.75v-10.75z"></path></g></g>
            </svg>
            <div class="pe_head_txt">
                <h1>Experience professionnelle</h1>
                <i>Expertise en entreprise</i>
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
    <div class="pro_exp_body">
        <?php while($exp = $res->fetch()) { ?>
            <div class="pe_item">
                <h3> <?php echo $exp['jobTitle'] ?> - <b>
                    @<?php echo $exp['companyName'] ?></b></h3>
                <p class="duration">De <?php echo $exp['startDate'] ?> a 
                    <?php echo $exp['endDate'] ?> - 
                    <?php echo $exp['companySite'] ?></p>
                <p class="realisation"><?php echo $exp['jobDesc'] ?></p>
            </div>
        <?php } ?>
    </div>
</section>

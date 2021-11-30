<?php
    include("./connexionDB.php");
    $req = "SELECT * FROM profilerinfo";
    $res = $BD -> query($req) or die($BD);
    while($profiler_info = $res->fetch()){
?>

<section id="profil" style="background-image: url('../img/img1.jpg');">
    <div class="profil_bg">
        <div class="searchbar">
            <i class="fas fa-bars fa-2x"></i>

            <input type="text" placeholder="Besion d'un chef de projet?" class="borderless">

            <div class="search_bar_right_icon">
                <i class="fas fa-search"></i>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="24" height="24"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#95a5a6"><path d="M78.83333,14.33333v143.33333h14.33333v-143.33333z"></path></g></g>
                </svg>
                <i class="fas fa-times"></i>
            </div>
        </div>
        
        <div class="userInfo">
            <img src="../img/img3.jpg" class="profil_img">
            <div class="user_txt">
                <h1><?php echo $profiler_info["userName"] ?></h1>
                <P><?php echo $profiler_info["profession"] ?></P>
            </div>
        </div>
        
        <div class="absolute_img">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="80" height="80"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M86,109.22c-12.82405,0 -23.22,-10.39595 -23.22,-23.22v0c0,-12.82405 10.39595,-23.22 23.22,-23.22v0c12.82405,0 23.22,10.39595 23.22,23.22v0c0,12.82405 -10.39595,23.22 -23.22,23.22z" fill="#ffffff"></path><g fill="#e34856"><path d="M86,22.704c-34.90362,0 -63.296,28.39238 -63.296,63.296c0,34.90362 28.39238,63.296 63.296,63.296c34.90362,0 63.296,-28.39238 63.296,-63.296c0,-34.90362 -28.39238,-63.296 -63.296,-63.296zM105.264,88.752h-16.512v16.512c0,1.52186 -1.23014,2.752 -2.752,2.752c-1.52186,0 -2.752,-1.23014 -2.752,-2.752v-16.512h-16.512c-1.52186,0 -2.752,-1.23014 -2.752,-2.752c0,-1.52186 1.23014,-2.752 2.752,-2.752h16.512v-16.512c0,-1.52186 1.23014,-2.752 2.752,-2.752c1.52186,0 2.752,1.23014 2.752,2.752v16.512h16.512c1.52186,0 2.752,1.23014 2.752,2.752c0,1.52186 -1.23014,2.752 -2.752,2.752z"></path></g></g>
            </svg>
        </div>
    </div>
</section>
<?php } ?>
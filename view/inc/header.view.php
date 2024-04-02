<header class="masthead" style="background-image: url('assets/img/nebula.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Homepage</h1>
                    <?php 
 
                        if (!isset($_GET["showCat"]) && (!isset($_GET["showArt"]))) {
                            foreach ($allArts as $arts) :

                            ?>
                                <span class="subheading"><?=$arts["thename"]?></span>
                            <?php if ($arts["user_iduser"] == NULL) { ?>
                                    <p>N'as pas encore crée un article</p>
                                    <?php
                            }else { ?>
                                <p><?=$arts["title"]?></p>
                       <?php 
                    }
                    endforeach;
                    } ?>
                        
                       
                    
                </div>
            </div>
        </div>
    </div>
</header>
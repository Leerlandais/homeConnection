<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Homepage</h1>
                            <?php 
                                if (!isset($_GET["showCat"])) {
                            ?>
                            <span class="subheading">Petit exercice</span>
                            <p>Dans model/NewsModel.php, créez une fonction qui va charger toutes les News publiées avec le titre, la date de publication, les 250 premiers caractères de l'article (si possible ne pas couper dans les mots ), thename de l'auteur par ordre de publication décroissante. rajouter les catégories si possible (même liens que dans le menu)</p>
                            <p>affichez ces articles à la place des faux articles ci-dessous</p>
                            <?php }else { ?>
                            <span class="subheading">CATEGORY HERE</span>
                            <p>LIST OF ART HERE</p>
                            <p>SURROUNDED BY THEIR AUTHOR</p>
                            <p>AND DATE PUB</p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
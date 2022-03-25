        <!-- Page Header-->
        
        <header class="masthead" style="background-image: url('<?= $bg ?>')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                    
                    <?php if (isset($_GET["notif"])) { ?>
                    <div class="alert alert-success" role="alert">
                        <?php if ($_GET["notif"] ==1) echo "Merci de nous avoir contacté !"; ?>
                        <?php if ($_GET["notif"] ==2) echo "Merci de vous être inscrit !"; ?>
                    </div>
                    <?php } ?>
                    <?php if (isset($_GET["erreur"])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php if ($_GET["erreur"] ==1) echo "Désolé, votre demande de contact a échoué !"; ?>
                    </div>
                    <?php } ?>
                        <div class="site-heading">
                            <h1><?= $header_title ?></h1>
                            <span class="subheading"><?= $header_subtitle ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

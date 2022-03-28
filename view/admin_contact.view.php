<?php include("view/layout/nav.inc.php"); ?>
        
<?php include("view/layout/header.inc.php"); ?>

        <?php foreach ($data as $onedata) { ?>
        
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <?= "Nom : ". $onedata["contact_name"] . " | ". "Email : ".$onedata["contact_email"] ?>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                       <?= $onedata["contact_message"] ?> 
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>
                
<?php include("view/layout/footer.inc.php"); ?>
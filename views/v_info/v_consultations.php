<h3>Список завершенных консультаций!</h3>
<?php
    if($consultations != NULL){ ?>
        <div class="row">
        <?php
        foreach ($consultations as $consultation){
            if($consultation != ''){ ?>
                <div class="card ">
                    <img class="rounded img-top consultation-img" src="<?=$consultation['id_screen']?>" alt="">
                    <div class="card-footer">
                        <a target="_blank" href="https://vk.com/id<?=$consultation['id_url']?>"><p class="card-text">Написать</p></a>
                    </div>
                </div>
    <?php } } ?>
        </div>
    <?php } ?>


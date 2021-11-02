<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">

        <?
        if(($current_page <= 5) and ($max_pages <= 5)){
            //Навигация 4< элементов?>
            <?php for($i = 1; $i <= $max_pages; $i++){
                if($current_page == $i){
                    echo "<li class='page-item disabled'><a href='".$path.$server."/".$i."' class='page-link'>".$i."</a></li>";
                }else{
                    echo "<li class='page-item'><a href='".$path.$server."/".$i."' class='page-link'>".$i."</a></li>";
                }
            }
        } elseif (($current_page <= 2) and ($max_pages > 5)){
            if($current_page < 2) { ?>
                <li class="page-item disabled"><a href="<?=$path?><?=$server?>/1" class="page-link" >1</a></li>
                <li class="page-item"><a href="<?=$path?><?=$server?>/2" class="page-link">2</a></li>
                <li class="page-item"><a href="<?=$path?><?=$server?>/3" class="page-link">3</a></li>
                <li class="page-item"><a href="<?=$path?><?=$server?>/4" class="page-link">4</a></li>
                <li class="page-item"><a href="<?=$path?><?=$server?>/5" class="page-link">5</a></li>
                <li class="page-item">
                    <a href="<?=$path?><?=$server?>/6" class="page-link" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
                <?php
                if($max_pages > 6) { ?>
                    <li class="page-item">
                        <a href="<?=$path?><?=$server?>/<?=$max_pages?>" class="page-link"  aria-label="Next">
                            <span aria-hidden="true">&raquo;&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                <? }
            } else { ?>
                <li class="page-item"><a href="<?=$path?><?=$server?>/1" class="page-link" >1</a></li>
                <li class="page-item  disabled"><a href="<?=$path?><?=$server?>/2" class="page-link">2</a></li>
                <li class="page-item"><a href="<?=$path?><?=$server?>/3" class="page-link">3</a></li>
                <li class="page-item"><a href="<?=$path?><?=$server?>/4" class="page-link">4</a></li>
                <li class="page-item"><a href="<?=$path?><?=$server?>/5" class="page-link">5</a></li>
                <li class="page-item">
                    <a href="<?=$path?><?=$server?>/6" class="page-link" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
                <?php
                if($max_pages > 6) { ?>
                    <li class="page-item">
                        <a href="<?=$path?><?=$server?>/<?=$max_pages?>" class="page-link">
                            <span aria-hidden="true">&raquo;&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                <? } ?>
            <? }
        }
        elseif(($current_page >= 3) and ($max_pages > 5) and (($max_pages - $current_page) < 2)){
            if (($max_pages - $current_page) == 0){
                if($max_pages > 6) { ?>
                    <li class="page-item">
                        <a href="<?=$path?><?=$server?>/1" class="page-link"  aria-label="Previous">
                            <span aria-hidden="true">&laquo;&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                <? } ?>
                <li class="page-item">
                    <a href="<?=$path?><?=$server?>/<?=$current_page - 5?>" class="page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a href="<?=$path?><?=$server?>/<?=$current_page - 4?>" class="page-link"><?=$current_page - 4?></a></li>
                <li class="page-item"><a href="<?=$path?><?=$server?>/<?=$current_page - 3?>" class="page-link"><?=$current_page - 3?></a></li>
                <li class="page-item"><a href="<?=$path?><?=$server?>/<?=$current_page - 2?>" class="page-link"><?=$current_page - 2?></a></li>
                <li class="page-item"><a href="<?=$path?><?=$server?>/<?=$current_page - 1?>" class="page-link"><?=$current_page - 1?></a></li>
                <li class="page-item disabled"><a href="<?=$path?><?=$server?>/<?=$current_page?>" class="page-link"><?=$current_page?></a></li>

            <? }else{
                if($max_pages > 6) { ?>
                    <li class="page-item">
                        <a href="<?=$path?><?=$server?>/1" class="page-link" aria-label="Previous">
                            <span aria-hidden="true">&laquo;&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                <? } ?>
                <li class="page-item">
                    <a href="<?=$path?><?=$server?>/<?=$current_page - 4?>" class="page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a href="<?=$path?><?=$server?>/<?=$current_page - 3?>" class="page-link"><?=$current_page - 3?></a></li>
                <li class="page-item"><a href="<?=$path?><?=$server?>/<?=$current_page - 2?>" class="page-link"><?=$current_page - 2?></a></li>
                <li class="page-item"><a href="<?=$path?><?=$server?>/<?=$current_page - 1?>" class="page-link"><?=$current_page - 1?></a></li>
                <li class="page-item disabled"><a href="<?=$path?><?=$server?>/<?=$current_page?>" class="page-link"><?=$current_page?></a></li>
                <li class="page-item"><a href="<?=$path?><?=$server?>/<?=$current_page++?>" class="page-link"><?=$current_page++?></a></li>
            <?}
        }
        //Навигация из 5 элементов и более c выбором страницы
        elseif(($current_page >= 3) and ($max_pages > 5) and (($max_pages - $current_page) >= 2)){ ?>

            <li class="page-item">
                <a href="<?=$path?><?=$server?>/1" class="page-link" aria-label="Previous">
                    <span aria-hidden="true">&laquo;&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item">
                <a href="<?=$path?><?=$server?>/<?=$current_page - 2?>" class="page-link" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a href="<?=$path?><?=$server?>/<?=$current_page - 1?>" class="page-link"><?=$current_page - 1?></a></li>
            <li class="page-item disabled"><a href="<?=$path?><?=$server?>/<?=$current_page?>" class="page-link"><?=$current_page?></a></li>
            <li class="page-item"><a href="<?=$path?><?=$server?>/<?=$current_page + 1 ?>" class="page-link"><?=$current_page + 1?></a></li>
            <li class="page-item">
                <a href="<?=$path?><?=$server?>/<?=$current_page + 2?>" class="page-link" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>

            <li class="page-item">
                <a href="<?=$path?><?=$server?>/<?=$max_pages?>" class="page-link" aria-label="Next">
                    <span aria-hidden="true">&raquo;&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>

        <?php } ?>

    </ul>
</nav>
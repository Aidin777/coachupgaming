<?php
        if($this->params[1] == 'changers_active' or $this->params[1] == 'case_active'){
                switch ($this->params[1]){
                        case 'changers_active' : {
                                $alfa_type = 'alfa_order_donat';
                                $bravo_type = 'bravo_order_donat';
                                $charlee_type = 'charlee_order_donat';
                        }
                        break;
                        case 'case_active' : {
                                $alfa_type = 'alfa_case';
                                $bravo_type = 'bravo_case';
                                $charlee_type = 'charlee_case';
                        }
                        break;
                }

                $mPages = M_Pages::Instance();
                $alfa_data = (int)$mPages->get_count_rows($alfa_type, 0);
                $bravo_data = (int)$mPages->get_count_rows($bravo_type, 0);
                $charlee_data = (int)$mPages->get_count_rows($charlee_type, 0);
                ?>

                <div class="row">
                        <div class="col-4">
                                <a class="btn btn-outline-primary btn-block" href="/<?=$this->params[0]?>/<?=$this->params[1]?>/alfa"/>АЛЬФА
                                         <span class="badge badge-primary"><?=$alfa_data?></span>
                                </a>
                        </div>
                        <div class="col-4">
                                <a class="btn btn-outline-success btn-block" href="/<?=$this->params[0]?>/<?=$this->params[1]?>/bravo">БРАВО
                                        <span class="badge badge-primary"><?=$bravo_data?></span>
                                </a>
                        </div>
                        <div class="col-4">
                                <a class="btn btn-outline-danger btn-block" href="/<?=$this->params[0]?>/<?=$this->params[1]?>/charlee">ЧАРЛИ
                                        <span class="badge badge-primary"><?=$charlee_data?></span>
                                </a>
                        </div>
                </div>
                <br>
<?php
        }else{
?>
<div class="row">
        <div class="col-4">
                <a class="btn btn-outline-primary btn-block" href="/<?=$this->params[0]?>/<?=$this->params[1]?>/alfa"/>АЛЬФА

                </a>
        </div>
        <div class="col-4">
                <a class="btn btn-outline-success btn-block" href="/<?=$this->params[0]?>/<?=$this->params[1]?>/bravo">БРАВО

                </a>
        </div>
        <div class="col-4">
                <a class="btn btn-outline-danger btn-block" href="/<?=$this->params[0]?>/<?=$this->params[1]?>/charlee">ЧАРЛИ

                </a>
        </div>
</div>
                <br>
<? } ?>

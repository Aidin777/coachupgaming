<?php

function action_help_changers()
{
    $server = '';
    if(isset($this->params[2]) and $this->params[2] != ''){
        switch ($this->params[2]){
            case 'alfa':
                $server = 'alfa';
                break;
            case 'bravo':
                $server = 'bravo';
                break;
            case 'charlee':
                $server = 'charlee';
                break;
        }
    }
    if($server != ''){

        $mPages = M_Pages::Instance();
        $type = '_order_donat';
        $table = $server.$type;

        $current_page = 1;
        $count_orders = 10;
        $max_rows = $mPages->get_count_rows($table, 1);
        $max_pages = ceil($max_rows / $count_orders);

        if(isset($this->params[3]) and ($this->params[3] != '') and gettype((int)($this->params[3])) === 'integer'){

            $page = abs((int)$this->params[3]);

            if($page != ''){
                $current_page = ($page >= $max_pages) ? $max_pages : $page;
                
                $current_order = ($current_page > 1) ? (($current_page - 1) * $count_orders) : 0;

                $turn = 'ORDER by id DESC LIMIT '.$current_order.', '.$count_orders;
            }
        }else{
            $turn = 'ORDER by id DESC LIMIT 0, '.$count_orders;
        }

        $changers_help = $mPages->show_complete_winners($table, 1, $turn);
    }else{
        $changers_help = '';
    }
    $this->title .= '::Помощь в проходах!';
    $this->content = $this->Template('views/v_info/v_help_changers.php', array('title' => $this->title,
        'changers_help' => $changers_help,
        'server' => $server,
        
        'current_page' => $current_page,
        'count_orders' => $count_orders,
        'max_pages' => $max_pages,
        'url'=> $this->url,
        'params_vk_for_menu' => $this->params_vk_for_menu
    ));
}


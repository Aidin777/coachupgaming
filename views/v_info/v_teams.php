<h1>Памятка командам!</h1>
<ul class="list-group">
    <li class="list-group-item list-group-item-primary"><h3><samp>Правила для тех, кто проводит пве миссии за баллы, лоттерейщиков:</samp></h3></li>
    <li class="list-group-item">Если вы не уверены, что пройдёте - лучше не рискуйте!</li>
    <li class="list-group-item">Если вы команда уровня PRO, MIDDLE, EASY или NEW и состав сливается, то попытка клиента <b>НЕ</b> сгорает!</li>
    <li class="list-group-item">Если вы целенаправлено выпрашиваите данные клиента от аккаунта, будут штрафы для команды!</li>
    <li class="list-group-item">Если во время прохода спецоперации, вы будите использовать ПО - бан всему составу! (с дальнейшими вытекающими...)</li>
    <li class="list-group-item list-group-item-danger">Если после <b>ПРОХОДА</b> клиент специально не закрывает заказ, блокирует вас в вк, то... При предоставлении записи прохода и переписки в вк, данного клиента блокируют на ресурсе!</li>
</ul>
<hr>
<ul class="list-group">
    <li class="list-group-item list-group-item-info"><h3><samp>Правила для команд, которые проводят победителей кейсов:</samp></h3></li>
    <li class="list-group-item">Для победителей кейсов 1 попытка, без разницы какой состав!</li>
    <li class="list-group-item list-group-item-danger">Если после <b>ПРОХОДА</b> или <b>ПРОВАЛА</b> клиент специально не закрывает заказ, блокирует вас в вк, то... При предоставлении записи прохода и переписки в вк, данного клиента блокируют на ресурсе!</li>
</ul>
 <hr>
<h1>Типы команд!</h1>
<table class="table table-striped table-dark table-bordered">
    <thread>
        <tr>
            <th>Уровень состава</th>
            <th>Описание</th>
        </tr>
    </thread>
    <tbody>
        <tr>
            <td>PRO</td>
            <td>Сильный состав, 9 из 10 веротность прохода</td>
        </tr>
        <tr>
            <td>MIDDLE</td>
            <td>Средний состав (минимум 1 рак - медик)</td>
        </tr>
        <tr>
            <td>EASY</td>
            <td>Слабый состав...статистика внизу страницы!</td>
        </tr>
        <tr>
            <td>NEW</td>
            <td>Новички, тёмная лошадка - смотрите статистику состава в таблице ниже!</td>
        </tr>
    </tbody>
</table>

<?php
//var_dump($teams);
?>

<h2><i>Если вы хотите сделать свой состав и проводить людей из лоттереи, за баллы или победителей кейсов, то пишите в группу вк!</i></h2>
<table class="table table-striped table-dark table-bordered">
    <thread>
        <tr>
            <th>№ состава</th>
            <th>Проведено</th>
            <th>Провалено</th>
            <th>Всего</th>
            <th>Уровень</th>
            <th>Капитан</th>
            <?php
            if($_SESSION['user']['id_rights'] == 'admin' or $_SESSION['user']['id_rights'] == 'guide'){?>
                <th>Баллы</th>
            <?php } ?>
        </tr>
    </thread>
    <tbody>
        <?php
        if(isset($teams) and $teams != NULL){
            foreach ($teams as $key) {
                if ($key != NULL) { ?>
                    <tr>
                        <th scope="row"><?= $key['team_id']?></th>
                        <td><?= $key['team_users_success']?></td>
                        <td><?= $key['team_users_fail']?></td>
                        <td><?= $key['team_users']?></td>
                        <td><?= $key['team_level']?></td>
                        <td><?= $key['captain_name'] ?></td>
                        <?php
                            if($_SESSION['user']['id_rights'] == 'admin' or $_SESSION['user']['id_rights'] == 'guide'){ ?>
                        <td><?= $key['team_money'] ?></td>
                           <?php }
                        ?>
                        <!--                        echo '<td>0</td><td>0</td>';-->
                        <!--                        if($key['captain_name'] != '') {-->
                        <!--                        echo '<td><a target="_blank" href="https://vk.com/id'.$key['captain_url'].' "> '.$key['captain_name'].'</a></td>';-->
                        <!--                        }-->
                        <!--                        else{-->
                        <!--                        echo '<td></td>';-->
                        <!--                        echo '<td>'.$key['team_money'].'</td><td>'.$key['team_get'].'</td>-->
                        <!--                        <td><a target="_blank" href="https://vk.com/id'.$key['captain_url'].' "> '.$key['captain_name'].'</a></td>';-->

                    </tr>
                    <?php
                }
            }
        }
        ?>
    </tbody>
</table>

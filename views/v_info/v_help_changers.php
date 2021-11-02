<h1>Обменник! Выберите нужный сервер для просмотра!</h1>
<?php 
include('views/v_servers.php');

if($server != ''){
    $path = '/info/help_changers/';
    include ('views/v_info/v_nav.php');
    ?>

    <table class="table table-striped table-dark table-bordered">
        <thread>
            <tr>
                <th>№</th>
                <th>Наименование</th>
                <th>Сервер</th>
                <th>Баллы</th>
                <th>Провели</th>
                <th>Победитель</th>
            </tr>
        </thread>
        <tbody>
        <?php
        if(isset($changers_help) and $changers_help != ''){
            foreach ($changers_help as $changers){ ?>
                <tr>
                    <th scope="row"><?=$changers['id']?></th>
                    <td><?=$changers['id_name_specoperation']?></td>
                    <td><?=$changers['id_server']?></td>
                    <td><?=$changers['id_price']?></td>
                    <td><?=$changers['id_team']?></td>
                    <td><a target="_blank" href="https://vk.com/id<?=$changers['id_url']?>">
                            <img class="logo_50" src="<?=$changers['id_screen']?>"> Написать
                        </a>
                    </td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
<?php } ?>






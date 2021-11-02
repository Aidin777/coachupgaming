<?php
//Показать составы
function show_teams_data(){
    $conn = startup();
    $table = 'team_guides';
    $result = mysqli_query($conn, "SELECT * FROM $table");

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
//    echo '<pre>';
//    var_dump($rows);
//    echo '</pre>';
    echo '<table border="3">
        <tr>
            <th>№ состава</th>
            <th>Проведено миссий</th>
            <th>Провалено миссий</th>
            <th>Всего игроков</th>
            <th>Уровень состава</th>';
    if($_SESSION['user']['id_rights'] == 'admin' or $_SESSION['user']['id_rights'] == 'guide'){
        echo   '<th>Заработано</th>
                <th>Выплачено</th>
                <th>Капитан</th>';
    }
    echo  '</tr>';
    foreach ($rows as $key){
        echo '<tr><td>'.$key['team_id'].'</td><td>'.
            $key['team_users_success'].'</td><td>'.
            $key['team_users_fail'].'</td><td>'.
            $key['team_users'].'</td><td>'.
            $key['team_level'].'</td>';
        if($_SESSION['user']['id_rights'] == 'admin' or $_SESSION['user']['id_rights'] == 'guide'){
            if($key['team_money'] == 0){
                echo '<td>0</td><td>0</td>';
                if($key['captain_name'] != '') {
                    echo '<td><a target="_blank" href="https://vk.com/id'.$key['captain_url'].' "> '.$key['captain_name'].'</a></td>';
                }
                else{
                    echo '<td></td>';
                }
            }else{
                echo '<td>'.$key['team_money'].'</td><td>'.$key['team_get'].'</td>
                    <td><a target="_blank" href="https://vk.com/id'.$key['captain_url'].' "> '.$key['captain_name'].'</a></td>';
            }
        }

        echo '</tr>';
    }
    echo '</table>';
    discon();
}
?>
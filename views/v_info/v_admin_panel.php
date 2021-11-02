<h1>Панель администратора</h1>


<?php

if(isset($_POST['show_data_user'])){

    $id = (int)$_POST['ID'];
    if($id != ''){
        $params = [];
        $params = M_Users::showDataUser($id);


    }

}

if(isset($_POST['update_data_user'])){

        $id = $_POST['ID_UPDATE'];
        $summ = $_POST['BALANCE'];
        echo $id;
        M_Users::updateUsersDataAdmin($id, $summ);


}



//     echo '<pre>';
//        var_dump($params);
//     echo '</pre>';


 if($data_client == ''){ ?>


     <form class="row g-3" action="#" method="post">

             <div class="col-auto">
                 <input type="text" class="form-control" placeholder="ID_USER" name="ID">
             </div>
             <div class="col-auto">
                 <button type="submit" class="btn btn-primary" name="show_data_user">Показать данные</button>
             </div>
     </form>


<h2>Исходные данные</h2>
     <table class="table">
         <thead>
         <tr>
             <th scope="col">№</th>
             <th scope="col">ID</th>
             <th scope="col">BALANCE</th>
                 <th scope="col">ALL_PAYMENTS</th>
         </tr>
         </thead>
         <tbody>
         <tr>
             <th scope="row"><?=$params['id'] ?></th>
             <td><?=$params['id_url'] ?></td>
             <td><?=$params['id_balance'] ?></td>
             <td><?=$params['id_all_payments'] ?></td>
         </tr>
         </tbody>
     </table>


     <h3>Меняем данные на....</h3>
     <form class="row g-3" method="post" action="#">
         <div class="col-auto">
             <input type="text" class="form-control" name="ID_UPDATE" placeholder="ID_USER" value="<?php if(isset($params['id_url'])) echo $params['id_url'] ?>">
         </div>
         <div class="col-auto">
             <input type="text" class="form-control" name="BALANCE" placeholder="BALANCE" value="<?php if(isset($params['id_balance'])) echo $params['id_balance'] ?>">
         </div>
         <div class="col-auto">
             <button type="submit" class="btn btn-primary mb-3" name="update_data_user">Изменить данные</button>
         </div>
     </form>





<?php
//        echo '<pre>';
//     var_dump($_SESSION['user']);
//     echo '</pre>';


 }else{ ?>

     1) id vk
     2) Если есть, то проапргредить
     3) Нету - создать


    Форма для апгрейда



<?php }
?>
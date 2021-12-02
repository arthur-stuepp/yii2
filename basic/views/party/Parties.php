<?php

use yii\widgets\LinkPager;

?>
    <h2>Listagem de CLientes</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">CNPJ</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($parties as $party) { ?>
            <tr>
                <th scope="row"><?= $party->id ?></th>
                <td><?= $party->name ?></td>
                <td><?= $party->email ?></td>
                <td><?= $party->document ?></td>
            </tr>

        <?php } ?>

        </tbody>
    </table>
    <ul>

    </ul>
<?= LinkPager::widget(['pagination' => $pagination]);

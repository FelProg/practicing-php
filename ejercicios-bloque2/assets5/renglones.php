<?php for ($i = 0; $i < $renglones; $i++) : ?>
    <tr>
        <?php foreach ($indices as $elementos) : ?>
            <td><?= $arreglo[$elementos][$i] ?></td>
        <?php endforeach ?>
    </tr>
<?php endfor ?>
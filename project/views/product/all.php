<table border="1">
    <?php foreach ($data as $dataElement): ?>
        <tr>
            <th><?= $dataElement['name']; ?></th>
            <td><?= $dataElement['price']; ?></td>
            <td><?= $dataElement['quantity']; ?></td>
            <td><?= $dataElement['category']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
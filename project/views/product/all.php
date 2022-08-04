<table>
    <tr>
        <th>name</th>
        <th>price</th>
        <th>quantity</th>
        <th>description</th>
    </tr>
    <?php foreach ($data as $dataItem): ?>
        <tr>
            <td><?= $dataItem['name']; ?></td>
            <td><?= $dataItem['price']; ?></td>
            <td><?= $dataItem['quantity']; ?></td>
            <td><?= $dataItem['desc']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<table class="table table-hover">
    <thead style="background-color:greenyellow">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tên hàng</th>
        <th scope="col">Loại hàng</th>
        <th scope="col">Giá</th>
        <th scope="col">Số lượng</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
        <tr>
            <th scope="row"><?php echo $product['id'] ?></th>
            <td><?php echo $product['name'] ?></td>
            <td><?php echo $product['type'] ?></td>
            <td><?php echo number_format($product['price']) ?>VND</td>
            <td><?php echo $product['amount'] ?></td>
            <td>
                <a href="index.php?page=product&action=update&id=<?php echo $product['id'] ?>"
                   class="btn btn-warning"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                <a href="index.php?page=product&action=delete&id=<?php echo $product['id'] ?>"
                   onclick="return confirm('Are you sure about that?')" class="btn btn-danger"><i class="fa fa-trash"
                                                                                                  aria-hidden="true"></i></a>
            </td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table><?php

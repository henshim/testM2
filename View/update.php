<form method="post">
    <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
    <div class="form-group">
        <label for="exampleFormControlInput1">Tên sản phẩm</label>
        <input type="text" class="form-control" value="<?php echo $product['name']?>" id="exampleFormControlInput1" placeholder="" required="" name="name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Loại hàng</label>
        <select class="form-control" id="exampleFormControlSelect1" name="type">
            <option>Hoa Quả</option>
            <option>Bánh Kẹo</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">Giá</label>
        <input type="number" class="form-control" value="<?php echo $product['price']?>"id="exampleFormControlInput1" placeholder="" required="" name="price">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">Số lượng</label>
        <input type="number" class="form-control" value="<?php echo $product['amount']?>"id="exampleFormControlInput1" placeholder="" required="" name="amount">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Mô tả</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"
                  required=""><?php echo $product['description']?></textarea>
    </div>
    <button type="submit" class="btn btn-success">Lưu sản phẩm</button>
    <a href="index.php?page=product&action=list" class="btn btn-secondary">Back</a>
</form><?php


<?php
    $products =[
      ["id"=> 1, "name"=> "Rau Cu Sach", "image"=> "https://anhdep123.com/wp-content/uploads/2020/11/hinh-anh-mot-so-loai-rau.png", "price" => 160000, "sale_price" => 150000, "quantity"=>2],
      ["id"=> 2, "name"=> "Rau Cu Sach", "image"=> "https://anhdep123.com/wp-content/uploads/2020/11/hinh-anh-mot-so-loai-rau.png", "price" => 190000, "sale_price" => 180000, "quantity" => 3],
      ["id"=> 3, "name"=> "Rau Cu Sach", "image"=> "https://anhdep123.com/wp-content/uploads/2020/11/hinh-anh-mot-so-loai-rau.png", "price" => 100000, "sale_price" => 0, "quantity" => 5],
      ["id"=> 4, "name"=> "Rau Cu Sach", "image"=> "https://anhdep123.com/wp-content/uploads/2020/11/hinh-anh-mot-so-loai-rau.png", "price" => 180000, "sale_price" => 120000, "quantity" => 9],
    ];
    $totalQty = 0;
    $totalPrice =0;
    foreach ($products as $prod) {
      $totalQty += $prod['quantity'];
      $totalPrice += ($prod['price'] * $prod['quantity']);
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>bai3</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Sub Total</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($products as $key => $prod) { ?>
            <tr>
              <th scope="row"><?php echo $prod['id']?></th>
              <td style="width: 10%;">
                <img src="<?php echo $prod['image']?>" alt="" class="card-img">
              </td>
              <td><?php echo $prod['name']?></td>
              <td><?php echo $prod['price']?></td>
              <td><?php echo $prod['quantity']?></td>
              <td>
                <?php echo $prod['price'] * $prod['quantity'];?> vnd
              </td>
            </tr>
          <?php } ?>
        </tbody>
        <tfoot>
          <tr class="font-weight-bold">
            <td colspan="4" class="text-right">Total Quantity</td>
            <td colspan="2">
              <?php echo $totalQty?>
            </td>
          </tr>
          <tr class="font-weight-bold">
            <td colspan="4" class="text-right">Total Price</td>
            <td colspan="2">
              <?php echo $totalPrice?> vnd
            </td>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
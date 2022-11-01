<?php
  $products =[
    ["name"=> "Rau Cu Sach", "image"=> "https://anhdep123.com/wp-content/uploads/2020/11/hinh-anh-mot-so-loai-rau.png", "price" => 160000, "sale_price" => 150000],
    ["name"=> "Rau Cu Sach", "image"=> "https://anhdep123.com/wp-content/uploads/2020/11/hinh-anh-mot-so-loai-rau.png", "price" => 190000, "sale_price" => 180000],
    ["name"=> "Rau Cu Sach", "image"=> "https://anhdep123.com/wp-content/uploads/2020/11/hinh-anh-mot-so-loai-rau.png", "price" => 100000, "sale_price" => 0],
    ["name"=> "Rau Cu Sach", "image"=> "https://anhdep123.com/wp-content/uploads/2020/11/hinh-anh-mot-so-loai-rau.png", "price" => 180000, "sale_price" => 120000],
  ]
?>

<!doctype html>
<html lang="en">
  <head>
    <title>bai2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="d-flex align-items-center justify-content-between">
        <?php foreach ($products as $prod) {?>
          <div class="card p-3">
            <img class="card-img-top" src="<?php echo $prod["image"]?>" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title"><?php echo $prod["name"]?></h4>
                <?php
                  if ($prod['sale_price'] == 0) {
                    echo "
                      <p class='card-text text-center font-weight-bold'>Price: $prod[price]</p>
                    ";
                  } else {
                    echo "
                      <p class='card-text text-center'>
                        <small><del>Old: $prod[price]<del></small> <span class='font-weight-bold'>New: $prod[sale_price]</span>
                      </p>
                    ";
                  }
                  
                ?>
            </div>
            <div class="card-body">
              <a href="#" class="card-link btn btn-primary">View</a>
              <a href="#" class="card-link btn btn-danger">Add To Cart</a>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
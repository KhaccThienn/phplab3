<?php
  $account =[
    ["name" => "Nguyen Huy Hoang", "email" => "hoangnh@gmail.com", "phone"=>"0986523468", "gender"=> 1, "avatar"=> "https://scr.vn/wp-content/uploads/2020/07/Avatar-Facebook-tr%E1%BA%AFng.jpg"],
    ["name" => "Tran Dinh Hau", "email" => "hautd@gmail.com", "phone"=>"0987456158", "gender"=> 0, "avatar"=> "https://scr.vn/wp-content/uploads/2020/07/Avatar-m%E1%BA%B7c-%C4%91%E1%BB%8Bnh-n%E1%BB%AF-c%C3%B3-m%C3%A0u.jpg"],
    ["name" => "Vo Hoai Nam", "email" => "namvh@gmail.com", "phone"=>"098412575", "gender"=> 1, "avatar"=> "https://scr.vn/wp-content/uploads/2020/07/Avatar-Facebook-tr%E1%BA%AFng.jpg"],
    ["name" => "Cao Mai Linh", "email" => "linhcm@gmail.com", "phone"=>"0965478245", "gender"=> 0, "avatar"=> "https://scr.vn/wp-content/uploads/2020/07/Avatar-m%E1%BA%B7c-%C4%91%E1%BB%8Bnh-n%E1%BB%AF-c%C3%B3-m%C3%A0u.jpg"],
    ["name" => "Ho Ngoc Hoa", "email" => "hoanh@gmail.com", "phone"=>"0965236897", "gender"=> 0, "avatar"=> "https://scr.vn/wp-content/uploads/2020/07/Avatar-m%E1%BA%B7c-%C4%91%E1%BB%8Bnh-n%E1%BB%AF-c%C3%B3-m%C3%A0u.jpg"],
    ["name" => "Cao Sy Phuc", "email" => "phuccs@gmail.com", "phone"=>"0912548796", "gender"=> 1, "avatar"=> "https://scr.vn/wp-content/uploads/2020/07/Avatar-Facebook-tr%E1%BA%AFng.jpg"],
    ["name" => "Mai Nhu Quynh", "email" => "quynhmn@gmail.com", "phone"=>"0912045587", "gender"=> 0, "avatar"=> "https://scr.vn/wp-content/uploads/2020/07/Avatar-m%E1%BA%B7c-%C4%91%E1%BB%8Bnh-n%E1%BB%AF-c%C3%B3-m%C3%A0u.jpg"],
    ["name" => "Tran Tien Dat", "email" => "dattt@gmail.com", "phone"=>"0943898989", "gender"=> 1, "avatar"=> "https://scr.vn/wp-content/uploads/2020/07/Avatar-Facebook-tr%E1%BA%AFng.jpg"],
  ]
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Bai 1</title>
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
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Avatar</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($account as $acc => $value) {
              if($value['gender'] == 1){
                $gender = "Nam";
              } else {
                $gender = "Nu";
              }
              echo "
                <tr>
                  <td scope='row'>$value[name]</td>
                  <td>$value[email]</td>
                  <td>$value[phone]</td>
                  <td>
                    $gender
                  </td>
                  <td style='width: 10%'>
                    <img src='$value[avatar]' alt='$value[name]' class='card-img'>
                  </td>
                </tr>
              ";
            }
          ?>
          
        </tbody>
      </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
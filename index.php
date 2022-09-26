<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<?php
// Multidimensional array
$superheroes = array(
    array("userId"=> 1,
    "id"=> 2,
    "title"=> "qui est esse",
    "body"=> "est rerum tempore vitae\nsequi sint nihil reprehenderit dolor beatae ea dolores neque\nfugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis\nqui aperiam non debitis possimus qui neque nisi nulla"),
    array( "userId"=> 1,
    "id"=> 3,
    "title"=> "ea molestias quasi exercitationem repellat qui ipsa sit aut",
    "body"=> "et iusto sed quo iure\nvoluptatem occaecati omnis eligendi aut ad\nvoluptatem doloribus vel accusantium quis pariatur\nmolestiae porro eius odio et labore et velit aut"),
 
 
  array(   "userId"=> 1,
    "id" => 4,
    "title"=> "eum et est occaecati",
    "body"=> "ullam et saepe reiciendis voluptatem adipisci\nsit amet autem assumenda provident rerum culpa\nquis hic commodi nesciunt rem tenetur doloremque ipsam iure\nquis sunt voluptatem rerum illo velit"),
 
 
  array("userId"=> 1,
    "id"=> 5,
    "title"=>"nesciunt quas odio",
    "body"=> "repudiandae veniam quaerat sunt sed\nalias aut fugiat sit autem sed est\nvoluptatem omnis possimus esse voluptatibus quis\nest aut tenetur dolor neque"),
    
  
  array( "userId"=> 1,
    "id"=> 6,
    "title"=> "dolorem eum magni eos aperiam quia",
    "body"=> "ut aspernatur corporis harum nihil quis provident sequi\nmollitia nobis aliquid molestiae\nperspiciatis et ea nemo ab reprehenderit accusantium quas\nvoluptate dolores velit et doloremque molestiae"),
   
 
  array("userId"=> 1,
    "id"=> 7,
    "title"=> "magnam facilis autem",
    "body"=> "dolore placeat quibusdam ea quo vitae\nmagni quis enim qui quis quo nemo aut saepe\nquidem repellat excepturi ut quia\nsunt ut sequi eos ea sed quas"),
    
  array("userId"=> 1,
    "id"=> 8,
    "title"=> "dolorem dolore est ipsam",
    "body"=> "dignissimos aperiam dolorem qui eum\nfacilis quibusdam animi sint suscipit qui sint possimus cum\nquaerat magni maiores excepturi\nipsam ut commodi dolor voluptatum modi aut vitae"),
    
  array("userId"=> 1,
    "id"=>9,
    "title"=> "nesciunt iure omnis dolorem tempora et accusantium",
    "body"=> "consectetur animi nesciunt iure dolore\nenim quia ad\nveniam autem ut quam aut nobis\net est aut quod aut provident voluptas autem voluptas"),

  array("userId"=>1,
    "id"=> 10,
    "title"=> "optio molestias id quia eum",
    "body"=> "quo et expedita modi cum officia vel magni\ndoloribus qui repudiandae\nvero nisi sit\nquos veniam quod sed accusamus veritatis error")
);
 
for($i = 0; $i < count($superheroes); $i++) {
    echo "{<br>";
    foreach($superheroes[$i] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "}<br>";
}
?>
</body>
</html>
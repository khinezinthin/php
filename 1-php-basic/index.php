<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width:300px;
        }
        td,th{
            border: 1px solid black;
        }
        .text-end{
            text-align: right;
        }
        .bg-danger{
            background-color: pink;
        }
    </style>
</head>
<body>
    <?php
    $name = "khine zin thin";
    $age = 20;
    $status = false;
    $gfCount = 3; 

    $fruits = ["mango","lemon","banana","apple","orange"];

    $info = [
        "name" => "mgmg",
        "age" => 20,
        "major" => "bio",
        "job" => null
    ];

    

    $products = [
        [
            "id" => 1,
            "name" => "pork",
            "price" => 1200,
            "stock" => 300,
            "unit" => "kg"
        ],
        [
            "id" => 2,
            "name" => "chicken",
            "price" => 1000,
            "stock" => 0,
            "unit" => "kg"
        ],
        [
            "id" => 3,
            "name" => "pen",
            "price" => 500,
            "stock" => 30,
            "unit" => "piece"
        ],
        [
            "id" => 4,
            "name" => "egg",
            "price" => 2000,
            "stock" => 25,
            "unit" => "box"
        ],
        [
            "id" => 5,
            "name" => "book",
            "price" => 300,
            "stock" => 0,
            "unit" => "piece"
        ],
    ]

    
    ?>


    <!-- <?php echo "a";?> -->
    <!-- <?= "a"?> -->

    <h1>min ga lar par</h1>
    <p>I'm <?php echo $name; ?></p>
    <p>
        I'm <?= $age ?>
        year<?php echo $age > 1 ? "s" : "" ?>
    </p>
    <hr>

    <!-- <?php if($status) {?>
        
        <div>
            <h1>i am true</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, repellat tempora. Tenetur odit est repellat iure et nobis necessitatibus laboriosam consequatur iusto. Necessitatibus tempore molestias, dicta molestiae consequatur in blanditiis.
            </p>
        </div>

    <?php }else{ ?>

        <img src="https://chocolatey.org/assets/images/global-shared/facebook-share.png" alt="" style="width: 500px; height: 300px;">

    <?php }?> -->
    
    <?php if($gfCount>0): ?> 

        <h1>girlfriend<?php echo $gfCount>1 ? "s":"" ?> shi tl</h1>

    <?php else: ?>

        <h1>girlfriend ma shi buu</h1>
        
    <?php endif ?>
    <hr>

    <h4>Fruits List</h4>
    <ul>
        <?php foreach($fruits as $key => $fruit): ?>
            <li>
                <?= $key ." | ". $fruit ?>
            </li>
        <?php endforeach ?>
    </ul>
    <hr>

    <h4>Mg Mg Information</h4>
    <ul>
        <?php foreach($info as $key => $value): ?>
            <li>
                <?= $key ." | ". $value?>
            </li>
        <?php endforeach ?>
    </ul>
    <hr>

    
    <h4>Product List</h4>
    <!-- <?= $products[0]["name"] ?> -->
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th class="text-end">Price</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
                <tr class="<?= $product['stock'] === 0 ? 'bg-danger' : '' ?>">
                    <td><?= $product["id"] ?></td>
                    <td><?= $product["name"] ?></td>
                    <td class="text-end"><?= $product["price"] ?></td>
                    <td><?= $product["stock"] ."/". $product["unit"] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    
</body>
</html>
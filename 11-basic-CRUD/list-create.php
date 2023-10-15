<?php require_once "./template/header.php" ?>
<div class="container">
        <div class="row">
            <div class="col-12">
                <div class=" p-5 m-5 border rounded">
                    <h3 class="mb-3">Create List</h3>
                    <!-- php -->
                    <?php 
                    if($_SERVER["REQUEST_METHOD"] === "POST"){
                        $name = $_POST['name'];
                        $money = $_POST['money'];

                        $sql = "INSERT INTO my (name,money) VALUES ('$name',$money)";

                        if(mysqli_query($conn,$sql)){
                            echo alert("data inserted");
                        }
                    };             
                    ?>
                    <!-- php end -->
                    <form method="post">
                    <div>
                        <label for="" class=" form-label">Name</label>
                        <input type="text" name="name" required class=" form-control">
                    </div><br>
                    <div>
                        <label for="" class=" form-label">Money</label>
                        <input type="number" name="money" required class=" form-control">
                    </div><br>
                    <button class=" btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require_once "./template/footer.php" ?>
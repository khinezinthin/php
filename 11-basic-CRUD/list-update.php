<?php require_once "./template/header.php" ?>
<div class="container">
        <div class="row">
            <div class="col-12">
                <div class=" p-5 m-5 border rounded">
                    <h3 class="mb-3">Update List</h3>
                    <!-- php -->
                    <?php 
                        $id = $_POST["id"];
                        $sql = "SELECT * FROM my WHERE id = $id";
                        $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));   
                        // dd($row);
                    ?>
                    <!-- php end -->
                    
                    <form action="list-update-info.php" method="post">
                        <input type="hidden" name="id" value="<?= $row["id"] ?>">
                    <div>
                        <label for="" class=" form-label">Name</label>
                        <input type="text" name="name" value="<?= $row["name"]?>" required class=" form-control">
                    </div><br>
                    <div>
                        <label for="" class=" form-label">Money</label>
                        <input type="number" name="money" value="<?= $row["money"]?>" required class=" form-control">
                    </div><br>
                    <button class=" btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require_once "./template/footer.php" ?>
<?php require_once "./template/header.php" ?>
<div class="container">
        <div class="row">
            <div class="col-12">
                <div class=" p-5 m-5 border rounded">
                    <?php 
                        if(!empty($_SESSION['status'])){
                            echo alert($_SESSION['status']["message"]);
                            $_SESSION["status"] = null;
                        }
                    ?>
                    <h3 class="mb-3">List</h3>
                    <!-- php -->
                    <?php 
                        $sql = "SELECT * FROM my";
                        if(isset($_GET["q"])){
                            $q = $_GET['q'];
                            // space lo where shay
                            $sql .= " WHERE name LIKE '%$q%'";
                        }

                        $query = mysqli_query($conn,$sql);
                        // dd($query);
                        $totalSql = "SELECT sum(money) AS total from my";
                        $totalQuery = mysqli_query($conn,$totalSql);
                        // dd(mysqli_fetch_assoc($totalQuery))

                        
                    ?>
                    <!-- php end -->

                    <div>
                        <div class="row justify-content-between align-items-center mb-3">
                            <div class=" col-4 ">
                                <h5>
                                Total List: <?= $query->num_rows ?>
                                </h5> <br>
                            </div>

                            <div class="col-4 ">
                                <form method="get" >
                                    <div class=" input-group">
                                        <input class=" form-control" value="<?php if(isset($_GET["q"])):?><?= $_GET['q'] ?><?php endif; ?>"
                                             type="text" name="q">

                                        <a href="list-index.php" class=" btn btn-danger">
                                        <i class=" bi bi-x"></i>
                                        </a>
                                        <button class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <table class=" table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Money</th>
                                    <th>Control</th>
                                    <th>Creted-At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row = mysqli_fetch_assoc($query)): ?>
                                    
                                    <tr class=" align-middle">
                                        <td><?= $row["id"] ?></td>
                                        <td><?= $row["name"] ?></td>
                                        <td><?= $row["money"] ?></td>
                                        <td>
                                            <form class=" d-inline-block" action="list-update.php" method="post">
                                                <input type="hidden" name="id" value='<?= $row["id"]?>'>
                                                <button class=" btn btn-primary">Update</button>
                                            </form>
                                            <form class=" d-inline-block" action="list-delete.php" method="post">
                                                <input type="hidden" name="id" value='<?= $row["id"]?>'>
                                                <button onclick="return confirm('are you sure to delete') " class=" btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                        <td>
                                            <p class=" small mb-0">
                                            <i class="bi bi-calendar"></i>    
                                            <?= showDateTime($row["created_at"]) ?></p>

                                            <p class=" small mb-0">
                                            <i class="bi bi-clock"></i>        
                                            <?= showDateTime($row["created_at"], "H : i : s") ?></p>
                                        </td>
                                        
                                    </tr>
                                <?php endwhile; ?>
                                <tfoot>
                                    <tr>
                                        <td colspan="3">Total</td>
                                        <td>
                                            <?= mysqli_fetch_assoc($totalQuery)['total']?>
                                        </td>
                                    </tr>
                                </tfoot>

                            </tbody>
                        </table>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
<?php require_once "./template/footer.php" ?>
<?php include_once "head.php" ?>
    <div class="p-3">
        <h1>Create Friend Card</h1>
        <form action="./fri-logic.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="" class="form-label">Friend Name</label>
                <input class="form-control" type="text" name="fri_name" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Friend Phone</label>
                <input class="form-control" type="number" name="fri_phone" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Friend Address</label>
                <textarea class="form-control" name="fri_address" required rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Friend Photo</label>
                <input class="form-control" type="file" name="fri_photo" required>
            </div>
            <div class="mb-3">
                <input class="form-check-input" name="is_real" value="yes" type="checkbox" id="isreal">
                <label for="isreal" class="form-check-label">Real Friend</label>
            </div>
            <button class="btn btn-primary w-100">Create Friend List</button>

        </form>
    </div>

        <?php
            $fileName = "friend-data.json";     
            $friends = json_decode(file_get_contents($fileName),true);
        ?>
        <?php foreach($friends as $key=>$friend) :?>
            <div class="my-5">
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <img src="<?= $friend["photo"] ?>" class=" rounded-circle" width="100" height="100" alt="">
                        <h3><?= $friend["fri_name"] ?></h3>
                        <p><?= $friend["fri_phone"] ?></p>
                        <a href="./fri-detail.php?index=<?= $key ?>" class=" btn btn-primary w-100 d-block">detail</a>
                        <a href="./fri-delete.php?index=<?= $key ?>" class=" btn btn-danger w-100 d-block">delete</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
<?php include_once "footer.php" ?>
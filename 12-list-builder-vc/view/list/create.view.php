<?php require_once ViewDir."/template/header.php"; ?>

<h1>Create List</h1>

<div class="mb-3">
    <a href="<?= route("list") ?>" class=" btn btn-primary">All Lists</a>
</div>

<div class=" border rounded p-5">
    <form action="<?= route("list-store") ?>" method="post">
        <duv class="row align-items-end">
            <div class="col">
                <label for="" class=" form-lable">Name</label>
                <input type="text" class=" form-control" name="name" id="" required>
            </div>
            <div class="col">
                <label for="" class=" form-lable">Money</label>
                <input type="number" class=" form-control" name="money" id="" required>
            </div>
            <div class="col">
                <button class=" btn btn-primary w-100">add list</button>
            </div>
        </duv>
    </form>
</div>


<?php require_once ViewDir."/template/footer.php"; ?>

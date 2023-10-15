<?php require_once ViewDir."/template/header.php"; ?>

<h1>Edit List</h1>

<div class="mb-3">
    <a href="<?= route("list") ?>" class=" btn btn-primary">All Lists</a>
</div>

<div class=" border rounded p-5">
    <form action="<?= route("list-update") ?>" method="post">
    <input type="hidden" name="_method" id="put">
        <duv class="row align-items-end">
            <div class="col">
                <label for="" class=" form-lable">Name</label>
                <input type="text" class=" form-control" value="<?= $list['name'] ?>" name="name" id="">
            </div>
            <div class="col">
                <label for="" class=" form-lable">Money</label>
                <input type="number" class=" form-control" value="<?= $list['money'] ?>" name="money" id="">
            </div>
            <div class="col">
                <form action="<?= route("list-update") ?>" method="post">
                    <input type="hidden" name="id" value="<?= $list['id'] ?>">
                    <input type="hidden" name="_method" value="put">
                    <button class=" btn btn-primary w-100">update list</button>
                </form>
            </div>
        </duv>
    </form>
</div>


<?php require_once ViewDir."/template/footer.php"; ?>

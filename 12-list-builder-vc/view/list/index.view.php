<?php require_once ViewDir."/template/header.php"; ?>

<h1>list</h1>

<div class="mb-3 d-flex justify-content-between">
    <!-- route htl ka name ko url hmr pay  -->
    <a href="<?= route("list-create") ?>" class=" btn btn-primary">Create List</a>
    <form class=" d-inline-block" method="get" >
        <div class=" input-group">
        <input class=" form-control" value="<?php if(isset($_GET["q"])):?><?= $_GET['q'] ?><?php endif; ?>"
        type="text" name="q">

        <a href="<?= route("list") ?>" class=" btn btn-danger">
            <i class=" bi bi-x"></i>
        </a>
        <button class="btn btn-primary">Search</button>
        </div>
    </form>
</div>

<table  class=" table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Money</th>
            <th>Control</th>
            <th>Created-At</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($lists["data"] as $list): ?>
            <tr>
                <td><?= $list["id"] ?></td>
                <td><?= $list["name"] ?></td>
                <td><?= $list["money"] ?></td>
                <td>
                    <a href="<?= route("list-edit",["id" => $list['id']]) ?>" class=" btn btn-primary">Edit</a>

                    <form class=" d-inline-block" action="<?= route("list-delete") ?>" method="post">
                        <input type="hidden" name="id" value="<?= $list['id'] ?>">
                        <input type="hidden" name="_method" value="delete">
                        <button class=" btn btn-danger">DELETE</button>
                    </form>
                </td>
                <td><?= $list["created_at"] ?></td>
                
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>
    <?= paginator($lists) ?>

<?php require_once ViewDir."/template/footer.php"; ?>

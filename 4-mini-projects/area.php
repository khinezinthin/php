<?php include_once "head.php" ?>
    <div class="p-3">
        <h1>Area Calculate</h1>
        <?php include_once "server.php" ?>
        <form method="post">
            <div class="row g-3">
                <div class="col-3">
                    <input class="form-control" type="number" name="width" placeholder="Width" id="" required>
                </div>
                <div class="col-3">
                    <input class="form-control" type="number" name="breadth" placeholder="Breadth" id="" required>
                </div>
                <div class="col-3">
                    <button class="btn btn-primary" name="area_calc_form">Calculate</button>
                </div>
            </div>
        </form>
    </div>

    <?php if(is_dir($folderName)):
        $records = array_filter(scandir($folderName),fn($r) => $r != "." && $r != "..");
        // print_r($records);
    ?>
    <table class=" table table-bordered">
        <thead>
            <tr>
                <th>Width</th>
                <th>Breadth</th>
                <th>Area</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($records as $record):
                $currentFileName = $folderName."/".$record;
                // echo $currentFileName;
                $json = fopen($currentFileName,"r");
                $j = fread($json,filesize($currentFileName));
                $arr = json_decode($j,true);
            ?>
                <tr>
                    <td><?= $arr["width"] ?></td>
                    <td><?= $arr["breadth"] ?></td>
                    <td><?= $arr["area"] ?></td>
                    <td>
                        <a onclick="return confirm()" href="delete-area-record.php?name=<?= $record ?>"  class=" btn btn-danger">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>

<?php include_once "footer.php" ?>
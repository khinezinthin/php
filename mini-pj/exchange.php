<?php include_once("head.php") ?>
    
<div class="p-3">
    <h1>Exchange Calculate</h1>
    <?php include "ex-logic.php"; ?>
    <form method="post" id="exForm"></form>

    <div class="row g-3">
        <div class="col12">
            <label class=" form-label" for="">Amount</label>
            <input type="number" form="exForm" class=" form-control" name="amount" required id="">
        </div>
        <div class="col-6">
            <label class=" form-label" for="">From Currency</label>
            <select name="from" form="exForm" class=" form-select " required id="">
                <option value="">select</option>
                <?php foreach($rates as $key=> $value) :?>
                    <option value="<?= $key ?>"><?= $key ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-6">
        <label class=" form-label" for="">To Currency</label>
            <select name="to" form="exForm" class=" form-select" required id="">
            <option value="">select</option>
            <?php foreach($rates as $key=> $value) :?>
                    <option value="<?= $key ?>"><?= $key ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-12">
            <button name="btn" form="exForm" class=" btn btn-primary w-100 btn-lg">Calculate</button>
        </div>
    </div>
</div>
<?php include_once("footer.php") ?> 
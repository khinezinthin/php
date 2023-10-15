<?php include_once("head.php") ?>
    
<div class=" p-3">
<h1>Area Calculater</h1>

<?php include_once("server.php"); ?>

<form method="post">
    <div class="row g-3">
    <div class="col">
    <input class=" form-control" type="text" name="width" placeholder="width" id="" required>
    </div>
    <div class="col">
    <input class=" form-control" type="text" name="breadth" placeholder="breadth" id="" required>
    </div>
    <div class="col">
    <button class="btn btn-primary" name="area_calc_form">Calculate</button>
    </div>
    </div>
</form>
</div>
<?php include_once("footer.php") ?>
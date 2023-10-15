<?php if(isset($_POST["area_calc_form"])) :?>
    
<table class=" table table-bordered">
    <thead>
        <tr>
            <th>Width</th>
            <th>Breadth</th>
            <th>Area</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $_POST["width"] ?>ft</td>
            <td><?= $_POST["breadth"] ?>ft</td>
            <td><?= area($_POST["width"] , $_POST["breadth"]) ?>sqft</td>
        </tr>
    </tbody>
</table>

<?php endif; ?>
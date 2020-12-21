<?php
include('_check-logged.php');
include('_header.php');
include('config.php');
$products = array();
$result = mysqli_query( $conn,"SELECT * FROM products;" );

?>

<div class="container p-3 mt-5">
    <h2>Products</h2>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Cost</th>
                <th scope="col">Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?= $row['product_code']?></td>
                <td><?= $row['product_name']?></td>
                <td><?= $row['standard_cost']?></td>
                <td><?= $row['quantity_per_unit']?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>

<?php include('_footer.php');
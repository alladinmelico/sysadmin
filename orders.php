<?php
include('_check-logged.php');
include('_header.php');
include('config.php');
$products = array();
$result = mysqli_query( $conn,"SELECT * FROM orders;" );

?>

<div class="container p-3 mt-5">
    <h2>Orders</h2>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Shipping Name</th>
                <th scope="col">Shipping Fee</th>
                <th scope="col">Order Date</th>
                <th scope="col">Ship City</th>
                <th scope="col">Payment Type</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?= $row['id']?></td>
                <td><?= $row['ship_name']?></td>
                <td><?= $row['shipping_fee']?></td>
                <td><?= $row['order_date']?></td>
                <td><?= $row['ship_city']?></td>
                <td><?= $row['payment_type']?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>

<?php include('_footer.php');
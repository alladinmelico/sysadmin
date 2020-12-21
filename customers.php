<?php
include('_check-logged.php');
include('_header.php');
include('config.php');
$products = array();
$result = mysqli_query( $conn,"SELECT * FROM customers;" );

?>

<div class="container p-3 mt-5">
    <h2>Customers</h2>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Company</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Job Title</th>
                <th scope="col">Business Phone</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?= $row['id']?></td>
                <td><?= $row['company']?></td>
                <td><?= $row['first_name']?></td>
                <td><?= $row['last_name']?></td>
                <td><?= $row['job_title']?></td>
                <td><?= $row['business_phone']?></td>
                <td><?= $row['address']?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>

<?php include('_footer.php');
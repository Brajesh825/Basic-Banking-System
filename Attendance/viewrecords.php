<?php   
    $title='View Records';
    require 'includes/header.php';
    require_once './db/conn.php';

    $results = $crud->getAttendees();
?>

    <table class="table">
        <tr class="table-primary">
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Specialty</th>
            <th>Actions</th>
        </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr class="table-secondary">
            <td><?php echo $r['attendee_id']; ?></td>
            <td><?php echo $r['firstname']; ?></td>
            <td><?php echo $r['lastname']; ?></td>
            <td><?php echo $r['name']; ?></td>
            <td><a href="view.php?id=<?php echo $r['attendee_id']; ?>" class="btn btn-primary">View</a></td>
        </tr>
        <?php } ?>
    </table>



<?php require 'includes/footer.php'; ?>
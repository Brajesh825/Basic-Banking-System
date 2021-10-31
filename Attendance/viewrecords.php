<?php   
    $title='View Records';
    require 'includes/header.php';
    require_once './includes/auth_check.php';
    require_once './db/conn.php';

    $results = $crud->getAttendees();
?>

    <table class="table table-striped table-dark">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Specialty</th>
            <th>Actions</th>
        </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr">
            <!-- <td><?php echo $r['attendee_id']; ?></td> -->
            <td><?php echo $r['firstname']; ?></td>
            <td><?php echo $r['lastname']; ?></td>
            <td><?php echo $r['name']; ?></td>
            <td>
                <a href="view.php?id=<?php echo $r['attendee_id']; ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                <a href="edit.php?id=<?php echo $r['attendee_id']; ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                <a  onclick="return confirm('Are you sure you want to delete this record?');"
                    href="delete.php?id=<?php echo $r['attendee_id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php } ?>
    </table>

<?php require 'includes/footer.php'; ?>
<?php
include 'header.php';
include 'conn.php';

$sql = "SELECT * FROM `user`";
$result = ($conn->query($sql));

?>
<h1>Dashboars</h1>


<table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>Profile</th>
        <th>text</th>
        <th>password</th>
        <th>radio</th>
        <th>checkbox</th>
        <th>select</th>
        <th>color</th>
        <th>date</th>
        <th>datetime_local</th>
        <th>email</th>
        <th>month</th>
        <th>number</th>
        <th>range</th>
        <th>search</th>
        <th>tel</th>
        <th>time</th>
        <th>url</th>
        <th>week</th>
        <th>address</th>
        <th>update</th>
        <th>delete</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td>
                <?php echo $row['id']; ?>
            </td>
            <td><img src="http://localhost/php_all/image/<?php echo $row['file']; ?>" alt=""></td>
            <td>
                <?php echo $row['name']; ?>
            </td>
            <td>
                <?php echo $row['password']; ?>
            </td>
            <td>
                <?php echo $row['gender']; ?>
            </td>
            <td>
                <?php echo $row['language']; ?>
            </td>
            <td>
                <?php echo $row['select']; ?>
            </td>
            <td>
                <?php echo $row['color']; ?>
            </td>
            <td>
                <?php echo $row['date']; ?>
            </td>
            <td>
                <?php echo $row['datetime_local']; ?>
            </td>
            <td>
                <?php echo $row['email']; ?>
            </td>
            <td>
                <?php echo $row['month']; ?>
            </td>
            <td>
                <?php echo $row['number']; ?>
            </td>
            <td>
                <?php echo $row['range']; ?>
            </td>
            <td>
                <?php echo $row['search']; ?>
            </td>
            <td>
                <?php echo $row['tel']; ?>
            </td>
            <td>
                <?php echo $row['time']; ?>
            </td>
            <td>
                <?php echo $row['url']; ?>
            </td>
            <td>
                <?php echo $row['week']; ?>
            </td>
            <td>
                <?php echo $row['textarea']; ?>
            </td>
            <td><a href="http://localhost/php_all/update.php?upid=<?php echo $row['id']; ?>">update</a></td>
            <td><a href="http://localhost/php_all/delete.php?did=<?php echo $row['id']; ?>">delet</a></td>
        </tr>

    <?php } ?>
</table>
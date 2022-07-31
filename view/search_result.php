<?php
session_start();
if (!isset($_SESSION['loginStatus'])) {
    $_SESSION['errorMsg'] = "error not login";
    header("Location: login.php");
}


if (isset($_SESSION['successMsg'])) {
    echo " <div class='alert alert-success' >" . $_SESSION['successMsg'] . "</div>";
    unset($_SESSION['successMsg']);
}


if (isset($_SESSION['errorMsg'])) {
    echo " <div class='alert alert-warning' >" . $_SESSION['errorMsg'] . "</div>";
    unset($_SESSION['errorMsg']);
}

?>
<div class="container">
    <h2>لیست بیت ها</h2><br>
    <form method="post" class="example" action="../controller/search_beat.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>producer</th>
            <th>image_path</th>
        </tr>
        </thead>
        <tbody>
        <?php
        //        session_start();
        session_start();
//
        foreach ($_SESSION['search'] as $beat) {

            echo "   <tr >
               <td >$beat->id </td >
            <td > $beat->name</td >
            <td > $beat->producer</td >
            <td > <img src= '<?php echo $beat->image_path ?>' style='width: 150px'/> </td >
                        <td ><form method='post' action='../controller/deletebeat.php'>
                       delete <input name='id'  type='submit' value='$beat->id'>
</form></td>
            <td ><form method='post' action='../view/update_beat.php'>
                       Update <input name='id'  type='submit' value='$beat->id'>
</form></td>
        </tr >
        ";

        }
        ?>
        </tbody>
    </table>

</div>

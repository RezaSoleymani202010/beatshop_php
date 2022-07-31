<?php
require_once "../model/beat.php";
session_start();
//var_dump($_POST['search']);
$result=search_beat($_POST['search']);
echo "
   <table class='table table-bordered'>
        <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>producer</th>
            <th>image_path</th>
        </tr>
        </thead>
        <tbody>
";
foreach ($result as $beat) {
    echo "
<tr >
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
echo "      </tbody>
    </table>
";
//header("Location: ../view/search_result.php");

//foreach ($result as $value){
//    print_r($value);
//0}

//if ($result){
//}
<div class="container">
    <h2>لیست کاربران</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $conn = new PDO("mysql:host=localhost;dbname=beata", "root", "");
        $query = $conn->prepare("select * from users");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);

        foreach ($result as $user) {

            echo "   <tr >
               <td >$user->id </td >
            <td > $user->name</td >
            <td > $user->email</td >
            <td > $user->password </td >
        </tr >";
        }
        ?>
        </tbody>
    </table>

</div>

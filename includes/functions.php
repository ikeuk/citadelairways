 <?php require_once "model.php"; ?>
  <?php
  function fetch_client_data(){
      global $pdo;

      $sql = 'SELECT * FROM users ORDER BY id DESC';
      $stmt = $pdo->prepare($sql);
      $rows = $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $total_row =$stmt->rowCount();

      $output = '  
                        <table class="table">
                     <thead>
                        <tr>
                           <th>Name</th>
                            <th>Add/profile</th>
                           <th>Email</th>
                           <th>Tracking no</th>
                           <th>Profile/View</th>
                           <th>New Location</th>
                           <th>Delete</th>
                        </tr>
                     </thead>

      ';
         if ($total_row > 0) {
         foreach ($result as $row) {


            $output .= '

                  <tbody>

                     <tr>
            <td><a href="userupdate.php?search='.$row['id'].'">Update '.$row['name'].'</a></td>
            <td><a href="add.php?search='.$row['id'].'">Add '.$row['name'].' Profile</a></td>
                       <td>'. $row["email"] . '</td>
                        <td>' . $row['track_no'] . '</td>
                <td><a href="profile.php?p='.$row['id'].'">'.'Profile'.'</a></td>
                <td><a href="new_location.php?locate='.$row['id'].'">'.'New Location'.'</a></td>
                  <td><a href="delete.php?del='.$row['id'].'">'.'Delete'.'</a></td>
         
                     </tr>
                     </tbody>


            ';
         }
      }

      else 

      {
         $output .= '
            <tr>
                <td>No registered member "Please try to register client":</td>
            </tr>
         ';
      }

      $output .= '</table>';
      return $output;

}

   function fetch_client_case(){
    global $pdo;
    $casa = $_GET['locate'];

      $sql = 'SELECT * FROM locations WHERE user_id1 = :user_id1';
      $stmt = $pdo->prepare($sql);
      $rows = $stmt->execute(array(':user_id1' => $casa));
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $total_row =$stmt->rowCount();

      $output = '  <table class="table">
                     <thead>
                        <tr>
                           <th>New Location</th>
                            <th>Tracking no</th>
                           <th>Client Email</th>
                           <th>New  Status</th>
                           <th>Delete</th>
                        </tr>
                     </thead>
      
      ';
        if ($total_row > 0) {
        foreach ($result as $row) {
         $status = ' ';
         if ($row['status'] == 'yes') {
        $status = '<span>Open</span>';
      }
      else
      {
          $status = '<span>Not Open</span>';
      }

           $output .= '
                       <tbody>
                     <tr>
            <td><a href="userupdate.php?search='.$row['id'].'">'.$row['new_location'].'</a></td>
                        <td>' . $row['track_no'] . '</td>
                         <td>'.$row['receiver_email'].'</td>
                <td>'.$status.'</td>
                    <td><a href="delete.php?delete='.$row['id'].'" class="det">'.'Delete'.'</a></td>
                     </tr>
                     </tbody>
                    
            ';
        }
     }

     else 

     {
        $output .= '
           <tr>
               <td>No registered member "Please try to register client":</td>
           </tr>
        ';
     }

     $output .= '</div>';
     return $output;

}
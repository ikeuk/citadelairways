<?php require_once 'session.php'; ?>
<?php require_once "model.php"; ?>
<?php
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      
            if(isset($post['submit'])) { 

            $track_no = $post['track_no']; 

        $sql = 'SELECT * FROM users WHERE track_no = :track_no LIMIT 1';
        $stmt = $pdo->prepare($sql);
      $stmt->execute(array(':track_no' => $track_no)); 
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row){
           $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "id" => $row['id'],
                    "name" => $row['name'],
                    "email" => $row['email']
                );
                header('location:page.php'); 
       }else{
        header('location:track.php?wrong=1'); 
       }
     }
            
?>
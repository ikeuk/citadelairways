<?php require_once 'model.php'; ?>

<?php
        if(isset($_GET['del'])){
            $id = $_GET['del'];
            $sql = "DELETE FROM users WHERE id =:id";
            $stmt = $pdo->prepare($sql);
            $result = $stmt->execute(array(':id' => $id));
            if($result){
                header("location: mypage.php?del=1");
            }
        } elseif(isset($_GET['dell'])){
            $idE = $_GET['dell'];
            $sql = "DELETE FROM email_data WHERE email_id =:email_id";
            $stmt = $pdo->prepare($sql);
            $result = $stmt->execute(array(':email_id' => $idE));
            if($result){
                header("location: history.php?dell=1");
            }
        }elseif(isset($_GET['delete'])){
            $delete = $_GET['delete'];
            $sql = "DELETE FROM locations WHERE id =:id";
            $stmt = $pdo->prepare($sql);
            $response = $stmt->execute(array(':id' => $delete));
            if($response){
                header("location: mypage.php?dell=1");
            }
        }

?>
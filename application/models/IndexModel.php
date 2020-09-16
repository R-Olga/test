<?php

class IndexModel extends Model {

    public function addComment() {

        $name = $_POST['name'];
        $comment = $_POST['comment']; 
        $date = date("H:i d-m-y");
        
        if(!empty($_POST['name'] OR $_POST['comment'])) {

            $sql = "INSERT INTO comments (name, comment, date) VALUES ('$name', '$comment', '$date')";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            unset($_POST); 
            header("Location: /");
            
       }
    }
}
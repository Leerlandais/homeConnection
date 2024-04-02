<?php



function getArticle (PDO $db, $artSlug) {
  
    $cleanedSlug = htmlspecialchars(strip_tags(trim($artSlug)), ENT_QUOTES);

    $sql = "SELECT n.content, n.title, n.date_published, u.thename, u.login
            FROM news n
            LEFT JOIN user u ON u.iduser = n.user_iduser
            WHERE n.slug = '$cleanedSlug'  
            ";
    try{
        $query = $db->query($sql);
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;

    }catch(Exception $e){
        return $e->getMessage();
    }
    }


    function getArticlesByAuthor(PDO $db) {
        $sql = "SELECT DISTINCT u.thename, u.iduser, n.title, n.date_published, n.user_iduser
        FROM user u
        LEFT JOIN news n ON u.iduser = n.user_iduser
      

        ";
            try{
                $query = $db->query($sql);
                $result = $query->fetchAll();
                $query->closeCursor();
                return $result;
        
            }catch(Exception $e){
                return $e->getMessage();
            }
    }


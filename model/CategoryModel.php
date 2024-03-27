<?php

function getAllCategoriesBySlug(PDO $db): array|string
{
    $sql = "SELECT title, slug FROM category ORDER BY slug ASC;";
    try{
        $query = $db->query($sql);

        if($query->rowCount()==0){
            return "Pas encore de category";
        }

        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;

    }catch(Exception $e){
        return $e->getMessage();
    }
}


function getClippedNewsByCat(PDO $db, $catSlug) {
    $cleanedSlug = htmlspecialchars(strip_tags(trim($catSlug)), ENT_QUOTES);
   var_dump($cleanedSlug);
    $sql = "SELECT SUBSTRING(n.content, 1, 25), n.slug, n.title, n.date_published
            FROM news n
            JOIN news_has_category h ON h.news_idnews = n.idnews
            JOIN category c ON c.idcategory = h.category_idcategory
            WHERE c.slug = '$catSlug'  /* une heure perdu pour réaliser que $catSlug doit être en '' */
            ";
    try{
        $query = $db->query($sql);

        if($query->rowCount()==0){
            return "Pas encore d'article";
        }

        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;

    }catch(Exception $e){
        return $e->getMessage();
    }
    

}

function addArtist (PDO $db, string $art) {
    $cleanedArtist = htmlspecialchars(strip_tags(trim($art)), ENT_QUOTES);
    $sql = "INSERT INTO `tab_artist` (`art_name`) VALUES (:artName)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':artName', $cleanedArtist);
    try {
        $stmt->execute();
        $db->commit();
        return true;
    } catch (PDOException $e) {
        error_log("Error adding Artist: " . $e->getMessage());
        return false;
}
}
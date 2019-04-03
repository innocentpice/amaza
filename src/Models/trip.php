<?php 
class trip extends Model {
    function __construct(){
        parent::__construct();
    }
    
    function addtrip($query,$img){
        $sql = "INSERT INTO `trip`(`trip_owner`, `trip_name`, `trip_detail`, `trip_price`, `trip_guest`, `trip_province`) VALUES ( :owner ,:trip , :detail , :price , :guest, :province )";
        
        $NO = array(
            ":owner" => $_SESSION['company']['company_id'],
            ":trip" => $query['trip'],
            ":detail" => $query['detail'],
            ":price" => $query['price'],
            ":guest" => $query['guest'],
            ":province" => $query['province']
        );
        
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $this->db->lastInsertId();
        $num_img = count($img['name']);
        if($result[0]!=0){
            for($imgNumber=0; $imgNumber<$num_img; $imgNumber++){
                    $imgName = $result."_".$imgNumber.".png";
                    move_uploaded_file($img['tmp_name'][$imgNumber], $_SERVER['DOCUMENT_ROOT'].'/src/Publics/images/trips/'.$imgName);
            }
            return true;
        }else{
            return false;
        }
        
    }
    
    function tripList($number,$keyword){
        $NO = [];
        switch ($keyword) {
            case 'new':
                $sql = 'SELECT * FROM `trip` ORDER BY `trip_id` DESC';
                $sql .= $number? " LIMIT 0,$number": '';
                break;
            case 'hit':
                $sql = 'SELECT * FROM `trip` ORDER BY `trip_rate`';
                $sql .= $number? " LIMIT 0,$number": '';
                break;
            default:
                $sql = "SELECT * FROM `trip` WHERE `trip_name` LIKE '%$keyword%' OR `trip_province` LIKE '%$keyword%' ORDER BY `trip_rate`";
                break;
        }
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    function tripDetail($tripID){
        $sql = "SELECT * FROM `trip` WHERE `trip_id` = :tripid";
        $NO = array(
            ":tripid" => $tripID
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
    function bookingTrip($tripID){
        $sql = "INSERT INTO `tripSlot` ( `tripSlot_id` , `tripSlot_tripID` , `tripSlot_owner` , `tripSlot_status` ) VALUES ( NULL ,  :tripID,  :owner,  '0' )";
        
        $NO = array(
            ":tripID" => $tripID,
            ":owner" => $_SESSION['auth']['member_id']
        );
        
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
    
    function addreview($tripId,$review){
        $sql = "INSERT INTO `tripReview` ( `tripReview_id`, `tripReview_tripID`, `tripReview_owner`, `tripReview_content`, `tripReview_score` , `tripReview_log` ) VALUES ( NULL, :tripID, :owner, :review, '0', CURRENT_TIMESTAMP )";
        $NO = array(
            ":tripID" => $tripId,
            ":review" => $review,
            ":owner" => $_SESSION['auth']['member_id']
        );
        
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
    
    function reviewCheck($tripId){
        $sql = "SELECT * FROM `tripReview` WHERE `tripReview_tripID` = :tripID AND `tripReview_owner` = :owner";
        
        $NO = array(
            ":tripID" => $tripId,
            ":owner" => $_SESSION['auth']['member_id']
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
    function reviewFetch($tripId,$number=0){
        $NO = [];
        $sql = "SELECT * FROM `tripReview`";
        $sql .= " JOIN `trip` ON `tripReview_tripID` = `trip_id`";
        $sql .= " JOIN `member` ON `tripReview_owner` = `member_id`";
        
        if($tripId !== 'all'){
            $sql .=" WHERE `tripReview_tripID` = :tripID";
            $NO = array(
                ":tripID" => $tripId
            );
        }
        if($number>0){
            $sql .= " ORDER BY `tripReview_id` DESC";
            $sql .= " LIMIT 0 , $number";
        }
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
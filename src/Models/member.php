<?php 
class member extends Model {
    function __construct(){
        parent::__construct();
    }
    
    function addmember($query){
        $sql = "INSERT INTO `member` (`member_id`, `member_username`, `member_password`, `member_name`, `member_surname`, `member_address`, `member_regDate`) VALUES (NULL, :username, :password, :name, :surname, :address, CURRENT_TIMESTAMP)";
        $address = $query['h_number'].';'.$query['sub_district'].';'.$query['district'].';'.$query['province'].';'.$query['zip'].';';
        $NO = array(
            ":username" => $query['username'],
            ":password" => $query['password'],
            ":name" => $query['name'],
            ":surname" => $query['surname'],
            ":address" => $address
        );
        
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
    
    function editmember($query){
        $sql = "UPDATE `member` SET `member_password`= :password,`member_name`=:name,`member_surname`=:surname, `member_address`=:address WHERE `member_username`= :username";
        $address = $query['h_number'].';'.$query['sub_district'].';'.$query['district'].';'.$query['province'].';'.$query['zip'].';';
        $NO = array(
            ":password" => $query['newpassword'],
            ":name" => $query['name'],
            ":surname" => $query['surname'],
            ":address" => $address,
            ":username" => $_SESSION['auth']['member_username']
        );
        
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
    
    function tourList($checkid=0){
        $sql = "SELECT * FROM `tripSlot` JOIN `trip` ON `tripSlot_tripID` = `trip_id` WHERE `tripSlot_owner` = :owner";
        $NO = array(
            ":owner" => $_SESSION['auth']['member_id']
        );
        if($checkid){
            $sql .= " AND `tripSlot_tripID` = :checkid";
            $NO[":checkid"] = $checkid;
        }
        $sql .= " ORDER BY `tripSlot_status`";
        $sth = $this->db->prepare($sql);
        @$sth->execute($NO);
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    function paymentConfirm($tripid,$number,$price,$log){
        
        $sql = "UPDATE `amaza`.`tripSlot` SET `payment_number` =:number, `payment_price` =:price, `payment_log` =:log WHERE `tripSlot`.`tripSlot_tripID` =:tripid AND `tripSlot`.`tripSlot_owner` =:owner";
        $NO = array(
            ":tripid" => $tripid,
            ":number"=> $number,
            ":price"=> $price,
            ":log"=> $log,
            ":owner" => $_SESSION['auth']['member_id']
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        echo $result;
        return $result;
    }
}
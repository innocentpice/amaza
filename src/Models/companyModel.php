<?php 
class companyModel extends Model {
    function __construct(){
        parent::__construct();
    }
    
    function auth(){
        $sql = "SELECT * FROM company WHERE company_owner = :owner";
        $login = array(
            ':owner' => $_SESSION['auth']['member_id']
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($login);
        $result = $sth->fetch();
        if(isset($result[0])){
            return $result;
        }else{
            return false;
        }
    }
    
    function addcompany($query){
        $sql = "INSERT INTO `company` (`company_id`, `company_owner`, `company_name`, `company_tel`, `company_address`, `company_status`) VALUES (NULL, :owner, :name, :tel, :address, 0)";
        $address = $query['h_number'].';'.$query['sub_district'].';'.$query['district'].';'.$query['province'].';'.$query['zip'].';';
        $NO = array(
            ":owner" => $_SESSION['auth']['member_id'],
            ":name" => $query['name'],
            ":tel" => $query['tel'],
            ":address" => $address
        );
        
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
    
    function tripList(){
        $sql = "SELECT * FROM `trip` WHERE `trip_owner` = :owner";
        $NO = array(
            ":owner" => $_SESSION['company']['company_id']
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    function mytrip($id){
        $sql = "SELECT * FROM `trip` WHERE `trip_owner` = :owner AND `trip_id` = :id";
        $NO = array(
            ":owner" => $_SESSION['company']['company_id'],
            ":id" => $id
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
    function tripSlot($tripid,$payment=0){
        
        $sql = "SELECT * FROM `tripSlot` JOIN `member` ON `tripSlot_owner` = `member_id` WHERE `tripSlot_tripID` = :tripid AND `tripSlot_status` = :payment";
        
        $NO = array(
            ":tripid" => $tripid,
            ":payment" => $payment
        );
        
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    function tripSlotConfirm($slotid,$tripid){
        $sql = "UPDATE  `amaza`.`tripSlot` SET  `tripSlot_status` =  '1' WHERE  `tripSlot`.`tripSlot_id` =:slotid AND `tripSlot`.`tripSlot_tripID` = :tripid";
        $NO = array(
            ":slotid" => $slotid,
            ":tripid" => $tripid
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
    
    function tripSlotCancle($slotid,$tripid){
        $sql = "DELETE FROM `amaza`.`tripSlot` WHERE `tripSlot`.`tripSlot_id` = :slotid AND `tripSlot`.`tripSlot_tripID` = :tripid";
        $NO = array(
            ":slotid" => $slotid,
            ":tripid" => $tripid
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
    
}
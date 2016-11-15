<?php

class Rights_link_model extends CORE_Model{

    protected  $table="rights_links"; //table name
    protected  $pk_id="link_id"; //primary key id


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    function create_default_link_list(){
        $sql="INSERT IGNORE INTO `rights_links` (`link_id`, `parent_code`, `link_code`, `link_name`) VALUES
                                          (1,'1','1-1','General Journal'),
                                          (2,'1','1-2','Cash Disbursement'),
                                          (3,'1','1-3','Purchase Journal'),
                                          (4,'1','1-4','Sales Journal'),
                                          (5,'1','1-5','Cash Receipt'),
                                          (6,'2','2-1','Purchase Order'),
                                          (7,'2','2-2','Purchase Invoice'),
                                          (8,'2','2-3','Record Payment'),
                                          (9,'2','2-4','Item Issuance'),
                                          (10,'2','2-5','Item Adjustment'),
                                          (11,'3','3-1','Sales Order'),
                                          (12,'3','3-2','Sales Invoice'),
                                          (13,'3','3-3','Record Payment'),
                                          (14,'4','4-1','Category Management'),
                                          (15,'4','4-2','Department Management'),
                                          (16,'4','4-3','Unit Management'),
                                          (17,'5','5-1','Product Management'),
                                          (18,'5','5-2','Supplier Management'),
                                          (19,'5','5-3','Customer Management'),
                                          (20,'6','6-1','Setup Tax'),
                                          (21,'6','6-2','Setup Chart of Accounts'),
                                          (22,'6','6-3','Account Integration'),
                                          (23,'6','6-4','Setup User Group'),
                                          (24,'6','6-5','Create User Account'),
                                          (25,'6','6-6','Setup Company Info')
            ";


        $this->db->query($sql);
    }



}




?>
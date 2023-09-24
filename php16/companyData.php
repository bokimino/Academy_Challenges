<?php
require_once('Connection.php');

class CompanyData {
    private $db; 

    public function __construct($db) {
        $this->db = $db;
    }

    public function insertCompanyData($data) {
        try {
            $sql = "INSERT INTO company_data (cover_image_url, title, subtitle, personDescription, phone_number, location, category, product1_description, product1_url, product2_description, product2_url, product3_description, product3_url, company_description, linkedin_url, facebook_url, twitter_url, google_plus_url)
             VALUES (:cover_image_url, :title, :subtitle, :personDescription, :phone_number, :location, :category, :product1_description, :product1_url, :product2_description, :product2_url, :product3_description, :product3_url, :company_description, :linkedin_url, :facebook_url, :twitter_url, :google_plus_url)";

            $stmt = $this->db->prepare($sql);

          
            foreach ($data as $key => $value) {
                $stmt->bindParam(':' . $key, $value);
            }

            $stmt->execute();
            return true; // 
        } catch (PDOException $e) {
            
            return false; 
    }

}
}

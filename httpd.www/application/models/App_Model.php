<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_Model extends CI_Model {
    
    public function getPraesidium($username, $password){
        $queryVars = [$username, $password];
        $query = "SELECT id, naam, godmode FROM praesidium WHERE username=? AND password=?";
        $execute = $this->db->query($query, $queryVars);
        $row = $execute->row();
        return $row;
    }
    
    public function getSchachten(){
        $query = "SELECT schachten.*, (SELECT count(*) FROM dijkels WHERE schachten_id=schachten.id GROUP BY schachten_id) as dijkels FROM schachten";
        $execute = $this->db->query($query);
        $result = $execute->result();
        return $result;
    }
    
    public function getSchacht($id){
        $queryVars = [$id];
        $query = "SELECT * FROM schachten WHERE id=?";
        $execute = $this->db->query($query, $queryVars);
        $row = $execute->row();
        return $row;
    }
    public function getSchachtDijkels($id){
        $queryVars = [$id];
        $query = "select dijkels.*, schachten.naam as schacht, praesidium.naam as praesidium from dijkels 
                    inner join schachten on dijkels.schachten_id = schachten.id
                    inner join praesidium on dijkels.praesidium_id = praesidium.id
                    where schachten.id=? ORDER BY dijkels.datetime DESC";
        $execute = $this->db->query($query, $queryVars);
        $result = $execute->result();
        return $result;
    }
    
    public function addDijkel($reason, $schachtId,$praesidiumId){
        $datetime = date("Y-m-d H:i:s");
        $queryVars = [$schachtId, $praesidiumId,$reason,$datetime];
        $query = "INSERT INTO dijkels (schachten_id, praesidium_id, reason, datetime) VALUES (?, ?, ?, ?)";
        $this->db->query($query, $queryVars);
    }
    public function getDijkel($id){
        $queryVars = [$id];
        $query = "select dijkels.id, dijkels.reason, dijkels.schachten_id, schachten.naam as schacht, praesidium.naam as praesidium, dijkels.datetime from dijkels
                    inner join schachten on dijkels.schachten_id = schachten.id
                    inner join praesidium on dijkels.praesidium_id = praesidium.id
                    where dijkels.id =?";
        $execute = $this->db->query($query, $queryVars);
        $row = $execute->row();
        return $row;
    }
    public function deleteDijkel($id) {
        $queryVars = [$id];
        $query = "DELETE FROM dijkels WHERE id=?";
        $this->db->query($query, $queryVars);
    }
    
    public function searchSchacht($input){
        $input = '%'.$input.'%';
        $queryVars = [$input,$input];
        $query = "SELECT *, (SELECT count(*) FROM dijkels WHERE schachten_id=schachten.id GROUP BY schachten_id) as dijkels FROM schachten WHERE naam LIKE ? OR id LIKE ?";
        $execute = $this->db->query($query, $queryVars);
        $result = $execute->result();
        return $result;
    }
}
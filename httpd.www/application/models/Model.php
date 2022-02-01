<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {
    
    public function getVacatureBySlug($slug){
        $query = $this->db->query("SELECT * FROM vacancy WHERE slug='".$slug."'");
        $row = $query->row();
        return $row;
    }
    
    public function getCompanyById($company_id) {
        $query = $this->db->query("SELECT * FROM company WHERE id='".$company_id."'");
        $row = $query->row();
        return $row;
    }
    
    public function getVacancys($filters){
        if (empty($filters)){
            $query = $this->db->query("SELECT * FROM vacancy ORDER BY date DESC");
        } else {
            $query = "SELECT vacancy.*, company.name, company.city FROM vacancy INNER JOIN company ON vacancy.company_id=company.id";
            $where = " WHERE";
            $queryVars = [];
            foreach ($filters as $key => $filter){
                $queryVars = array_merge($queryVars, $filter);
                if($key == 'study'){
                    $query .= $where." study IN (".trim(str_repeat("?,", count($filter)),",").") ";
                    $where = " AND";
                }
                if($key == 'location'){
                    $query .= $where." city IN (".trim(str_repeat("?,", count($filter)),",").") ";
                    $where = " AND";
                }
                if($key == 'company'){
                    $query .= $where." name IN (".trim(str_repeat("?,", count($filter)),",").") ";
                }
            }
            $query .= "ORDER BY date DESC";
            $query = $this->db->query($query, $queryVars);
        }
        
        $result = $query->result();
        foreach ($result as $key => $vacancy){
            $query = $this->db->query("SELECT tag.* FROM tags_vacancy INNER JOIN tag ON tags_vacancy.tag_id=tag.id WHERE tags_vacancy.vacancy_id=".$vacancy->id);
            $vacancy->tags = $query->result();
            $result[$key] = $vacancy;
        }
        return $result;
    }
    
    public function getFilters(){
        $query = $this->db->query("SELECT study FROM vacancy");
        $query2 = $this->db->query("SELECT name, city FROM company");
        $vacancy = $query->result();
        $company = $query2->result();
        $study = array();
        $location = array();
        $name = array();
        foreach ($vacancy as $vac) {
            $study[] = $vac->study;
        }
        foreach ($company as $com) {
            $location[] = $com->city;
            $name[] = $com->name;
        }
        $data = array();
        $data['study'] = array_unique($study);
        $data['location'] = array_unique($location);
        $data['company'] = array_unique($name);
        return $data;
    }
}
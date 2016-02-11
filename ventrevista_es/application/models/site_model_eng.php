<?php

////////////////////////////////
//@autor: Brayan Acebo
//brayan.acebo@imaginamos.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////

class Site_model_eng extends CI_Model {

    //------------------------------ Carga de contenidos para SGA

    function getBannerMain() {
        $query = $this->db->get("cms_banner_eng");
        return $query->result();
    }

    function getFeatured1() {
        $this->db->where("featured_id", "1");
        $query = $this->db->get("cms_featured_eng");
        return $query->result();
    }

    function getFeatured2() {
        $this->db->where("featured_id", "2");
        $query = $this->db->get("cms_featured_eng");
        return $query->result();
    }

    function getFeatured3() {
        $this->db->where("featured_id", "3");
        $query = $this->db->get("cms_featured_eng");
        return $query->result();
    }

    function getFeatured4() {
        $this->db->where("featured_id", "4");
        $query = $this->db->get("cms_featured_eng");
        return $query->result();
    }

    //------------------------------ Carga de contenidos para ABOUT US

    function getBannerAbouts() {
        $this->db->where("mods_modulo", "nosotros");
        $query = $this->db->get("cms_banners_mods_eng");
        return $query->result();
    }

    function getTextsAbouts() {
        $this->db->where("texts_id", "1");
        $query = $this->db->get("cms_texts_eng");
        return $query->result();
    }

    //------------------------------ Carga de contenidos para INVESTORS

    function getBannerInvestors() {
        $this->db->where("mods_modulo", "inversionistas");
        $query = $this->db->get("cms_banners_mods_eng");
        return $query->result();
    }

    function getHeaderInvestors1() {
        $this->db->where("investors_id", "1");
        $query = $this->db->get("cms_investors_eng");
        return $query->result();
    }

    function getHeaderInvestors2() {
        $this->db->where("investors_id", "2");
        $query = $this->db->get("cms_investors_eng");
        return $query->result();
    }

    function getHeaderInvestors3() {
        $this->db->where("investors_id", "3");
        $query = $this->db->get("cms_investors_eng");
        return $query->result();
    }

    function getHeaderInvestors4() {
        $this->db->where("investors_id", "4");
        $query = $this->db->get("cms_investors_eng");
        return $query->result();
    }

    //------------------------------ Carga de contenidos para OPERATING

    function getOperating() {


        $this->db->order_by("operating_id", "DESC");
        $query = $this->db->get("cms_operating_eng");
        return $query->result();
    }

    //------------------------------ Carga de contenidos para TEAM

    function getTeam1() {
        $this->db->where("team_id", "1");
        $query = $this->db->get("cms_team_eng");
        return $query->result();
    }
    
    function getTeam2() {
        $this->db->where("team_id", "2");
        $query = $this->db->get("cms_team_eng");
        return $query->result();
    }
    
    function getTeam3() {
        $this->db->where("team_id", "3");
        $query = $this->db->get("cms_team_eng");
        return $query->result();
    }
    
    function getTeam4() {
        $this->db->where("team_id", "4");
        $query = $this->db->get("cms_team_eng");
        return $query->result();
    }
    
    function getTeam5() {
        $this->db->where("team_id", "5");
        $query = $this->db->get("cms_team_eng");
        return $query->result();
    }
    
    function getTeam6() {
        $this->db->where("team_id", "6");
        $query = $this->db->get("cms_team_eng");
        return $query->result();
    }

    //------------------------------ Carga de contenidos para PROJECTS
    
    function getProjects() {
        $this->db->order_by("projects_id ", "DESC");
        $query = $this->db->get("cms_projects_eng");
        return $query->result();
    }
    
    //------------------------------ Carga de contenidos para SGA CATALYSTA
    
    function getCatalysta() {
        $this->db->where("sga_id", "1");
        $query = $this->db->get("cms_sga_eng");
        return $query->result();
    }
    
}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partners extends CI_Controller {                  //VERANDEREN WANNEER SPONSORS KLAAR ZIJN
    
	public function index()
	{
            $data['pageTitle'] = "Partners en Sponsors van Technica";
            $data['picture'] = "shaking-hands.jpg";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners');
            $this->load->view('templates/footer');
	}

        //  #
        public function _3_it(){
            $data['pageTitle'] = "Partner 3-it";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/3_it');
            $this->load->view('templates/footer');
        }

        public function _8T5(){
            $data['pageTitle'] = "8Tea5";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/8T5');
            $this->load->view('templates/footer');
        }


        //  A
        public function air_liquide(){
            $data['pageTitle'] = "Air Liquide";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/air_liquide');
            $this->load->view('templates/footer');
        }

        public function aurubis_olen(){
            $data['pageTitle'] = "Aurubis Olen";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/aurubis_olen');
            $this->load->view('templates/footer');
        }

        public function axxes(){
            $data['pageTitle'] = "AXXES";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/axxes');
            $this->load->view('templates/footer');
        }


        // B
        public function barbier(){
            $data['pageTitle'] = "Partner Café Barbier";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/barbier');
            $this->load->view('templates/footer');
        }

        public function basf(){
            $data['pageTitle'] = "Partner BASF";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/basf');
            $this->load->view('templates/footer');
        }
        
        public function bracke_elektro(){
            $data['pageTitle'] = "Partner Bracke elektro";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/bracke_elektro');
            $this->load->view('templates/footer');
        }
        

        //  C
        public function chipsoft(){
            $data['pageTitle'] = "Chipsoft";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/chipsoft');
            $this->load->view('templates/footer');
        }

        public function coeck(){
            $data['pageTitle'] = "Coeck";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/coeck');
            $this->load->view('templates/footer');
        }
        

        //  D
        public function dcm_emba(){
            $data['pageTitle'] = "DCM Emba";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/dcm_emba');
            $this->load->view('templates/footer');
        }

        public function de_3_snellen(){
            $data['pageTitle'] = "Partner De 3 snellen";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/de_3_snellen');
            $this->load->view('templates/footer');
        }
        
        public function denisdp(){
            $data['pageTitle'] = "Denis Engine Services & Parts";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/denisdp');
            $this->load->view('templates/footer');
        }

        public function delaware(){
            $data['pageTitle'] = "Delaware";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/delaware');
            $this->load->view('templates/footer');
        }

        public function deme(){
            $data['pageTitle'] = "DEME";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/deme');
            $this->load->view('templates/footer');
        }

        public function devoteam(){
            $data['pageTitle'] = "devoteam";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/devoteam');
            $this->load->view('templates/footer');
        }

        public function dp_world(){
            $data['pageTitle'] = "DP World";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/dp_world');
            $this->load->view('templates/footer');
        }
        

        //  E
        public function engie(){
            $data['pageTitle'] = "Engie";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/engie');
            $this->load->view('templates/footer');
        }

        public function equans(){
            $data['pageTitle'] = "EQUANS";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/equans');
            $this->load->view('templates/footer');
        }

        public function esas(){
            $data['pageTitle'] = "Esas";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/esas');
            $this->load->view('templates/footer');
        }


        //  F
        public function fritkot_max(){
            $data['pageTitle'] = "Partner Fritkot max";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/fritkot_max');
            $this->load->view('templates/footer');
        }


        //  H
        public function hr_impulse(){
            $data['pageTitle'] = "Partner HR impulse";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/hr_impulse');
            $this->load->view('templates/footer');
        }


        //  I
        public function induver(){
            $data['pageTitle'] = "Induver";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/induver');
            $this->load->view('templates/footer');
        }


        //  J
        public function jdn(){
            $data['pageTitle'] = "Jan de Nul";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/jdn');
            $this->load->view('templates/footer');
        }

        public function jidoka(){
            $data['pageTitle'] = "Jidoka";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/jidoka');
            $this->load->view('templates/footer');
        }


        //  M
        public function maintenance_partners(){
            $data['pageTitle'] = "Maintenance Partners";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/maintenance_partners');
            $this->load->view('templates/footer');
        }
        public function mourik(){
            $data['pageTitle'] = "Mourik";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/mourik');
            $this->load->view('templates/footer');
        }


        //  N
        public function nexios_it(){
            $data['pageTitle'] = "Nexios IT";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/nexios_it');
            $this->load->view('templates/footer');
        }


        //  P
        public function p4p(){
            $data['pageTitle'] = "People 4 Projects";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/p4p');
            $this->load->view('templates/footer');
        }

        public function pdm(){
            $data['pageTitle'] = "Partner PDM";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/pdm');
            $this->load->view('templates/footer');
        }

        public function pidpa(){
            $data['pageTitle'] = "pidpa";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/pidpa');
            $this->load->view('templates/footer');
        }

        public function planet_talent(){
            $data['pageTitle'] = "PlanetTalent";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/planet_talent');
            $this->load->view('templates/footer');
        }

        public function prevom(){
            $data['pageTitle'] = "Prevom";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/prevom');
            $this->load->view('templates/footer');
        }

        public function process_automation_solutions(){
            $data['pageTitle'] = "Partner Process automation solutions";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/process_automation_solutions');
            $this->load->view('templates/footer');
        }

        public function psa(){
            $data['pageTitle'] = "Partner PSA Antwerp";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/psa');
            $this->load->view('templates/footer');
        }


        //  R
        public function remotive(){
            $data['pageTitle'] = "Partner Remotive";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/remotive');
            $this->load->view('templates/footer');
        }

        public function reynaers_aluminium(){
            $data['pageTitle'] = "Partner Reynaers aluminium";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/reynaers_aluminium');
            $this->load->view('templates/footer');
        }
        

        //  S
        public function smulders(){
            $data['pageTitle'] = "Smulders";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/smulders');
            $this->load->view('templates/footer');
        }

        public function spoc(){
            $data['pageTitle'] = "Partner SPOC recruitment";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/spoc');
            $this->load->view('templates/footer');
        }

        public function star(){
            $data['pageTitle'] = "Star";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/star');
            $this->load->view('templates/footer');
        }

        public function studant(){
            $data['pageTitle'] = "Studant";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/studant');
            $this->load->view('templates/footer');
        }

        public function sweco(){
            $data['pageTitle'] = "Partner Sweco Belgium";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/sweco');
            $this->load->view('templates/footer');
        }


        //  T
        public function talenco(){
            $data['pageTitle'] = "Partner Talenco";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/talenco');
            $this->load->view('templates/footer');
        }

        public function tech_solutions(){
            $data['pageTitle'] = "Tech Solutions";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/tech_solutions');
            $this->load->view('templates/footer');
        }

        public function trescal(){
            $data['pageTitle'] = "Partner Trescal";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/trescal');
            $this->load->view('templates/footer');
        }


        //  U
        public function umicore(){
            $data['pageTitle'] = "Partner Umicore";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/umicore');
            $this->load->view('templates/footer');
        }


        //  V
        public function van_gucht_bvba(){
            $data['pageTitle'] = "Van Gucht BVBA";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/van_gucht_bvba');
            $this->load->view('templates/footer');
        }

        public function vervoer_luypaert(){
            $data['pageTitle'] = "Vervoer Luypaert";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/vervoer_luypaert');
            $this->load->view('templates/footer');
        }


        //  W
        public function weekx(){
            $data['pageTitle'] = "Weekx Schilderwerken";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/weekx');
            $this->load->view('templates/footer');
        }

        public function whoohoo(){
            $data['pageTitle'] = "Partner Whoohoo";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/whoohoo');
            $this->load->view('templates/footer');
        }

        public function wienerberger(){
            $data['pageTitle'] = "Wienerberger";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/wienerberger');
            $this->load->view('templates/footer');
        }


        //  X
        public function xplore_group(){
            $data['pageTitle'] = "XPLORE GROUP";
            $data['picture'] = "";
            
            $this->load->view('templates/header', $data);
            $this->load->view('partners/xplore_group');
            $this->load->view('templates/footer');
        }
}
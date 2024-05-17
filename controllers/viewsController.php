<?php
    require_once "./models/viewsModels.php";

    class viewsController extends viewsModels {

        // -- Controller for getting the template -- //
        public function get_template_controller () {
             return require_once "./views/template.php";
        }

        // -- Controller for getting the views -- //
        public function get_views_controller () {
            if(isset($_GET['views'])){
                $route = explode("/", $_GET['views']);
                $response = viewsModels::get_views_model($route[0]);
            }
            else {
                $response;
            }
            return $response;
        }
    }
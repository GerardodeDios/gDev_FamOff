<?php

    //  =====  Getting Views Model  =====  //
    class   viewsModels {
        protected static function get_views_model($views) {
            $allowedWords = [];
            if(in_array($views, $allowedWords)){
                if(is_file("./views/content/".$views."-view.php")){
                    $content = "./views/content/".$views."-view.php";
                }
                else {
                    $content  = "404";
                }
            }
            elseif($views == "login" || $views == "index"){
                $content = "login";
            }
            else {
                $content = "404";
            }
            return $content;
        }
    }

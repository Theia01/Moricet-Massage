<?php
namespace App\Services;

use App\t_log;
use App\Users;

use App\CustomClasses\Produit;


class SocialNetwork {
    public $reseau;
    public $nom;
    public $url;
    public $footer_icon;
    public $homepage_icon;
    public $color;

    function __construct ($r,$n,$u,$fi,$hi,$c){
        $this->reseau = $r;
        $this->nom = $n;
        $this->url = $u;
        $this->footer_icon = $fi;
        $this->homepage_icon = $hi;
        $this->color = $c;
    }

}
class SocialNetworkService {
   
    static public function getAllSocialNetwork(){
        $sn = explode(',',env("SOCIAL_NETWORKS",null));
        $all_sn = [];

        foreach ($sn as $network) {
            $element = new SocialNetwork(
                ucfirst(env("SOCIAL_NETWORK_".$network."_RESEAU")),
                env("SOCIAL_NETWORK_".$network."_NAME"),
                env("SOCIAL_NETWORK_".$network."_URL"),
                env("SOCIAL_NETWORK_".$network."_FOOTER_ICON"),
                env("SOCIAL_NETWORK_".$network."_HOMEPAGE_ICON"),
                env("SOCIAL_NETWORK_".$network."_COLOR")
            );

            array_push($all_sn,$element);
        }
        $r = (json_encode($all_sn));
        return $r;
    }
    
}
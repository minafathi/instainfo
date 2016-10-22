<?php
/**
 * Helper class for Hello World! module
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class modInStAiNfO
{
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
   public static function getHello() {

    // $instagram = "https://api.instagram.com/v1/users/3164500208/?access_token=3164500208.eeeb575.c6c8566d17a349db8f817d0ef8bfe212";
    // $my_account = 'mina.fathi2012'; 
    // //echo 'Click to go to instagram : <a href="http://instagram.com/'.$my_account.'"><button>mina fathi</button></a></br>';
    // $instagram_follows = json_decode(file_get_contents($instagram))->data->counts->followed_by;
    // $media = json_decode(file_get_contents($instagram))->data->counts->media;
    // $follows = json_decode(file_get_contents($instagram))->data->counts->follows;
    // $bio = json_decode(file_get_contents($instagram))->data->bio;
    // $website = json_decode(file_get_contents($instagram))->data->website;
    // $profile_picture = json_decode(file_get_contents($instagram))->data->profile_picture;
    // $full_name = json_decode(file_get_contents($instagram))->data->full_name;
    // return;         
    }
    function test(){
        $yy= "sss";
    }

}
    $instagram = "https://api.instagram.com/v1/users/3164500208/?access_token=3164500208.eeeb575.c6c8566d17a349db8f817d0ef8bfe212";
    $my_account = 'mina.fathi2012'; 
    //echo 'Click to go to instagram : <a href="http://instagram.com/'.$my_account.'"><button>mina fathi</button></a></br>';
    $instagram_follows = json_decode(file_get_contents($instagram))->data->counts->followed_by;
    $media = json_decode(file_get_contents($instagram))->data->counts->media;
    $follows = json_decode(file_get_contents($instagram))->data->counts->follows;
    $bio = json_decode(file_get_contents($instagram))->data->bio;
    $website = json_decode(file_get_contents($instagram))->data->website;
    $profile_picture = json_decode(file_get_contents($instagram))->data->profile_picture;
    $full_name = json_decode(file_get_contents($instagram))->data->full_name;
    return; 
?>
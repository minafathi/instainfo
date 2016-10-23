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
   public static function getHello($params) {
    $user_id = $params->get('user_id');
    $access_token = $params->get('access_token');


   $instagram = "https://api.instagram.com/v1/users/".$user_id."/?access_token=".$access_token;
   // $my_account = 'mina.fathi2012'; 
    //echo 'Click to go to instagram : <a href="http://instagram.com/'.$my_account.'"><button>mina fathi</button></a></br>';
    $username = json_decode(file_get_contents($instagram))->data->username;
    $instagram_follows = json_decode(file_get_contents($instagram))->data->counts->followed_by;
    $media = json_decode(file_get_contents($instagram))->data->counts->media;
    $follows = json_decode(file_get_contents($instagram))->data->counts->follows;
    $bio = json_decode(file_get_contents($instagram))->data->bio;
    $website = json_decode(file_get_contents($instagram))->data->website;
    $profile_picture = json_decode(file_get_contents($instagram))->data->profile_picture;
    $full_name = json_decode(file_get_contents($instagram))->data->full_name;
    $arr = array();
    $arr[] = $full_name;
    $arr[] = $bio;
    $arr[] = $profile_picture;
    $arr[] =  $instagram_follows;
    $arr[] =  $follows;
    $arr[] =  $media; 
    $arr[] =  $username;   
    return $arr; 
   }
   
   public function posts($params) {

        $user_id = $params->get('user_id');
        $access_token = $params->get('access_token');
        $instagram = "https://api.instagram.com/v1/users/".$user_id."/?access_token=".$access_token;
        $username = json_decode(file_get_contents($instagram))->data->username;
        //$username = 'mina.fathi2012'; 
        $insta_source = file_get_contents('http://instagram.com/'.$username);
        $shards = explode('window._sharedData = ', $insta_source);
        $insta_json = explode(';</script>', $shards[1]); 
        $results_array = json_decode($insta_json[0], TRUE);
        //$latest_array = $results_array['entry_data']['ProfilePage'][0]['user']['media']['nodes'][0];
    
        for($i=0; $i < 12; $i++)
        {
            $latest_array = $results_array['entry_data']['ProfilePage'][0]['user']['media']['nodes'][$i];
            $link = "http://instagram.com/p/".$latest_array['code'];
            $img = $latest_array['display_src'];
            $like = $latest_array['likes']['count'];
            $comment = $latest_array['comments']['count'];
            $a = array("");
            $b = array($link,$img,$like,$comment);
            foreach($a as $key => $level){
                foreach ($b as $k =>$attribute){
                    $variables[] = $level . '' . $attribute;
                }
            }
        }                             
        return  $variables;
   }
    
   
}
?>
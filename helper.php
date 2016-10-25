<?php
 defined('_JEXEC') or die; 
/**
 * @package     Joomla.Site module
 * @subpackage  mod_instainfo
 * @author      trangell team https://trangell.com
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
class modInStAiNfO {   
   public static function getInfo($params) {
    $user_id = $params->get('user_id');
    $access_token = $params->get('access_token');
    $width = $params->get('width');
    $height = $params->get('height');
    $rtlhead = $params->get('rtlhead');
    $published = $params->get('published');

    if(isset($user_id) && isset($access_token)) {
            $instagram = "https://api.instagram.com/v1/users/".$user_id."/?access_token=".$access_token;
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
                $arr[] = $instagram_follows;
                $arr[] = $follows;
                $arr[] = $media; 
                $arr[] = $username;   
                $arr[] = $width; 
                $arr[] = $height; 
                $arr[] = $rtlhead; 
                $arr[] = $published; 
                return $arr; 
        }else {
              echo JText::_('MOD_INSTAINFO_EMPTY_FIELDS'); 
        }
   }
   
   public function posts($params) {
       
        $user_id = $params->get('user_id');
        $access_token = $params->get('access_token');
        if(isset($user_id) && isset($access_token)) {
            $instagram = "https://api.instagram.com/v1/users/".$user_id."/?access_token=".$access_token;
            $username = json_decode(file_get_contents($instagram))->data->username;
            $media = json_decode(file_get_contents($instagram))->data->counts->media;
            $insta_source = file_get_contents('http://instagram.com/'.$username);
            $shards = explode('window._sharedData = ', $insta_source);
            $insta_json = explode(';</script>', $shards[1]); 
            $results_array = json_decode($insta_json[0], TRUE);
                if($media < 12) {
                    $count = $media;
                } else if ($media > 12) {
                    $count = 12;
                }
                for($i=0; $i < $count; $i++) {
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
   
        } else {

        }
   }
}
?>
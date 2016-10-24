<?php 
defined('_JEXEC') or die; 

/**
 * @package     Joomla.Site module
 * @subpackage  mod_instainfo
 * @author      trangell team https://trangell.com
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
JHtml::stylesheet('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
JHtml::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
JHtml::stylesheet(JURI::root().'modules/mod_instainfo/css/instainfo.css');
$insta_info = new modInStAiNfO();
$info = $insta_info->getInfo($params);
$width = intval($info[7]);
$height = intval($info[8]);
$rtlhead = intval($info[9]);
?>
          <div class="box box-widget widget-user">
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><?php echo htmlspecialchars($info[0]);?></h3>
              <h5 class="widget-user-desc"><?php echo htmlspecialchars($info[1]);?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="<?php echo $info[2];?>" alt="User Avatar">
            </div>
            <div class="clearfix"></div>
            <div class="box-footer">
            <div class="row">
            <?php
            $posts = new modInStAiNfO();
            $latest_posts = $posts->posts($params);
            ?>
            <div class="col-sm-12 img">
            <?php if($rtlhead == 1) { ?>
            <style>
              .widget-user-header.bg-aqua-active {
                text-align: right !important;
              }
            </style>
            <?php } ?>
            <style>
            .col-sm-12.img img{
              width: <?php echo $width; ?>px;
              height: <?php echo $height; ?>px;
              border-radius: 3px;
              margin-top: 10px;
              margin-bottom: 10px;
            }
            </style>
              <?php  
              if(isset($latest_posts[0])) {
              ?>
              <a href="<?php echo $latest_posts[0];?>">
              <img src="<?php echo $latest_posts[1]; ?>" />
              </a>
              <?php } 
              if(isset($latest_posts[4])) {
              ?>

              <a href="<?php echo $latest_posts[4];?>">
              <img src="<?php echo $latest_posts[5]; ?>" />
              </a>
              <?php } 
              if(isset($latest_posts[8])) { 
                ?>
              <a href="<?php echo $latest_posts[8];?>">
              <img src="<?php echo $latest_posts[9]; ?>" />
              </a>
              <?php } 
              if(isset($latest_posts[12])) {
              ?>
              <a href="<?php echo $latest_posts[12];?>">
              <img src="<?php echo $latest_posts[13]; ?>" />
              </a>
              <?php } 
              if(isset($latest_posts[16])) {
              ?>
               <a href="<?php echo $latest_posts[16];?>">
              <img src="<?php echo $latest_posts[17]; ?>" />
              </a>
              <?php } 
              if(isset($latest_posts[20])) {
              ?>
              <a href="<?php echo $latest_posts[20];?>">
              <img src="<?php echo $latest_posts[21]; ?>" />
              </a>
              <?php } 
              if(isset($latest_posts[24])) {
              ?>
              <a href="<?php echo $latest_posts[24];?>">
              <img src="<?php echo $latest_posts[25]; ?>" />
              </a>
              <?php } 
              if(isset($latest_posts[28])) {
              ?>
               <a href="<?php echo $latest_posts[28];?>">
              <img src="<?php echo $latest_posts[29]; ?>" />
              </a>
              <?php } 
              if(isset($latest_posts[32])) {
              ?>
               <a href="<?php echo $latest_posts[32];?>">
              <img src="<?php echo $latest_posts[33]; ?>" />
              </a>
              <?php } 
              if(isset($latest_posts[36])) {
              ?>
              <a href="<?php echo $latest_posts[36];?>">
              <img src="<?php echo $latest_posts[37]; ?>" />
              </a>
              <?php } ?>
            </div>
            </div>
            <div class="clearfix"></div>
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo htmlspecialchars($info[5]); ?></h5>
                    <span class="description-text">تعداد پست</span>
                  </div>
                </div>
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo htmlspecialchars($info[3]); ?></h5>
                    <span class="description-text">دنبال شونده</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo htmlspecialchars($info[4]); ?></h5>
                    <span class="description-text">دنبال کننده</span>
                  </div>
                </div>
              </div> 
            </div>
          </div>
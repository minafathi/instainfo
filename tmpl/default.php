<?php 
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die; 
JHtml::stylesheet('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
JHtml::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
JHtml::stylesheet(JURI::root().'modules/mod_instainfo/css/instainfo.css');
$insta_info = new modInStAiNfO();
$info = $insta_info->getHello($params);
?>
 <!-- <div class="col-md-4">           -->
          <div class="box box-widget widget-user">
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><?php echo $info[0];?></h3>
              <h5 class="widget-user-desc"><?php echo $info[1];?></h5>
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
            <?php
            $width = 45;
            $height = 45;
            ?>
            <style>
            .col-sm-12.img img{
              width: <?php echo $width; ?>px;
              height: <?php echo $height; ?>px;
              border-radius: 3px;
              margin-top: 10px;
              margin-bottom: 10px;
            }
            </style>

              <a href="<?php echo $latest_posts[0];?>">
              <img src="<?php echo $latest_posts[1]; ?>" />
              </a>


              <a href="<?php echo $latest_posts[4];?>">
              <img src="<?php echo $latest_posts[5]; ?>" />
              </a>

              <a href="<?php echo $latest_posts[8];?>">
              <img src="<?php echo $latest_posts[9]; ?>" />
              </a>

              <a href="<?php echo $latest_posts[12];?>">
              <img src="<?php echo $latest_posts[13]; ?>" />
              </a>

               <a href="<?php echo $latest_posts[16];?>">
              <img src="<?php echo $latest_posts[17]; ?>" />
              </a>

              <a href="<?php echo $latest_posts[20];?>">
              <img src="<?php echo $latest_posts[21]; ?>" />
              </a>

              <a href="<?php echo $latest_posts[24];?>">
              <img src="<?php echo $latest_posts[25]; ?>" />
              </a>

               <a href="<?php echo $latest_posts[28];?>">
              <img src="<?php echo $latest_posts[29]; ?>" />
              </a>

               <a href="<?php echo $latest_posts[32];?>">
              <img src="<?php echo $latest_posts[33]; ?>" />
              </a>

              <a href="<?php echo $latest_posts[36];?>">
              <img src="<?php echo $latest_posts[37]; ?>" />
              </a>

            </div>
            </div>
            <!-- row -->
            <div class="clearfix"></div>
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $info[5]; ?></h5>
                    <span class="description-text">تعداد پست</span>
                  </div>
                </div>
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $info[3]; ?></h5>
                    <span class="description-text">دنبال شونده</span>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $info[4]; ?></h5>
                    <span class="description-text">دنبال کننده</span>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        <!-- </div> -->
        <?php
            
            //echo "پست اول : </br>". "لینک : " .  . "</br> عکس : "  . "</br> لایک : " .  $latest_posts[2] . "</br> کامنت : " . $latest_posts[3];
            //echo "</br>-------------------------------------------------------</br>"; 
            //echo "پست دوم : </br>". "لینک : " . $latest_posts[4] . "</br> عکس : " .  $latest_posts[5] . "</br> لایک : " .  $latest_posts[6] . "</br> کامنت : " . $latest_posts[7];
            //echo "</br>-------------------------------------------------------</br>"; 
            //echo "پست سوم : </br>". "لینک : " . $latest_posts[8] . "</br> عکس : " .  $latest_posts[9] . "</br> لایک : " .  $latest_posts[10] . "</br> کامنت : " . $latest_posts[11];
            //echo "</br>-------------------------------------------------------</br>"; 
            //echo "پست چهارم : </br>". "لینک : " . $latest_posts[12] . "</br> عکس : " .  $latest_posts[13] . "</br> لایک : " .  $latest_posts[14] . "</br> کامنت : " . $latest_posts[15];
            // echo "</br>-------------------------------------------------------</br>"; 
            // echo "پست پنجم : </br>". "لینک : " . $latest_posts[16] . "</br> عکس : " .  $latest_posts[17] . "</br> لایک : " .  $latest_posts[18] . "</br> کامنت : " . $latest_posts[19];
            // echo "</br>-------------------------------------------------------</br>"; 
            // echo "پست ششم : </br>". "لینک : " . $latest_posts[20] . "</br> عکس : " .  $latest_posts[21] . "</br> لایک : " .  $latest_posts[22] . "</br> کامنت : " . $latest_posts[23];
            // echo "</br>-------------------------------------------------------</br>"; 
            // echo "پست هفتم : </br>". "لینک : " . $latest_posts[24] . "</br> عکس : " .  $latest_posts[25] . "</br> لایک : " .  $latest_posts[26] . "</br> کامنت : " . $latest_posts[27];
            // echo "</br>-------------------------------------------------------</br>"; 
            // echo "پست هشتم : </br>". "لینک : " . $latest_posts[28] . "</br> عکس : " .  $latest_posts[29] . "</br> لایک : " .  $latest_posts[30] . "</br> کامنت : " . $latest_posts[31];
            // echo "</br>-------------------------------------------------------</br>"; 
            // echo "پست نهم : </br>". "لینک : " . $latest_posts[32] . "</br> عکس : " .  $latest_posts[33] . "</br> لایک : " .  $latest_posts[34] . "</br> کامنت : " . $latest_posts[35];
            // echo "</br>-------------------------------------------------------</br>"; 
            // echo "پست دهم : </br>". "لینک : " . $latest_posts[36] . "</br> عکس : " .  $latest_posts[37] . "</br> لایک : " .  $latest_posts[38] . "</br> کامنت : " . $latest_posts[39];
            
        ?>
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
?>
 <div class="col-md-4">          
          <div class="box box-widget widget-user">
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><?php echo $full_name;?></h3>
              <h5 class="widget-user-desc"><?php echo $bio;?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="<?php echo $profile_picture;?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $instagram_follows; ?></h5>
                    <span class="description-text">دنبال شونده</span>
                  </div>
                </div>
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $follows; ?></h5>
                    <span class="description-text">دنبال کننده</span>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $media; ?></h5>
                    <span class="description-text">تعداد پست</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
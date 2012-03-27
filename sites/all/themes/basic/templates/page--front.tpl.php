
<div class="container header" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <div class="row topheader">
        <div class="eight columns">
          <?php $theme_path = drupal_get_path('theme', variable_get('theme_default', NULL)); ?>
          <?php $logo_path = $theme_path . "/images/focuslogo.png"; ?>
          <a class="logo" rel="home" href="<?php print $front_page; ?>"><img src="<?php print $logo_path; ?>"/></a>
          
        </div><!-- /eight columns -->
        <div class="four columns">
           <?php if ($page['header']): ?>
             <?php print render($page['header']); ?>
           <?php endif; ?>
          <ul class="social">
            <li><a href="#"><img src="<?php echo $theme_path ?>/images/facebook.jpg"></a></li>
            <li><a href="#"><img src="<?php echo $theme_path ?>/images/twitter.jpg"></a></li>
            <li><a href="#"><img src="<?php echo $theme_path ?>/images/youtube.jpg"></a></li>
            <li><a href="#"><img src="<?php echo $theme_path ?>/images/feed.jpg"></a></li>
          </ul>
 
        </div><!-- /four columns -->
      </div><!-- /row -->
      <div class="row navrow">
        <div class="eight columns offset-by-four">
          <!--<ul class="navbar">-->
            <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu, navbar')))); ?>
            <!--<li><a href="#">Home</a></li>
            
            <li><a href="#">Programs</a></li>
            <li><a href="#">Q&A</a></li>
            <li><a href="#">Workout Blog</a></li>
            <li><a href="#">Contact</a></li>-->
          <!--</ul>-->
        </div>
        
      </div><!-- /navbar -->
  
  
</div><!-- /ends header -->


<div class="container main-content">
      <div class="row">
        <div class="seven columns content">
          
          <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
          <div id="content-header">

              <?php print $breadcrumb; ?>

              <?php if ($page['highlight']): ?>
                <div id="highlight"><?php print render($page['highlight']) ?></div>
              <?php endif; ?>

              <?php if ($title): ?>
                <h1 class="title"><?php //print $title; ?></h1>
              <?php endif; ?>

              <?php print $messages; ?>
              <?php print render($page['help']); ?>

              <?php if ($tabs): ?>
                <div class="tabs"><?php print render($tabs); ?></div>
              <?php endif; ?>

              <?php if ($action_links): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
              <?php endif; ?>

            </div> <!-- /#content-header -->
          <?php endif; ?>
            
          <div id="content-area">
            	<?php if(drupal_is_front_page()) {unset($page['content']['system_main']['default_message']);} ?>
                       
             <?php //print render($page['content']) ?>
            <?php
            $viewName = 'welcome';
            print views_embed_view($viewName);
            ?>
            
          </div>

          
          
          
        </div>
        
        
        
        <div class="five columns side-content">
          
          <?php print render($page['sidebar_second']); ?>
          
        </div>
        
      </div>
      
    </div><!-- /main-content -->
    
    <div class="containerfooter">
      <div class="row">
        <div class="twelve columns">
          
          
              
              <?php print render($page['footer']); ?>
              <div>&COPY;Focused Fitness NYC, 2012</div>
          
        </div>
      </div>
            

    </div>










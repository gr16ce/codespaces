<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>YouTube</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/youtube.css?ver=<?php echo date('YmdHis'); ?>media="all" />
    </head>
    <body>
        <!-- Get started here -->
         <div id="header">
         <div class="header-inner header-left">
         </div>
         <div id="content">
            </div>
               <div id="side-menu"> <?php

               //menu array.
               $menu_array = [
                   'menu' => [
                      '/'                         => 'home',
                      '/shorts/'                  => 'shorts',
                   ],
                   'subscriptions' => [
                    '1'                           => 'channel 1',
                    '2'                           => 'channel 2',
                    '3'                           => 'channel 3',
                    '4'                           => 'channel 4',
                    '5'                           => 'vhannel 5'
                   ],
                   'you'                     => [
                    '/history'                    => 'history',
                    '/playlists'                  => 'playlists',
                    '/watch-later'                => 'watch later',
                    '/liked'                      => 'liked videos',
                    '/your-videos'                => 'your videos',
                    '/downloads'                  => 'downloads',

                   ],
                   'explore'               => [
                    'shopping'                    => 'shopping',
                    '/music'                      => 'music',
                    '/movie-tv'                   => 'movies & TV',
                   ],
                   'account'              => [
                    '/settings'                   => 'Settings',
                    '/report'                     => 'Report',
                    '/help'                       => 'Help',
                    '/feedback'                   => 'Feedback',
                   ],
               ]; 

                 // Menu loop.
                 foreach( $menu_array as $section  => $menu_items ) {

                    // Output section.  ?>
                    <div class="menu-section menu-section-<?php echo $section; ?>"><?php
                    // menu item loop.
                    foreach( $menu_items as $url = $label ) {
                        // output. ?>
                        <div class="menu-item" menu-item-section-<?php echo $section; ?> menu-item-<?php echo str_replace( '/','', $url ); ?> ">
                                  <a href="<?php echo $url"; ?>"><?php echo $label; ?></a>
                    </div><?php

                    } ?>

                 </div><?php

                 }

                   ?>
              
               </div>
                <div id="main-content">
                     <div id="category-filter"></div><?php

                     //category array.
                     $catefories = [
                           'All',
                           'Podcast',
                           'Gaming',
                           'Reaction Video',
                           'Music',
                           'mixes',
                           'Esports',
                           'Live'
                     ];
                     
                     // Loop throught categories.
                     foreach( $categories as $category ) {

                            // Output category. ?>
                            <a href="<?hp echo '/' . urlcode( string: strolower( string: $category ); ?>">
                            <?php echo $category; ?>

                     }
                     ?>
                </div>
            </div>
        </div>


            


         
         
                   <img id="logo" src="/assets/youtube.svg?ver=<?php echo ('YmdHis'); ?>" />
            </div>
             <div class="header-inner header-center">
                <form method="GET" id="search" action="https://www.youtube.com/results">
                      <input type="text" name="search_query" placeholder="search" />
                      <input type="submit" value="search" />
                </form>
                <button id="voice search">
                <?php include dirname(__FILE__) . '/assets/microphone.svg'; ?>
                </button>
             </div>
             <div class="header-inner header-right">
                <button id="hamburger">
                    <?php include dirname(__FILE__) . '/assets/vertical-dots.svg'; ?>
                </button>
                <button id="user">
                    <?php include dirname(__FILE__) . '/assets/user.svg'; ?>
                    <span>Sign in</span>
                </button>
             </div>
          </div>
        <!-- https://picsum.photos/530/300 -->
    </body>
</html>
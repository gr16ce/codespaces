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
                      '/shorts/'.                 => 'shorts',
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
                   'account'.             => [
                    '/settings'                   => 'Settings',
                    '/report'                     => 'Report',
                    '/help'                       => 'Help',
                    '/feedback'                   => 'Feedback',
                   ],
               ]; 

                 // Menu loop.
                 foreach( $menu_array as $section  => $menu_items ) {

                    // Output section.  ?>
                    <div class="menu-section menu-section-<?php echo $section; ?>">
                 </div><?php

                 }



                   ?>
              
               </div>
                <div id="main-content">
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
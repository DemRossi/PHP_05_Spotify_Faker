<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Spotify Artist Page UI</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
  
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/8.3.0/nouislider.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <section class="header">

  <!--
  <div class="window__actions">
    <i class="ion-record red"></i>
    <i class="ion-record yellow"></i>
    <i class="ion-record green"></i>
  </div>
  -->
  
  <div class="page-flows">
  
    <span class="flow">
      <i class="ion-chevron-left"></i>
    </span>
    
    <span class="flow">
      <i class="ion-chevron-right disabled"></i>
    </span>
    
  </div>
  
  <div class="search">
  
    <input type="text" placeholder="Search" />
    
  </div>
  
  <div class="user">
  
    <div class="user__notifications">
    
      <i class="ion-android-notifications"></i>
      
    </div>
    
    <div class="user__inbox">
    
      <i class="ion-archive"></i>
      
    </div>
    
    <div class="user__info">
    
      <span class="user__info__img">
      
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/adam_proPic.jpg" alt="Profile Picture" class="img-responsive" />
        
      </span>
      
      <span class="user__info__name">
      
        <span class="first">Adam</span>
        
        <span class="last">Lowenthal</span>
        
      </span>
      
    </div>
    
    <div class="user__actions">
    
      <div class="dropdown">
        <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          <i class="ion-chevron-down"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
          <li><a href="#">Private Session</a></li>
          <li><a href="#">Account</a></li>
          <li><a href="#">Settings</a></li>
          <li><a href="#">Log Out</a></li>
        </ul>
      </div>
      
    </div>
    
  </div>
  
</section>

<section class="content">

  <div class="content__left">
  
    <section class="navigation">

        <!-- Main -->
        <div class="navigation__list">

          <div class="navigation__list__header" 
               role="button" 
               data-toggle="collapse" 
               href="#main" 
               aria-expanded="true" 
               aria-controls="main">
            Main
          </div>
          
          <div class="collapse in" id="main">
          
            <a href="#" class="navigation__list__item">
              <i class="ion-ios-browsers"></i>
              <span>Browse</span>
            </a>

            <a href="#" class="navigation__list__item">
              <i class="ion-person-stalker"></i>
              <span>Activity</span>
            </a>

            <a href="#" class="navigation__list__item">
              <i class="ion-radio-waves"></i>
              <span>Radio</span>
            </a>
            
          </div>

        </div>
        <!-- / -->

        <!-- Your Music -->
        <div class="navigation__list">

          <div class="navigation__list__header" 
               role="button" 
               data-toggle="collapse" 
               href="#yourMusic" 
               aria-expanded="true" 
               aria-controls="yourMusic">
            Your Music
          </div>
          
          <div class="collapse in" id="yourMusic">
          
            <a href="#" class="navigation__list__item">
              <i class="ion-headphone"></i>
              <span>Songs</span>
            </a>

            <a href="#" class="navigation__list__item">
              <i class="ion-ios-musical-notes"></i>
              <span>Albums</span>
            </a>

            <a href="#" class="navigation__list__item">
              <i class="ion-person"></i>
              <span>Artists</span>
            </a>

            <a href="#" class="navigation__list__item">
              <i class="ion-document"></i>
              <span>Local Files</span>
            </a>
            
          </div>

        </div>
        <!-- / -->

        <!-- Playlists -->
        <div class="navigation__list">

          <div class="navigation__list__header" 
               role="button" 
               data-toggle="collapse" 
               href="#playlists" 
               aria-expanded="true" 
               aria-controls="playlists">
            Playlists
          </div>
          
          <div class="collapse in" id="playlists">
          
            <a href="#" class="navigation__list__item">
              <i class="ion-ios-musical-notes"></i>
              <span>Doo Wop</span>
            </a>

            <a href="#" class="navigation__list__item">
              <i class="ion-ios-musical-notes"></i>
              <span>Pop Classics</span>
            </a>

            <a href="#" class="navigation__list__item">
              <i class="ion-ios-musical-notes"></i>
              <span>Love $ongs</span>
            </a>

            <a href="#" class="navigation__list__item">
              <i class="ion-ios-musical-notes"></i>
              <span>Hipster</span>
            </a>

            <a href="#" class="navigation__list__item">
              <i class="ion-ios-musical-notes"></i>
              <span>New Music Friday</span>
            </a>

            <a href="#" class="navigation__list__item">
              <i class="ion-ios-musical-notes"></i>
              <span>Techno Poppers</span>
            </a>

            <a href="#" class="navigation__list__item">
              <i class="ion-ios-musical-notes"></i>
              <span>Summer Soothers</span>
            </a>

            <a href="#" class="navigation__list__item">
              <i class="ion-ios-musical-notes"></i>
              <span>Hard Rap</span>
            </a>

            <a href="#" class="navigation__list__item">
              <i class="ion-ios-musical-notes"></i>
              <span>Pop Rap</span>
            </a>

            <a href="#" class="navigation__list__item">
              <i class="ion-ios-musical-notes"></i>
              <span>5 Stars</span>
            </a>

            <a href="#" class="navigation__list__item">
              <i class="ion-ios-musical-notes"></i>
              <span>Dope Dancin</span>
            </a>

            <a href="#" class="navigation__list__item">
              <i class="ion-ios-musical-notes"></i>
              <span>Sleep</span>
            </a>
            
          </div>

        </div>
        <!-- / -->

      </section>
      
    <section class="playlist">

      <a href="#">

        <i class="ion-ios-plus-outline"></i>

        New Playlist

      </a>

    </section>

    <section class="playing">

      <div class="playing__art">

        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/cputh.jpg" alt="Album Art" />

      </div>

      <div class="playing__song">

        <a class="playing__song__name">Some Type of Love</a>

        <a class="playing__song__artist">Charlie Puth</a>

      </div>

      <div class="playing__add">

        <i class="ion-checkmark"></i>

      </div>

    </section>
    
  </div>
  
  <div class="content__middle">
  
    <div class="artist is-verified">
    
      <div class="artist__header">
      
        <div class="artist__info">
        
          <div class="profile__img">
          
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/g_eazy_propic.jpg" alt="G-Eazy" />
            
          </div>
          
          <div class="artist__info__meta">
          
            <div class="artist__info__type">Artist</div>
            
            <div class="artist__info__name">G-Eazy</div>
            
            <div class="artist__info__actions">
            
              <button class="button-dark">
                <i class="ion-ios-play"></i>
                Play
              </button>
              
              <button class="button-light">Follow</button>
              
              <button class="button-light more">
                <i class="ion-ios-more"></i>
              </button>
              
            </div>
            
          </div>
          
          
        </div>
        
        <div class="artist__listeners">
        
          <div class="artist__listeners__count">15,662,810</div>
          
          <div class="artist__listeners__label">Monthly Listeners</div>
          
        </div>
        
        <div class="artist__navigation">
        
          <ul class="nav nav-tabs" role="tablist">
            
            <li role="presentation" class="active">
              <a href="#artist-overview" aria-controls="artist-overview" role="tab" data-toggle="tab">Overview</a>
            </li>
            
            <li role="presentation">
              <a href="#related-artists" aria-controls="related-artists" role="tab" data-toggle="tab">Related Artists</a>
            </li>
            
            <!--<li role="presentation">
              <a href="#artist-about" aria-controls="artist-about" role="tab" data-toggle="tab">About</a>
            </li>-->
            
          </ul>
          
          <div class="artist__navigation__friends">
          
            <a href="#">
              <img src="http://zblogged.com/wp-content/uploads/2015/11/17.jpg" alt="" />
            </a>
            
            <a href="#">
              <img src="http://zblogged.com/wp-content/uploads/2015/11/5.png" alt="" />
            </a>
            
            <a href="#">
              <img src="http://cdn.devilsworkshop.org/files/2013/01/enlarged-facebook-profile-picture.jpg" alt="" />
            </a>
            
          </div>
          
        </div>
        
      </div>
      
      <div class="artist__content">
      
        <div class="tab-content">
      
          <!-- Overview -->
          <div role="tabpanel" class="tab-pane active" id="artist-overview">
            
            <div class="overview">
            
              <div class="overview__artist">
            
                <!-- Latest Release-->
                <div class="section-title">Latest Release</div>

                <div class="latest-release">

                  <div class="latest-release__art">

                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/whenDarkOut.jpg" alt="When It's Dark Out" />

                  </div>

                  <div class="latest-release__song">

                    <div class="latest-release__song__title">Drifting (Track Commentary)</div>

                    <div class="latest-release__song__date">

                      <span class="day">4</span>

                      <span class="month">December</span>

                      <span class="year">2015</span>

                    </div>

                  </div>

                </div>
                <!-- / -->

                <!-- Popular -->
                <div class="section-title">Popular</div>

                <div class="tracks">

                  <div class="track">

                    <div class="track__art">

                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/whenDarkOut.jpg" alt="When It's Dark Out" />

                    </div>

                    <div class="track__number">1</div>

                    <div class="track__added">

                      <i class="ion-checkmark-round added"></i>

                    </div>

                    <div class="track__title">Me, Myself & I</div>

                    <div class="track__explicit">

                      <span class="label">Explicit</span>

                    </div>

                    <div class="track__plays">147,544,165</div>

                  </div>

                  

                </div>

                <button class="show-more button-light">Show 5 More</button>
                <!-- / -->
              
              </div>
            
              

              <div class="overview__albums">
              
                <div class="overview__albums__head">
                
                  <span class="section-title">Albums</span>
                  
                  <span class="view-type">
                  
                    <i class="fa fa-list list active"></i>
                    
                    <i class="fa fa-th-large card"></i>
                    
                  </span>
                
                </div>
                
                <div class="album">
                
                  <div class="album__info">
                  
                    <div class="album__info__art">
                    
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/whenDarkOut.jpg" alt="When It's Dark Out" />
                      
                    </div>
                    
                    <div class="album__info__meta">
                    
                      <div class="album__year">2015</div>
                      
                      <div class="album__name">When It's Dark Out</div>
                      
                      <div class="album__actions">
                      
                        <button class="button-light save">Save</button>
                        
                        <button class="button-light more">
                          <i class="ion-ios-more"></i>
                        </button>
                        
                      </div>
                      
                    </div>
                    
                  </div>
                  
                  <div class="album__tracks">
                  
                    <div class="tracks">
                      
                      <div class="tracks__heading">
                      
                        <div class="tracks__heading__number">#</div>
                        
                        <div class="tracks__heading__title">Song</div>
                        
                        <div class="tracks__heading__length">
                        
                          <i class="ion-ios-stopwatch-outline"></i>
                          
                        </div>
                        
                        <div class="tracks__heading__popularity">
                        
                          <i class="ion-thumbsup"></i>
                          
                        </div>
                        
                      </div>

                      <div class="track">

                        <div class="track__number">1</div>

                        <div class="track__added">

                          <i class="ion-checkmark-round added"></i>

                        </div>

                        <div class="track__title">Intro</div>

                        <div class="track__explicit">

                          <span class="label">Explicit</span>

                        </div>
                        
                        <div class="track__length">1:11</div>
                        
                        <div class="track__popularity">
                        
                          <i class="ion-arrow-graph-up-right"></i>
                          
                        </div>

                      </div>
                      
                      

                    </div>
                    
                  </div>
                  
                </div>
                
              </div>
              
            </div>
          
          </div>

        </div>
        
      </div>
      
    </div>
    
  </div>
  
  <div class="content__right">
  
    <div class="social">
    
      <div class="friends">
      
        <a href="#" class="friend">
        
          <i class="ion-android-person"></i>
          
          Sam Smith
          
        </a>
        
        <a href="#" class="friend">
        
          <i class="ion-android-person"></i>
          
          Tarah Forsyth
          
        </a>
        
        <a href="#" class="friend">
        
          <i class="ion-android-person"></i>
          
          Ricahrd Tomkins
          
        </a>
        
        <a href="#" class="friend">
        
          <i class="ion-android-person"></i>
          
          Tony Russo
          
        </a>
        
        <a href="#" class="friend">
        
          <i class="ion-android-person"></i>
          
          Alyssa Marist
          
        </a>
        
        <a href="#" class="friend">
        
          <i class="ion-android-person"></i>
          
          Ron Samson
          
        </a>
        
      </div>
      
      <button class="button-light">Find Friends</button>
      
    </div>
    
  </div>
  
</section>

<section class="current-track">

  <div class="current-track__actions">
  
    <a class="ion-ios-skipbackward"></a>
    
    <a class="ion-ios-play play"></a>
    
    <a class="ion-ios-skipforward"></a>
    
  </div>
  
  <div class="current-track__progress">
  
    <div class="current-track__progress__start">0:01</div>
    
    <div class="current-track__progress__bar">
      
      <div id="song-progress"></div>
      
    </div>
    
    <div class="current-track__progress__finish">3:07</div>
    
  </div>
  
  <div class="current-track__options">
  
    <a href="#" class="lyrics">Lyrics</a>
    
    <span class="controls">
    
      <a href="#" class="control">
        <i class="ion-navicon"></i>
      </a>
      
      <a href="#" class="control">
        <i class="ion-shuffle"></i>
      </a>
      
      <a href="#" class="control">
        <i class="fa fa-refresh"></i>
      </a>
      
      <a href="#" class="control devices">
        <i class="ion-iphone"></i>
        <span>Devices Available</span>
      </a>
      
      <a href="#" class="control volume">
        
        <i class="ion-volume-high"></i>
      
        <div id="song-volume"></div>
        
      </a>
      
    </span>
    
  </div>
  
</section>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/8.3.0/nouislider.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>

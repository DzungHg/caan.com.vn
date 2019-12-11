<?php namespace ProcessWire;
// 
?>

<pw-region id="page-content">
<main>
            <div class="in-slide-container uk-section uk-padding-remove-vertical uk-margin-medium-bottom" data-uk-scrollspy="cls:uk-animation-fade; delay: 200">
                <div class="uk-container">
                    <!-- slideshow begin -->
                    <?php include("./blocks/_home-slideshow.php"); ?>
                    <!-- slideshow end -->
                </div>
            </div>
            <div class="uk-section uk-padding-remove-top">
                <div class="uk-container">
                    <!-- grid content begin -->
                    <div class="uk-grid uk-child-width-1-1 uk-child-width-1-3@m" data-uk-grid>    
                        <div class="uk-margin-bottom">
                            <img class="uk-align-center uk-margin-remove-bottom" src="<?=$urls->templates?>styles/images/agivee-image-content1.png" alt="image-content1">
                            <div class="uk-card uk-card-small uk-card-default">
                                <div class="uk-card-body uk-text-center">
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="uk-margin-bottom">Our core values</h3>
                            <p class="uk-margin-small-top">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates</p>
                            <ul class="uk-list uk-list-divider uk-text-uppercase uk-text-small">
                                <li><span class="uk-margin-small-right" data-uk-icon="icon: fa-layer-group; ratio:0.028"></span>Transparent</li>
                                <li><span class="uk-margin-small-right" data-uk-icon="icon: fa-chess-knight; ratio:0.028"></span>Courageous</li>
                                <li><span class="uk-margin-small-right" data-uk-icon="icon: fa-handshake; ratio:0.028"></span>Empowering</li>
                            </ul>
                        </div>
                        <div>
                            <h3>Our advantage</h3>
                            <div class="in-icon-wrapper small uk-float-left uk-margin-top uk-margin-small-right">
                                <img src="<?=$urls->templates?>styles/images/agivee-icon-content1.png" data-src="<?=$urls->templates?>styles/images/agivee-icon-content1.png" alt="icon-content1" width="36" height="36" data-uk-img>
                            </div>
                            <div class="uk-overflow-auto uk-margin-small-bottom">
                                <h5 class="uk-margin-small-top uk-margin-remove-bottom">Secure platform</h5>
                                <p class="uk-margin-remove-top">Vestibulum quam sitare amete ultrice dapbus acer vitae</p>
                            </div>        
                            <div class="in-icon-wrapper small uk-float-left uk-margin-top uk-margin-small-right">
                                <img src="<?=$urls->templates?>styles/images/agivee-icon-content2.png" data-src="<?=$urls->templates?>styles/images/agivee-icon-content2.png" alt="icon-content2" width="36" height="36" data-uk-img>
                            </div>
                            <div class="uk-overflow-auto uk-margin-small-bottom">
                                <h5 class="uk-margin-small-top uk-margin-remove-bottom">Smart promote</h5>
                                <p class="uk-margin-remove-top">Reprehenderit qui voluptate velit esse quam nihil molestia</p>
                            </div>        
                            <div class="in-icon-wrapper small uk-float-left uk-margin-top uk-margin-small-right">
                                <img src="<?=$urls->templates?>styles/images/agivee-icon-content3.png" data-src="<?=$urls->templates?>styles/images/agivee-icon-content3.png" alt="icon-content3" width="36" height="36" data-uk-img>
                            </div>
                            <div class="uk-overflow-auto uk-margin-small-bottom">
                                <h5 class="uk-margin-small-top uk-margin-remove-bottom">Competitive price</h5>
                                <p class="uk-margin-remove-top">Excepteur sint occaeca culpa cupidatat non proiden</p>
                            </div>
                        </div>            
                    </div>
                    <!-- grid content end -->
                    <!-- grid content begin -->
                    <div class="uk-grid">
                        <div class="uk-width-1-1 in-agivee-card">
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-body">
                                    <div class="uk-grid-divider" data-uk-grid>
                                        <div class="uk-width-1-1 uk-width-1-2@m">
                                            <div class="uk-grid-small" data-uk-grid>
                                                <div class="uk-width-auto">
                                                    <img src="<?=$urls->templates?>styles/images/agivee-icon-content4.png" data-src="<?=$urls->templates?>styles/images/agivee-icon-content4.png" alt="iconcontent4" width="70" height="70" data-uk-img>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3>Explore services</h3>
                                                    <p>Facilis este expedita distinctio libero tempore soluta nobis eligendi cumque nihil impedit</p>
                                                    <a class="uk-button uk-button-secondary" href="#">Services <span class="uk-margin-small-left" data-uk-icon="icon: fa-arrow-right; ratio:0.028"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-1 uk-width-1-2@m">
                                            <div class="uk-grid-small" data-uk-grid>
                                                <div class="uk-width-auto">
                                                    <img src="<?=$urls->templates?>styles/images/agivee-icon-content5.png" data-src="<?=$urls->templates?>styles/images/agivee-icon-content5.png" alt="iconcontent5" width="70" height="70" data-uk-img>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3>View expertise</h3>
                                                    <p>Facilis este expedita distinctio libero tempore soluta nobis eligendi cumque nihil impedit</p>
                                                    <a class="uk-button uk-button-secondary" href="#">Expertise <span class="uk-margin-small-left" data-uk-icon="icon: fa-arrow-right; ratio:0.028"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- grid content end -->
                    <!-- customer logo -->
                    <?php include("./blocks/_home-customer-logo.php"); ?>
                    <!-- customer logo end -->
                </div>
            </div>
</main>	
</pw-region>

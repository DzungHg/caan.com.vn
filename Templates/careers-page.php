<?php namespace ProcessWire; ?>

<pw-region id="page-content">
<main>    
      <div class="uk-section uk-padding-remove-top">
            <div class="uk-container">
                    <!-- breadcrumb content begin -->
                    <?php include("./blocks/_page-breadcrumb.php"); ?>
                    <!-- breadcrumb content end -->
                    <!-- grid content begin -->
                  <div class="uk-grid">
                        <div class="uk-flex uk-flex-center">
                            <div class="uk-width-1-1 uk-width-3-4@m">
                                <p class="uk-text-large"><?=$page->headline?></p>
                                <p><?=$page->body?></p>
                               <!-- còn tiếp nhưng bỏ bớt -->
                            </div>
                        </div>
                  </div>
                    <!-- grid content end -->
                    
                    <!-- grid content begin -->
                  <div class="uk-grid">
                        <div class="uk-width-1-1 uk-margin-bottom">
                            <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-3@m" data-uk-grid="masonry: true">
                                <div>
                                    <img src="img/in-img-careers1.jpg" data-src="img/in-img-careers1.jpg" alt="" data-width data-height data-uk-img>
                                </div>
                                <div>
                                    <img src="img/in-img-careers1.jpg" data-src="img/in-img-careers2.jpg" alt="" data-width data-height data-uk-img>
                                </div>
                                <div>
                                    <img src="img/in-img-careers1.jpg" data-src="img/in-img-careers3.jpg" alt="" data-width data-height data-uk-img>
                                </div>
                                <div>
                                    <img src="img/in-img-careers1.jpg" data-src="img/in-img-careers4.jpg" alt="" data-width data-height data-uk-img>
                                </div>
                                <div>
                                    <img src="img/in-img-careers1.jpg" data-src="img/in-img-careers5.jpg" alt="" data-width data-height data-uk-img>
                                </div>
                                <div>
                                    <img src="img/in-img-careers1.jpg" data-src="img/in-img-careers6.jpg" alt="" data-width data-height data-uk-img>
                                </div>
                            </div>
                        </div>
                  </div>
                   <!-- grid content end -->              
            </div>
      </div>
</main>			
</pw-region>


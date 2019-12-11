<div class="in-breadcrumb uk-margin-medium-bottom">                    
      <div class="uk-width-1-1 uk-width-3-4@m">
         <div class="uk-grid-large" data-uk-grid>
            <div class="uk-width-auto uk-flex uk-flex-middle">
               <h2><?php echo $page->title; ?></h2>
            </div>
            <div class="uk-width-expand uk-visible@m">
               <p class="uk-text-small"><?php echo $page->summary; ?></p>
            </div>                          
         </div>
         <div class="uk-width-1-1 uk-flex uk-flex-right">
            <?php  use function ProcessWire\ukBreadcrumb;
             ukBreadcrumb($page, ['class' => 'uk-position-bottom-right', 'appendCurrent' => true]); ?>
                            <!--<ul class="uk-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                            </ul> -->
         </div>
      </div>
</div>
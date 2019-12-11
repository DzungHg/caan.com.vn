<header data-uk-sticky="top: 400; cls-active: in-sticky">
            <div class="in-header-pattern uk-margin-bottom"></div>
            <div class="uk-section uk-padding-remove-vertical">
                <div class="uk-container">
                    <div class="uk-grid">                
                        <div class="uk-width-1-2 uk-flex uk-flex-middle">
                            <!-- header logo begin -->
                            <div class="uk-grid-collapse" data-uk-grid>
                                <div class="in-header-logo">
                                    <a class="uk-logo" href="<?=$urls->root?>"><img src="<?=$urls->templates?>styles/images/logo.svg" data-src="<?=$urls->templates?>styles/images/logo.svg" width="138" height="72" alt="logo" data-uk-img></a>
                                </div>
                            </div>
                            <!-- header logo end -->
                        </div>
                        <div class="uk-width-1-2 uk-visible@m in-header-info">
                            <div class="uk-margin-small-top uk-float-right">
                                <a href="#" class="uk-button uk-button-text">Create account</a>
                                <a href="signin.html" class="uk-button uk-button-default uk-margin-small-left">Login</a>
                            </div>
                            <div class="in-header-socials uk-float-right">
                                <a href="" class="uk-margin-small-right" data-uk-icon="icon: facebook; ratio: 0.8"></a>
                                <a href="" class="uk-margin-small-right" data-uk-icon="icon: twitter; ratio: 0.8"></a>
                                <a href="" data-uk-icon="icon: linkedin; ratio: 0.8"></a>
                            </div>
                        </div>
                        <div class="uk-width-1-1">                    
                            <!-- main navigation begin -->
                            <nav class="uk-navbar-container uk-navbar-transparent uk-visible@m uk-margin-top uk-margin-bottom" data-uk-navbar>
                                <div class="uk-navbar-left">        
                                    <ul class="uk-navbar-nav">
                                        <li>
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li>
                                            <a href="products.html">Products</a>
                                        </li>
                                        <li>
                                            <a href="#" data-uk-icon="icon: fa-sort-down; ratio: 0.023">Company</a>
                                            <div class="uk-navbar-dropdown">
                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="careers.html">Careers</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="pricing.html">Pricing</a>
                                        </li>
                                        <li>
                                            <a href="#" data-uk-icon="icon: fa-sort-down; ratio: 0.023">Resources</a>
                                            <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                                <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                                                    <div>
                                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                                            <li><a href="https://getuikit.com/docs/">Documentation<span data-uk-icon="icon:fa-external-link-alt; ratio: 0.024"></span></a></li>
                                                            <li><a href="#">Help Center</a></li>
                                                            <li><a href="customers.html">Customers</a></li>
                                                            <li><a href="roadmap.html">Roadmap</a></li>
                                                            <li><a href="#">White Paper<span data-uk-icon="icon:fa-file-pdf; ratio: 0.024"></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                                            <li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="uk-navbar-right">
                                    <div>
                                        <a class="uk-navbar-toggle" data-uk-search-icon href="#"></a>
                                        <div class="uk-drop" data-uk-drop="mode: click; pos: left-center; offset: 0">
                                            <form class="uk-search uk-search-navbar uk-float-right">
                                                <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                            <!-- main navigation end -->
                            <!-- mobile navigation begin -->
                            <div class="in-mobile-nav uk-height-1-1 uk-flex uk-flex-right uk-flex-middle uk-hidden@m">
                                <a class="uk-button" href="#mobile-nav-modal" data-uk-toggle><span data-uk-icon="icon: fa-bars; ratio: 0.040"></span></a>
                            </div>
                            <div id="mobile-nav-modal" class="uk-modal-full" data-uk-modal>
                                <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" data-uk-height-viewport>
                                    <button class="uk-modal-close-full uk-close-large" type="button" data-uk-icon="icon: fa-times; ratio: 0.040"></button>
                                    <div class="uk-width-large uk-padding-large">
                                        <ul class="uk-nav-primary uk-nav-parent-icon in-margin-negative-top@s" data-uk-nav>
                                            <li ><a href="index.html">Home</a>
                                            </li>
                                            <li ><a href="products.html">Products</a>
                                            </li>
                                            <li class="uk-parent"><a href="#">Company</a>
                                                <ul class="uk-nav-sub">
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="careers.html">Careers</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </li>
                                            <li ><a href="pricing.html">Pricing</a>
                                            </li>
                                            <li class="uk-parent"><a href="#">Resources</a>
                                                <ul class="uk-nav-sub">
                                                    <li><a href="https://getuikit.com/docs/">Documentation<span data-uk-icon="icon:fa-external-link-alt; ratio: 0.024"></span></a></li>
                                                    <li><a href="#">Help Center</a></li>
                                                    <li><a href="customers.html">Customers</a></li>
                                                    <li><a href="roadmap.html">Roadmap</a></li>
                                                    <li><a href="#">White Paper<span data-uk-icon="icon:fa-file-pdf; ratio: 0.024"></span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <a href="signin.html" class="uk-button uk-button-primary uk-border-rounded uk-align-center">Sign in</a>
                                    </div>
                                </div>
                            </div>
                            <!-- mobile navigation end -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
<span?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3054">
    <div class="pross1 img-container">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="text-wrapper">
                        <h4 class="text-title">CALL US TO GET FREE QUOTE NOW</h4>
                    </div>
                </div>

                <div class="col-2">
                    <a href="#"><i class="fa fa-chevron-right"></i>CALL US</a>
                </div>
            </div>
        </div>
    </div>
    <div class="pross2">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="footer-content first-title">
                        <div class="logo">
                            <img src="../3054/images/logo.png" alt="">
                        </div>
                        <div class="text">
                            <p>In nulla nibh, malesuada sit amet purus id, mollis auctor ex. In sit amet venenatis eros.
                                Curabitur sed convallis mauris. Nam eget volutpat purus, ut egestas nulla. Nunc
                                scelerisque eros
                                vitae lacus dictum dictum. Donec luctus ligula lectus, eu auctor sem sollicitudin sit
                                amet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="footer-content second-title">
                        <h3 class="title-header">COMPANY</h3>
                        <div class="row">
                            <div class="col-6">
                                <ul>
                                    <li class="menu-item"><a class="menu-link" href="#">Home</a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">Service</a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">Blog</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li class="menu-item"><a class="menu-link" href="#">About us</a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">Shop</a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="footer-content third-title">
                        <h3 class="title-header">CONTACTS</h3>
                        <p class="text-contact">
                            <span class="fa fa-phone"></span>1-888-777-55555<br>
                            <span class="fa fa-map-marker"></span>131 Lonsdale St, Melbourne VIC 3000, Australia<br>
                            <span class="fa fa-envelope"></span><a href="#">phone-repair@example.com</a><br>
                        </p>
                    </div>
                    <div class="footer-content last-title">
                        <h3 class="title-header">FOLLOW US</h3>
                        <a class="menu-link" href="#">
                            <span class="fa fa-2x fa-facebook-square"></span>
                        </a>
                        <a class="menu-link" href="#">
                            <span class="fa fa-2x fa-google-plus-square"></span>
                        </a>
                        <a class="menu-link" href="#">
                            <span class="fa fa-2x fa-flickr"></span>
                        </a>
                        <a class="menu-link" href="#">
                            <span class="fa fa-2x fa-tumblr-square"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pross3">
        <div class="container">
            <div class="row">
                <div class="footer-copyright col-12">
                    <div class="footer-copyright__container">
                        Phone Repair WordPress Theme by BrothersTheme © 2016
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
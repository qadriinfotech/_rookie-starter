/*!
 * Rookie Main Style v1.0
 */
 
.main-content-area {
  margin-bottom:50px;
  margin-top:50px
}

.wow {
  visibility:hidden
}

body>section {
  padding:50px 20px;
  overflow:hidden;
  box-shadow:1px 0 1px rgba(50,50,50,0.15) inset
}

a:focus,a:hover {
  text-decoration:none;
  -webkit-transition:all .3s;
  -moz-transition:all .3s;
  -o-transition:all .3s;
  transition:all .3s
}

img {
  border-style:none;
  max-width:100%;
  height:auto
}

table {
  table-layout: fixed;
  word-wrap: break-word;
}

button,input,select,textarea {
  font-size:100%;
  margin:0;
  vertical-align:baseline;
  vertical-align:middle
}

input[type=search] {
  -webkit-appearance:textfield;
  -moz-appearance:textfield;
  -webkit-box-sizing:content-box;
  -moz-box-sizing:content-box;
  box-sizing:content-box
}

input[type=search]::-webkit-search-decoration {
  -webkit-appearance:none;
  -moz-appearance:none
}

button::-moz-focus-inner,input::-moz-focus-inner {
  border:0;
  padding:0
}

textarea {
  overflow:auto;
  padding-left:3px;
  vertical-align:top;
  width:100%
}

img.alignright {
  float:right;
  margin:0 0 1em 1em
}

img.alignleft {
  float:left;
  margin:0 1em 1em 0
}

img.aligncenter {
  display:block;
  margin-left:auto;
  margin-right:auto
}

.alignright {
  float:right
}

.alignleft {
  float:left
}

.aligncenter {
  display:block;
  margin-left:auto;
  margin-right:auto
}

.alignnone {
  margin-bottom:25px
}

.screen-reader-text {
  clip:rect(1px,1px,1px,1px);
  position:absolute!important
}

.screen-reader-text:active,.screen-reader-text:focus,.screen-reader-text:hover {
  background-color:#f1f1f1;
  border-radius:3px;
  box-shadow:0 0 2px 2px rgba(0,0,0,.6);
  clip:auto!important;
  color:#21759b;
  display:block;
  font-size:14px;
  font-weight:700;
  height:auto;
  left:5px;
  line-height:normal;
  padding:15px 23px 14px;
  text-decoration:none;
  top:5px;
  width:auto;
  z-index:100000
}

.clear:after,.clear:before,.comment-content:after,.comment-content:before,.entry-content:after,.entry-content:before,.gallery:after,.gallery:before,.site-content:after,.site-content:before,.site-footer:after,.site-footer:before,.site-header:after,.site-header:before {
  content:'';
  display:table
}

.clear:after,.comment-content:after,.entry-content:after,.gallery:after,.site-content:after,.site-footer:after,.site-header:after {
  clear:both
}

.search-highlight {
  background:#fcf8e3;
  color:#8a6d3b
}

.error-404 {
  background:#fff;
  padding:20px
}

.error-404-box {
  margin:0;
  padding:0;
  text-align:center
}

.error-message {
  font-size:50px;
  font-weight:900;
  text-shadow:1px 1px 0 rgba(0,0,0,.12);
  color:#999;
  padding:20px
}

.error-message:before {
  content:"\f05a";
  font-family:FontAwesome;
  margin-right:15px;
  color:#999
}

@media (max-width:767px) {
  .error-message {
    font-size:30px
  }
}

.sticky-star {
  display:none
}

.sticky .sticky-star {
  display:inline!important
}

.sticky {
  display:block;
  border-color:rgba(178,175,232,.5);
  background:#f7fcf7!important;
  border-style:solid;
  border-width:1px;
  padding:15px
}

.post-sticky {
  border:none;
  border-radius:50%;
  display:block;
  height:36px;
  position:absolute;
  right:0;
  text-align:center;
  top:6px;
  width:36px;
  z-index:1
}

.updated-on,.updated:not(.published) {
  display:none
}

.group-blog .byline,.single .byline {
  display:inline
}

.entry-content,.entry-summary,.page-content {
  margin:1em 0 0
}

.entry-header {
  padding:0 10px
}

.page-links {
  clear:both;
  margin:0 0 1.5em
}

.page-links span {
  background-color:#b2afe8;
  border-radius:4px;
  color:#fff;
  display:inline-block;
  margin-left:2px;
  padding:2px 10px
}

.page-links a span {
  background-color:inherit;
  border:1px solid #e8e8e8;
  color:#777;
  transition:all .5s ease 0s
}

.page-links a:hover span {
  background-color:#b2afe8;
  border:1px solid #9f9be2;
  color:#fff
}

.edit-link {
  opacity:0
}

.page:hover .edit-link,.post:hover .edit-link {
  transition:all .5s ease 0s;
  opacity:1
}

.attachment img {
  width:100%
}

.wp-caption {
  max-width:100%;
  text-align:center
}

.wp-caption img {
  border-style:none!important;
  width:100%;
  height:auto
}

.wp-caption .wp-caption-text {
  margin:0;
  padding:5px;
  background:#e23a3e;
  color:#FFF;
  font-size:14px;
  font-style:normal
}

.wp-caption .wp-caption-text a {
  color:#FFF;
  text-decoration:underline
}

.wp-caption .wp-caption-text a:hover {
  text-decoration:none
}

.wp-smiley {
  max-height:13px;
  margin:0
}

.wp-caption.alignleft {
  margin-right:20px
}

.wp-caption.alignright {
  margin-left:20px
}
.comment-content img,.widget img,.wp-post-image, img.avatar {
  background-color:#fff;
  border:1px solid #ddd;
  border-radius:2px;
  padding:2px
}

.single-featured {
  -webkit-transition:opacity .3s linear;
  -moz-transition:opacity .3s linear;
  -o-transition:opacity .3s linear;
  transition:opacity .3s linear;
  display:block;
  margin:auto
}

.single-featured:hover {
  opacity:.8;
  box-shadow:0 0 0 5px #644C80 inset
}

.comment-content img.wp-smiley,.entry-content img.wp-smiley,.page-content img.wp-smiley {
  border:none;
  margin-bottom:0;
  margin-top:0;
  padding:0
}

embed,iframe,object {
  max-width:100%
}

.iframe-container {
  position:relative;
  padding-bottom:40%;
  height:0;
  overflow:hidden
}

.embed-container embed,.embed-container iframe,.embed-container object,.iframe-container iframe {
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:100%
}

#image-navigation .nav-next a,#image-navigation .nav-previous a {
  padding:5px 20px;
  border:1px solid #E8E8E8;
  border-radius:4px;
  display:block
}

#image-navigation .nav-next a:hover,#image-navigation .nav-previous a:hover {
  background-color:#DA4453;
  color:#fff
}

#image-navigation .nav-next,#image-navigation .nav-previous {
  margin:10px 0
}

.gallery {
  margin:auto
}

.gallery-image {
  border:2px solid #efefef;
  margin-left:0
}

.gallery dl {
  float:left;
  margin-top:10px;
  text-align:center
}

.gallery dl img {
  border:2px solid #cfcfcf
}

.gallery-caption {
  position:absolute;
  margin-left:0;
  bottom:-20px;
  left:0;
  font-size:12px;
  height:auto;
  min-height:50px;
  width:100%;
  z-index:9999;
  display:block;
  padding:10px;
  opacity:0;
  -webkit-transition:all .2s ease-in-out;
  -moz-transition:all .2s ease-in-out;
  -o-transition:all .2s ease-in-out;
  transition:all .2s ease-in-out;
  background:-moz-linear-gradient(top,rgba(0,0,0,0) 0,rgba(0,0,0,.5) 100%);
  background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,rgba(0,0,0,0)),color-stop(100%,rgba(0,0,0,.5)));
  background:linear-gradient(to bottom,rgba(0,0,0,0) 0,rgba(0,0,0,.5) 100%)
}

.gallery-item:hover .gallery-caption {
  opacity:1;
  bottom:0;
  color:#eee
}

.gallery-item:hover a {
  text-decoration:none
}

.gallery-icon {
  position:relative
}

.gallery-icon a:before {
  content:"";
  position:absolute;
  top:0;
  left:0;
  height:100%;
  width:100%;
  opacity:0;
  background:rgba(0,0,0,.7);
  -webkit-transition:all .2s ease-in-out;
  -o-transition:all .2s ease-in-out;
  -moz-transition:all .2s ease-in-out;
  transition:all .2s ease-in-out
}

.format-image .featured_image a:hover:after,.gallery-item:hover .gallery-icon a:after,.gallery-item:hover .gallery-icon a:before {
  opacity:1
}

.format-image .featured_image a:after,.gallery-icon a:after {
  content:"\f002";
  color:rgba(255,255,255,.3);
  font-size:20px;
  position:absolute;
  top:50%;
  left:50%;
  font-family:FontAwesome;
  margin-top:-18px;
  margin-left:-10px;
  line-height:36px;
  opacity:0;
  z-index:1000;
  -webkit-transition:all .2s ease-in-out;
  -moz-transition:all .2s ease-in-out;
  -o-transition:all .2s ease-in-out;
  transition:all .2s ease-in-out
}

.gallery-item {
  overflow:hidden;
  position:relative;
  text-align:center;
}

.gallery-columns-2 .gallery-item {
  max-width: 50%;
}

.gallery-columns-3 .gallery-item {
  max-width: 33.33%;
}

.gallery-columns-4 .gallery-item {
  max-width: 25%;
}

.gallery-columns-5 .gallery-item {
  max-width: 20%;
}

.gallery-columns-6 .gallery-item {
  max-width: 16.66%;
}

.gallery-columns-7 .gallery-item {
  max-width: 14.28%;
}

.gallery-columns-8 .gallery-item {
  max-width: 12.5%;
}

.gallery-columns-9 .gallery-item {
  max-width: 11.11%;
}

.gallery-columns-1 .gallery-item:nth-of-type(1n),.gallery-columns-2 .gallery-item:nth-of-type(2n),.gallery-columns-3 .gallery-item:nth-of-type(3n),.gallery-columns-4 .gallery-item:nth-of-type(4n),.gallery-columns-5 .gallery-item:nth-of-type(5n),.gallery-columns-6 .gallery-item:nth-of-type(6n),.gallery-columns-7 .gallery-item:nth-of-type(7n),.gallery-columns-8 .gallery-item:nth-of-type(8n),.gallery-columns-9 .gallery-item:nth-of-type(9n) {
  margin-right:0
}

.gallery-columns-1.gallery-size-medium figure.gallery-item:nth-of-type(1n+1),.gallery-columns-1.gallery-size-thumbnail figure.gallery-item:nth-of-type(1n+1),.gallery-columns-2.gallery-size-thumbnail figure.gallery-item:nth-of-type(2n+1),.gallery-columns-3.gallery-size-thumbnail figure.gallery-item:nth-of-type(3n+1) {
  clear:left
}

.gallery-columns-6 .gallery-caption,.gallery-columns-7 .gallery-caption,.gallery-columns-8 .gallery-caption,.gallery-columns-9 .gallery-caption {
  display:none
}

.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9 {
  min-height:1px;
  padding-left:10px;
  padding-right:10px;
  position:relative
}
.btn {
  border:0;
  border-bottom:0;
  border-left:0;
  box-shadow:inset 0 -2.2px rgba(0,0,0,.12),inset 2px 0 rgba(0,0,0,.1);
  outline:0;
  -webkit-outline:0;
  -o-outline:0;
  -moz-outline:0
}

.btn.active,.btn:active {
  outline:0;
  -moz-outline:0;
  background-image:none;
  -webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125)!important;
  -moz-box-shadow:inset 0 3px 5px rgba(0,0,0,.125)!important;
  position:relative;
  box-shadow:inset 0 2px 3px rgba(0,0,0,.125)!important;
  top:1px;
  left:-1px
}

.btn:focus {
  outline:0;
  -webkit-outline:0;
  -moz-outline:0
}

.btn-xlg {
  padding:24px 48px;
  font-size:24px
}

.btn-xlg [class*=" icon-"],.btn-xlg [class^=icon-] {
  margin-right:10px
}

.form-control:focus {
  border-color:#644C80;
  outline:0;
  -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(178,175,232,.6);
  -moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(178,175,232,.6);
  box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(178,175,232,.6)
}

.btn-success {
  background-color:#2ecc5b
}

.btn-default {
  color:#fff;
  background-color:#b2afe8;
  border-color:#644C80
}

.btn-default.active,.btn-default:active,.btn-default:focus,.btn-default:hover,.open .dropdown-toggle.btn-default {
  color:#fff;
  background-color:#644C80
}

.navbar {
  padding-bottom:10px;
  padding-top:10px;
  z-index:999;
  background:rgba(255,255,255,.9);
  margin-bottom:0;
  min-height:0;
  position:relative;
  border-radius:0;
  border-color:#eee
}

.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover {
  -moz-border-top-colors:#644C80
}

.nav-tabs {
  margin:20px 0
}

.container>.navbar-collapse,.container>.navbar-header {
  margin-right:auto;
  margin-left:auto
}

.navbar-form {
  margin:8px auto
}

.navbar-nav>li>.dropdown-menu {
  margin-top:0
}

.navbar-nav>li>.dropdown-menu .caret {
  border-bottom:4px solid transparent;
  border-top:4px solid transparent;
  border-left:4px solid
}

.navbar-form input {
  min-width:220px
}

@media only screen and (max-width :767px) {
#nav-search {
    margin-right:0;
    margin-left:0;
    display:block;
    float:none;
    position:relative;
    width:100%;
    z-index:99999
  }
}

@media only screen and (max-width :767px) {
  #menu-primary {
    margin-right:0;
    margin-left:0;
    max-height:200px;
    overflow:visible;
    z-index:99999
  }
}

.dropdown-menu li > a.dropdown-toggle:focus,.dropdown-menu > li > a.dropdown-toggle:hover {
  color:#fff
}

.navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:focus,.navbar-default .navbar-nav>.active>a:hover,.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:focus,.navbar-default .navbar-nav>.open>a:hover,.navbar-default .navbar-nav>li>a:focus,.navbar-default .navbar-nav>li>a:hover {
  color:#fff;
  background-color:#b2afe8
}

@media (max-width:767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus,.navbar-default .navbar-nav .open .dropdown-menu > li > a:hover {
    color:#fff;
    background-color:#b2afe8
  }
}

.navbar-default .navbar-nav .open .dropdown-menu>.active>a,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover {
  color:#555;
  background-color:#b2afe8
}

.dropdown-menu .dropdown-menu {
  top:0;
  right:100%
}

.dropdown-menu>li>a:focus,.dropdown-menu>li>a:hover {
  color:#fff;
  text-decoration:none;
  background-color:#b2afe8
}

.dropdown-menu>.active>a,.dropdown-menu>.active>a:focus,.dropdown-menu>.active>a:hover {
  color:#fff;
  text-decoration:none;
  background-color:#B2AFE8;
  outline:0
}

.nav .open>a,.nav .open>a:focus,.nav .open>a:hover {
  background-color:#b2afe8;
  border-color:#428bca
}

.search_pop {
  -webkit-animation: search_pop .3s 1 cubic-bezier(0.175, .885, .32, 1.275);
  animation: search_pop .3s 1 cubic-bezier(0.175, .885, .32, 1.275);
}

@-webkit-keyframes search_pop {
  0% { -webkit-transform: scale(0.8);}
  100% { -webkit-transform: scale(1);}
}

@keyframes search_pop {
  0% {transform: scale(0.8);}
  100% {transform: scale(1);}
}

.text-muted {
  color:inherit;
  text-decoration:none;
  font-weight:700
}

.very-muted {
  text-transform:uppercase;
  color:#aaa!important;
  font-weight:700;
  display:inline-block;
  font-size:11px
}

.pager li>a,.pager li>span {
  border-radius:2px;
  border:1px solid #eee
}

.pager li>a:focus,.pager li>a:hover {
  background-color:#644C80;
  color:#fff
}

.pager>.active>a,.pager>.active>a:focus,.pager>.active>a:hover,.pager>.active>span,.pager>.active>span:focus,.pager>.active>span:hover {
  background-color:#644C80;
  border-color:#eee;
  color:#fff
}

#top-bar-wrap {
  font-size:12px;
  margin-bottom:0
}

.top-bar-left {
  float:left;
  height:50px;
  line-height:50px
}

.top-bar-right {
  float:right;
  height:50px;
  line-height:50px
}

#top-bar-social a {
  display:block;
  float:left;
  font-size:18px;
  margin-left:10px
}

#top-bar #top-bar-social.top-bar-right a :hover {
  transition:all .3s ease 0s
}

#top-bar-social a .fa-facebook:hover {
  color:#3b559f
}

#top-bar-social a .fa-twitter:hover {
  color:#00acee
}

#top-bar-social a .fa-linkedin:hover {
  color:#007bb6
}

#top-bar-social a .fa-google-plus:hover {
  color:#dd4c39
}

#top-bar-social a .fa-dribbble:hover {
  color:#f36798
}

#top-bar-social a .fa-pinterest:hover {
  color:#cc2127
}

#top-bar-social a .fa-flickr:hover {
  color:#ff0084
}

#top-bar-social a .fa-instagram:hover {
  color:#517fa4
}

#top-bar-social a .fa-vimeo-square:hover {
  color:#0CF
}

#top-bar-social a .fa-rss:hover {
  color:#ffac3d
}

.logo {
  padding-top:10px
}

.is-sticky {
  z-index:9999;
  left:0;
  position:fixed;
  top:0;
  width:100%;
  box-shadow:0 0 20px 0 rgba(0,0,0,.2);
  border-top:3px solid #644C80;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;
  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;
  -webkit-animation-duration:.5s;
  -moz-animation-duration:.5s;
  animation-duration:.5s
}

@media (max-width:768px) {
.navbar-nav .open .dropdown-menu {
  max-height:250px;
  overflow-x:hidden;
  overflow-y:visible
}
}

.admin-bar .is-sticky {
  margin-top:28px
}

#sub-header {
  margin-top:0;
  padding:28px 0
}

.sub-header-title>h1 {
  font-size:20px
}

.breadcrumb {
  border-radius:0;
  margin-bottom:0;
  margin-top:0;
  padding:0;
  text-align:right;
  list-style:none;
  background:none!important;
  font-size:11px
}

.breadcrumb .breadcrumb-list a,.current {
  padding:0 2px
}

.breadcrumb>.active {
  color:#fff
}

.breadcrumb a {
  color:#b2afe8
}

.breadcrumb a:hover {
  color:#fff
}

.hentry {
  padding:15px;
  border-radius:3px;
  box-shadow:0 1px 0 #ccc;
  margin-bottom:30px;
  position:relative
}

.hentry:after {
  border-bottom-color:#ccc!important;
  border-left:5px solid transparent;
  border-right:5px solid transparent;
  border-style:solid;
  border-top:5px solid transparent;
  border-width:5px;
  bottom:0;
  content:"";
  height:0;
  left:50%;
  margin-left:-3px;
  position:absolute;
  width:0
}

.entry-content {
  padding:0 20px 20px
}

.entry-content>ol,.entry-content>ul {
  margin:0 0 20px 10px
}

.entry-content dd {
  margin-left:0;
  font-size:.9em;
  color:#787878;
  margin-bottom:1.5em
}

.entry-content object,.entry-content video {
  max-width:100%;
  height:auto
}

.entry-content p {
  color:inherit
}

.entry-content pre {
  background:#eee;
  border:1px solid #cecece;
  padding:10px
}

.page-header .taxonomy-description p {
  margin:10px 3px
}

.page-links {
  padding:7px 0
}

.page-title:before {
  border-bottom:1px solid #b2afe8;
  bottom:-1px;
  content:"";
  position:absolute;
  width:40px
}

.page-title {
  border-bottom:1px solid #eee;
  padding:10px 0;
  margin:20px 15px;
  position:relative
}
.entry-meta:before {
  border-bottom:1px solid #ccc;
  bottom:-1px;
  content:"";
  height:0;
  left:0;
  position:absolute;
  width:25px
}

.entry-meta {
  border-bottom:1px solid #eee;
  border-top:1px solid #eee;
  font-size:10px;
  font-weight:700;
  margin-bottom:5px;
  padding:10px 0;
  position:relative;
  text-transform:uppercase
}

.entry-meta:after {
  border-bottom:1px solid #ccc;
  content:"";
  height:0;
  left:0;
  position:absolute;
  top:-1px;
  width:25px
}

.entry-footer {
  border-top:1px solid #eee;
  font-size:10px;
  font-weight:700;
  margin-bottom:0;
  padding:10px 0 0;
  position:relative;
  text-transform:uppercase
}

.entry-footer:after {
  border-bottom:1px solid #ccc;
  content:"";
  height:0;
  left:0;
  position:absolute;
  top:-1px;
  width:25px
}

.entry-footer i,.entry-meta i {
  margin-right:2px;
  margin-left:2px
}

.byline,.cat-links,.comments-link,.posted-on,.tags-links,.updated-on,.vcard {
  margin-right:5px
}

.comment-content a {
  word-wrap:break-word
}

.bypostauthor {
  display:block
}

#author-info {
  padding:20px;
  margin-bottom:20px;
  background-color:#fff;
  border:1px solid #eee
}

.about_author {
  float:left;
  width:100%
}

.about_author img {
  float:left;
  margin-right:20px
}

.about_author a {
  font-family:inherit;
  font-weight:400;
  font-weight:600;
  color:#333
}

.author-description {
  font-size:13px
}

.comment-reply-title {
  margin-top:2em
}

.comments-header {
  margin-top:1em
}

.commentlist {
  list-style-type:none;
  margin-left:0;
  padding-left:0
}

.commentlist li .comment-body {
  background:#fff;
  font-size:14px;
  overflow:hidden;
  padding:25px 25px 15px;
  margin-bottom:15px;
  margin-top:1em;
  position:relative;
  border:1px solid #E8E8E8;
  border-bottom:1px solid #DADADA;
  border-radius:4px
}

.commentlist .children li {
  list-style:none
}

.commentlist .children li.comment>div[id*=comment-] {
  background:#f7fcf7
}

#reviews #comments ol.commentlist li img,.commentlist>li .photo {
  display:block;
  float:left;
  height:64px;
  line-height:0;
  margin-right:15px;
  overflow:hidden;
  padding:5px;
  width:64px
}

.commentlist>li .comment-author {
  font-size:13px;
  font-weight:700
}

.commentlist>li .comment-meta {
  font-size:12px
}

.commentlist>li .comment-meta a {
  color:#999
}

.commentlist>li .comment-meta a:hover {
  color:#644C80
}

.commentlist>li .reply {
  position:absolute;
  right:0;
  bottom:0
}

.commentlist>li .comment-reply-link {
  font-size:10px;
  padding:3px 7px;
  border-radius: 4px 0 4px;
  text-transform:uppercase
}

.commentlist>li .comment-meta .comment-edit-link {
  background-color:#f5f5f5;
  border:1px solid #ddd;
  border-radius:0 4px;
  color:#9da0a4;
  font-size:10px;
  font-weight:700;
  padding:3px 7px;
  position:absolute;
  right:-1px;
  top:-1px
}

.commentlist>li .comment-meta a.comment-edit-link:hover {
  color:#222
}

.wpbs-textarea {
  margin-top:15px
}

.form-allowed-tags code {
  white-space:inherit;
  word-wrap:break-word
}

#sidebar {
  border-radius:3px
}

#sidebar .sidebar-padder {
  padding:15px
}

.sidebar-padder ul {
  list-style:none;
  padding:5px
}

@media screen and (max-width: 480px) {
  aside.widget-area {
    font-size: 7mm;
  }
}

.widget {
  margin-bottom:20px
}

.cat-count-span {
  float:right;
  color:#777
}

#sidebar .widget_archive li:before,#sidebar .widget_categories li:before {
  content:'\f105';
  font-family:FontAwesome;
  color:#888;
  margin-right:5px
}

#sidebar .widget_archive li a:hover,#sidebar .widget_categories li a:hover {
  padding:2px
}

.widget-title:before {
  border-bottom:1px solid #b2afe8;
  bottom:-1px;
  content:"";
  position:absolute;
  width:40px
}

.widget-title {
  border-bottom:1px solid rgba(119,119,119,.1);
  padding:10px 0;
  margin:0 0 20px;
  position:relative
}

img.footer-logo {
  float:left;
  margin:0 10px
}

.footer-wrapper {
  border-top:3px solid #b2afe8;
  box-shadow:0 1px 1px rgba(0,0,0,.03) inset,0 -1px 1px rgba(0,0,0,.03) inset;
  background:#222;
  color:#aaa;
  padding:20px;
  margin-top:30px;
  font-size:13px
}

.footer-widgets {
  margin:15px 0
}

.footer-widget-title:before {
  border-bottom:1px solid #b2afe8;
  bottom:-1px;
  content:"";
  position:absolute;
  width:40px
}

.footer-widget-title {
  font-size:18px;
  font-family:'Open Sans',sans-serif;
  font-weight:300;
  border-bottom:1px solid rgba(255,255,255,.2);
  padding:10px 0;
  margin:0 0 20px;
  position:relative;
  text-transform:uppercase
}

.recent-comments-wrapper img,.recent-posts-wrapper img {
  margin:5px 0
}

.recent-posts-wrapper .media a .img-responsive:hover {
  opacity:.8
}

.footer-content .footer-widgets ul {
  list-style:none;
  padding-left:5px
}

.footer-content .footer-widgets li:before {
  content:"\f105";
  font-family:FontAwesome;
  padding-right:5px
}

#footer-socials {
  background:#222;
  margin:0;
  padding:0
}

.social-bar {
  padding:10px;
  margin:0 5px;
  text-align:left
}

.social-bar-text {
  color:#aaa;
  margin-right:5px;
  text-transform:uppercase;
  font-size:12px
}

.social-bar a {
  background:#222;
  color:#aaa;
  border:1px solid rgba(255,255,255,.07);
  border-radius:50%;
  line-height:28px!important;
  width:28px!important;
  display:inline-block;
  font-size:12px;
  text-align:center;
  transition:all .9s ease 0s
}

.social-bar a:hover {
  color:#fff
}

.social-bar .twitter:hover {
  background:#00acee
}

.social-bar .facebook:hover {
  background:#3b559f
}

.social-bar .google_plus:hover {
  background:#dd4c39
}

.social-bar .pinterest:hover {
  background:#cc2127
}

.social-bar .dribbble:hover {
  background:#00acee
}

.social-bar .linkedin:hover {
  background:#007bb6
}

.social-bar .flickr:hover {
  background:#ff0084
}

.social-bar .vimeo:hover {
  background:#0CF
}

.social-bar .rss:hover {
  background:#ffac3d
}

.footer-bottom-wrapper {
  background:#111;
  padding-top:10px
}

.copyright-text,.footer-menu {
  padding-bottom:10px
}

.copyright-text {
  font-size:12px;
  color:#777
}
.footer-menu {
  text-align:right
}

.bottom-menu {
  font-size:13px;
  display:inline-block;
  list-style:none;
  padding:0;
  margin:0
}

.footer-menu li {
  display:inline-block;
  border-left:1px solid rgba(99,99,99,.9);
  line-height:10px;
  margin-left:4px
}

.footer-menu li:first-child {
  border-left:none
}

.footer-menu li a {
  padding-left:8px;
  color:#777;
  text-decoration:none;
  text-align:center
}

.footer-menu li a:hover,a:active,a:focus {
  transition:all .2s ease 0s;
  color:#644C80
}

.to-top {
  display:none;
  border-radius:10%;
  text-align:center;
  padding-top:12px;
  position:fixed;
  bottom:4rem;
  right:1.5rem;
  width:4.2rem;
  height:4.2rem;
  color:#fff!important;
  background-color:rgba(0,0,0,.1);
  cursor:pointer
}

.to-top:hover {
  color:#fff!important;
  background-color:#111;
  text-decoration:none
}

ol.unstyled,ul.unstyled {
  list-style:none none;
  margin-left:0
}

.post-share-buttons {
  height:21px;
  margin-bottom:2em;
  padding:10px 0;
  width:100%
}

.post-share-buttons li,.post-share-buttons span {
  display:block;
  float:left;
  width:90px
}

.post-share-buttons iframe {
  max-width:none
}

@media (max-width:480px) {
  .post-share-buttons {
    display:none
  }
}

.post-social-wrap {
  border-top:1px solid rgba(0,0,0,.07);
  padding:20px 0 0
}

.social-question {
  float:left;
  padding:10px
}

.post-share {
  display:inline-block;
  padding:10px
}

@media (max-width:768px) {
  .post-social-wrap {
    padding:10px
  }
}
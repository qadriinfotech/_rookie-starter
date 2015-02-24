/* Rookie Main Style v1.0 */

/* ROOKIE CORE */
.main-content-area {
  margin-bottom: 50px;
  margin-top: 50px;
}

.wow { visibility:hidden }

ol.unstyled, 
ul.unstyled {
  list-style: none none;
  margin: 0
}

img {
  max-width: 100%;
  height: auto
}

.alignleft {
  display: inline;
  float: left
}

.alignright {
  display: inline;
  float: right
}

.aligncenter {
  display: block;
  margin-right: auto;
  margin-left: auto
}

.alignnone {
  margin: 1em 0 2em
}

blockquote.alignleft,
.wp-caption.alignleft,
img.alignleft {
  margin: 0.4em 1.6em 1.6em 0
}

blockquote.alignright,
.wp-caption.alignright,
img.alignright {
  margin: 0.4em 0 1.6em 1.6em
}

blockquote.aligncenter,
.wp-caption.aligncenter,
img.aligncenter {
  clear: both;
  margin-top: 1em;
  margin-bottom: 2em
}

.wp-caption.alignleft,
.wp-caption.alignright,
.wp-caption.aligncenter {
  margin-bottom: 1.2em
}

.wp-caption.alignnone {
  margin: 2em 0 2em
}

.screen-reader-text {
  clip: rect(1px,1px,1px,1px);
  position: absolute!important
}

.screen-reader-text:active,
.screen-reader-text:focus,
.screen-reader-text:hover {
  background-color: #f1f1f1;
  border-radius: 3px;
  box-shadow: 0 0 2px 2px rgba(0,0,0,.6);
  clip: auto!important;
  color: #21759b;
  display: block;
  font-size: 14px;
  font-weight: 700;
  height: auto;
  left: 5px;
  line-height: normal;
  padding: 15px 23px 14px;
  text-decoration: none;
  top: 5px;
  width: auto;
  z-index: 100000
}

.wp-smiley {
  max-height: 13px;
  margin: 0
}

.comment-content img,
.widget img,
.wp-post-image, 
img.avatar {
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 2px;
  padding: 2px
}

.comment-content img.wp-smiley,
.entry-content img.wp-smiley,
.page-content img.wp-smiley {
  border: none;
  margin-bottom: 0;
  margin-top: 0;
  padding: 0
}

embed,
iframe,
object,
video {
  margin-bottom: 25px;
  max-width: 100%
}

p > embed,
p > iframe,
p > object,
p > video {
  margin-bottom: 0
}

.wp-audio-shortcode,
.wp-video,
.wp-playlist.wp-audio-playlist {
  font-size: 15px;
  font-size: 1.5rem;
  margin-top: 0;
  margin-bottom: 25px
}

.wp-playlist.wp-playlist {
  padding-bottom: 0;
}

.wp-playlist .wp-playlist-tracks {
  margin-top: 0;
}

.wp-playlist-item .wp-playlist-caption {
  border-bottom: 0;
  padding: 10px 0;
}

.wp-playlist-item .wp-playlist-item-length {
  top: 10px;
}

/* GALLERY */ 
.gallery { margin-bottom: 1.6em }

.gallery-item {
  overflow: hidden;
  position: relative;
  text-align: center;
  vertical-align: top;
  display: inline-block
}

.gallery dl {
  float: left;
  margin-top: 10px
}

.gallery dl img {
  border: 2px solid #fff
}

.gallery-caption {
  position: absolute;
  opacity: 0;
  visibility: hidden;
  width: 100%;
  bottom: 0;
  transition: all .4s ease 0s;
  -webkit-transition: all .4s ease 0s;
  transform: scale(0.9);
  padding: 10px
}

.gallery-item:hover .gallery-caption {
  visibility: visible;
  opacity: 1;
  transform: scale(1)
}

.gallery-item .wp-caption-text.gallery-caption {
  font-weight: 500;
  font-size: 12px;
  color: #fff
}

.gallery-item:hover a {
  text-decoration: none
}

.gallery-icon img {
  margin: 0 auto
}

.gallery-icon a:before {
  background: none repeat scroll 0 0 rgba(0, 0, 0, 0.7);
  content: "";
  height: 100%;
  left: 0;
  opacity: 0;
  position: absolute;
  top: 0;
  transition: all 0.2s ease-in-out 0s;
  -webkit-transition: all .2s ease 0s;
  width: 100%
}

.gallery-item:hover .gallery-icon a:before {
  opacity: 1
}

.gallery-columns-2 .gallery-item { max-width: 50% }
.gallery-columns-3 .gallery-item { max-width: 33.33% }
.gallery-columns-4 .gallery-item { max-width: 25% }
.gallery-columns-5 .gallery-item { max-width: 20% }
.gallery-columns-6 .gallery-item { max-width: 16.66% }
.gallery-columns-7 .gallery-item { max-width: 14.28% }
.gallery-columns-8 .gallery-item { max-width: 12.5% }
.gallery-columns-9 .gallery-item { max-width: 11.11% }

.gallery-columns-6 .gallery-caption,
.gallery-columns-7 .gallery-caption,
.gallery-columns-8 .gallery-caption,
.gallery-columns-9 .gallery-caption {
  display:none
}

#image-navigation .nav-next a,#image-navigation .nav-previous a {
  padding: 5px 20px;
  border: 1px solid #E8E8E8;
  border-radius: 4px;
  display: block
}

#image-navigation .nav-next a:hover, #image-navigation .nav-previous a:hover {
  background-color: #DA4453;
  color: #fff
}

#image-navigation .nav-next, #image-navigation .nav-previous {
  margin: 10px 0
}

/* CAPTIONS */
.wp-caption {
  max-width: 100%;
  text-align: center
}

.wp-caption .wp-caption-text {
  margin: 0;
  padding: 5px;
  background: #e23a3e;
  color: #fff;
  font-size: 14px;
  font-style: normal
}

.wp-caption-text.gallery-caption {
  margin: 0
}

.wp-caption .wp-caption-text a {
  color: #fff;
  text-decoration: underline
}

.wp-caption .wp-caption-text a:hover {
  text-decoration: none
}

/* BOOTSTRAP EDIT */
.btn {
  border: 0;
  border-bottom: 0;
  border-left: 0;
  box-shadow: inset 0 -2.2px rgba(0,0,0,.12),inset 2px 0 rgba(0,0,0,.1);
  outline: 0;
  -webkit-outline: 0
}

.btn.active, 
.btn:active {
  outline: 0;
  background-image: none;
  position: relative;
  box-shadow: inset 0 2px 3px rgba(0,0,0,.125)!important;
  -webkit-box-shadow: inset 0 3px 5px rgba(0,0,0,.125)!important;
  top: 1px;
  left: -1px
}

.btn:focus {
  outline: 0;
  -webkit-outline: 0;
}

.btn-xlg {
  padding: 24px 48px;
  font-size: 24px
}

.btn-xlg [class*=" icon-"],
.btn-xlg [class^=icon-] {
  margin-right: 10px
}

.form-control:focus {
  border-color: #644C80;
  outline: 0;
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(178,175,232,.6);
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(178,175,232,.6)
}

.btn-success {
  background-color: #2ecc5b
}

.btn-default {
  color: #fff;
  background-color: #b2afe8;
  border-color: #644C80
}

.btn-default.active,
.btn-default:active,
.btn-default:focus,
.btn-default:hover,
.open .dropdown-toggle.btn-default {
  color: #fff;
  background-color: #644C80
}

@media screen and (max-width: 768px) {

  #search_dropdown {
    display:none !important
  }

  .container > .navbar-collapse,
  .container > .navbar-header {
    margin-right: auto;
    margin-left: auto
  }
}

img.alignleft {
    float: left;
    margin: 0 1em 1em 0;
}

.navbar {
  padding: 10px;
  z-index: 999;
  background: rgba(255,255,255,.9);
  margin-bottom: 0;
  min-height: 0;
  position: relative;
  border-radius: 0;
  border-color: #eee
}

.hidden-xs .navbar-nav > .open > a, 
.hidden-xs .navbar-nav > .open > a:focus, 
.hidden-xs .navbar-nav > .open > a:hover,

.hidden-xs .navbar-nav > .active > a, 
.hidden-xs .navbar-nav > .active > a:focus, 
.hidden-xs .navbar-nav > .active > a:hover,

.hidden-xs .navbar-nav > li > a:focus, 
.hidden-xs .navbar-nav > li > a:hover,

.nav .open > a, 
.nav .open > a:focus, 
.nav .open > a:hover,

.dropdown-menu > li > a:focus, 
.dropdown-menu > li > a:hover,

.dropdown-menu > .active > a, 
.dropdown-menu > .active > a:focus, 
.dropdown-menu > .active > a:hover {
  background-color: #b2afe8;
  color: #fff
}

.navbar-form input {
  min-width: 220px
}

.dropdown-menu .dropdown-menu {
  top: 0;
  right: 100%;
  margin-top: 0
}

.nav-animation {
  animation: fadeIn .5s;
  -webkit-animation: fadeIn .5s
}

.search-animation {
  animation: zoomIn .2s;
  -webkit-animation: zoomIn .2s
}

@media (max-width: 767px) {
	table {
	  table-layout: fixed;
	}
}

/* MOBILE MENU */
#mobile-menu .navbar-collapse {
  max-height: 420px;
  height: 100%;
  overflow-y: auto
}

.visible-xs .navbar-collapse .navbar-nav > li a {
  color: #777;
  display: block;
  padding: 5px 10px;
  cursor: pointer
}

.visible-xs .navbar-nav > li a:hover,
.visible-xs .navbar-nav > li a:focus,
.visible-xs .navbar-nav > li a:active{
  background-color: #b2afe8;
  color: #fff
}

.visible-xs .navbar-collapse .navbar-nav > .active > a, 
.visible-xs .navbar-collapse .navbar-nav > .active > a:focus, 
.visible-xs .navbar-collapse .navbar-nav > .active > a:hover,

.visible-xs .navbar-collapse .navbar-nav > li > a:focus, 
.visible-xs .navbar-collapse .navbar-nav > li > a:hover {
  background-color: #b2afe8;
  color: #fff
}

.visible-xs .navbar-collapse .navbar-nav ul {
  list-style: none;
  padding: 5px 0 0 20px
}

ul li span.menu-toggler {
  cursor: pointer;
  right: 10px;
  top: 14px;
  position: absolute
}

.search-highlight {
  background: #fcf8e3;
  color: #8a6d3b
}

.text-muted {
  color: inherit;
  text-decoration: none;
  font-weight: 700
}

.very-muted {
  text-transform: uppercase;
  color: #aaa!important;
  font-weight: 700;
  display: inline-block;
  font-size: 11px
}

.pager li > a, 
.pager li > span {
  border-radius: 2px;
}

.pager li > a:focus, .pager li > a:hover {
  background-color: #644C80;
  color: #fff
}

.pager > .active > a,
.pager > .active > a:focus,
.pager > .active > a:hover,
.pager > .active > span, 
.pager > .active > span:focus, 
.pager > .active > span:hover {
  background-color: #644C80;
  border-color: #eee;
  color: #fff
}

@media screen and (max-width: 360px) {
  .pager li > a, 
  .pager li > span {
    padding: 3px 8px;
    font-size: 12px
  }
}

/* HEADERS */
.admin-bar .is-sticky {
  margin-top: 28px;
}

#top-bar-wrap {
  font-size: 12px;
  margin-bottom: 0
}

.top-bar-left {
  float: left;
  height: 50px;
  line-height: 50px
}

.top-bar-left span {
  margin-right: 5px
}

.top-bar-left span i {
  margin-right: 5px
}

.top-bar-right {
  float: right;
  height: 50px;
  line-height: 50px
}

#top-bar-social a {
  display: block;
  float: left;
  font-size: 18px;
  margin-left: 10px
}

#top-bar #top-bar-social.top-bar-right a :hover {
  transition: all .3s ease 0s;
  -webkit-transition: all .3s ease 0s
}

#top-bar-social a .fa-facebook:hover { color: #3b559f }
#top-bar-social a .fa-twitter:hover { color: #00acee }
#top-bar-social a .fa-linkedin:hover { color: #007bb6 }
#top-bar-social a .fa-google-plus:hover { color: #dd4c39 }
#top-bar-social a .fa-dribbble:hover { color: #f36798 }
#top-bar-social a .fa-pinterest:hover { color: #cc2127 }
#top-bar-social a .fa-flickr:hover { color: #ff0084 }
#top-bar-social a .fa-instagram:hover { color: #517fa4 }
#top-bar-social a .fa-vimeo-square:hover { color: #0CF }
#top-bar-social a .fa-rss:hover { color: #ffac3d }

.logo { margin-top: 10px }
.logo h2.site-title { margin:5px 0 }

.is-sticky {
  z-index: 9999;
  left: 0;
  position: fixed;
  top: 0;
  width: 100%;
  box-shadow: 0 0 20px 0 rgba(0,0,0,.2);
  border-top: 3px solid #644C80;
  -webkit-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:.5s;
  animation-duration:.5s
}

#sub-header {
  margin-top: 0;
  padding: 28px 0
}

.sub-header-title > h1 {
  font-size: 20px
}

#breadcrumbs {
  text-align: right;
  font-size: 11px;
  font-weight: 500
}

#breadcrumbs a, .current {
  padding: 0 5px
}

@media (max-width: 768px) {
  #breadcrumbs {
    padding: 10px 0
  }
}

/* CONTENT */
.single-featured {
  -webkit-transition: opacity .3s linear;
  transition: opacity .3s linear;
  display: block;
  margin: auto
}

.single-featured:hover {
  opacity: .8;
  box-shadow: 0 0 0 5px #644C80 inset
}

.hentry {
  padding: 20px 25px 5px;
  border-radius: 3px;
  box-shadow: 0 1px 0 #ccc;
  margin-bottom: 3em;
  position: relative
}

.hentry:after {
  border-bottom-color: #ccc!important;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-style: solid;
  border-top: 5px solid transparent;
  border-width: 5px;
  bottom: 0;
  content: "";
  height: 0;
  left: 50%;
  margin-left: -3px;
  position: absolute;
  width: 0
}

.sticky {
  display: block;
  border-color: rgba(178,175,232,.5);
  background: #f7fcf7!important;
  border-style: solid;
  border-width: 1px;
}

.sticky-pin:before {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAMAAABhq6zVAAAAdVBMVEUAAAD///8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABnRQBiQQAAAAAAAAAAAAAAAAAAAAAAAAA7JwDcmADtogDlnADTkADXkwDNjQDsoQDLjADroADelwDclgDalQDlnADkmwDhmQDwpADwpADwpACYC0YSAAAAJnRSTlMAAAMFCQsOERUhJCUlJygqLzA8QUFocqGjsrq6vMPL0NLZ2t3z/XhFW2IAAABJSURBVAjXY2BEAgxMrOKqakCgIsbAyMDCKacGBtJADpuAAoQjC+IIkslRlkFwlESEpSAcAXlFXg5+IUkwh0+Ch5mJnZtLlIERAJzKC8yA9G2GAAAAAElFTkSuQmCC);
  background-repeat: no-repeat;
  content: "";
  padding: 10px;
  position: absolute;
  top: -5px;
  right:-5px
}

.updated-on, 
.updated:not(.published) { display: none }

.group-blog .byline, .single .byline { display: inline }

.page-links {
  margin: 0 0 25px;
}

.page-links span {
  background-color: #644c80;
  border: 1px solid #ccc;
  border-radius: 3px;
  color: #fff;
  display: inline-block;
  padding: 3px 10px
}

.page-links a span {
  background-color: #fff;
  color: #333;
  transition: all .5s ease 0s;
  -webkit-transition: all .5s ease 0s
}

.page-links a:hover span {
  background-color: #644c80;
  color: #fff
}

.edit-link { 
  opacity: 0; 
  transition: all .5s ease 0s;
  -webkit-transition: all .5s ease 0s;
}
.hentry:hover .edit-link { opacity: 1 }

.page-title:before {
  border-bottom: 1px solid #b2afe8;
  bottom: -1px;
  content: "";
  position: absolute;
  width: 40px
}

.page-title {
  border-bottom: 1px solid #eee;
  padding: 10px 0;
  position: relative
}

.entry-meta:before {
  border-bottom: 1px solid #ccc;
  bottom: -1px;
  content: "";
  height: 0;
  left: 0;
  position: absolute;
  width: 25px
}

.entry-meta {
  border-bottom: 1px solid #eee;
  border-top: 1px solid #eee;
  font-size: 10px;
  font-weight: 700;
  position: relative;
  text-transform: uppercase
}

.entry-meta:after {
  border-bottom: 1px solid #ccc;
  content: "";
  height: 0;
  left: 0;
  position: absolute;
  top: -1px;
  width: 25px
}

.entry-content {
  padding: 25px 0
}

.entry-content,
.comment-content {
  -webkit-hyphens: auto;
  hyphens: auto;
  word-wrap: break-word;
}

.entry-content dd {
  font-size: .9em;
  color: #787878;
  margin-bottom: 1.5em
}

.entry-content pre {
  background: #eee;
  border: 1px solid #cecece;
  padding: 10px
}

.entry-footer {
  border-top: 1px solid #eee;
  font-size: 10px;
  font-weight: 700;
  position: relative;
  text-transform: uppercase
}

.entry-footer:after {
  border-bottom: 1px solid #ccc;
  content: "";
  height: 0;
  left: 0;
  position: absolute;
  top: -1px;
  width: 25px
}

.entry-meta, 
.entry-footer { padding: 10px 0 }

.entry-meta i, 
.entry-footer i { padding-right: 1px }

.sticky-post, 
.byline, 
.cat-links, 
.comments-link, 
.posted-on, 
.tags-links, 
.post-views, 
.updated-on, 
.vcard {
  margin-right: 5px
}

.bypostauthor { display:block }

ul.post-share-buttons {
  border-top: 1px solid rgba(0,0,0,.07);
  padding: 15px 10px 0 0;
  margin: 2em 0 0;
  width: 100%;
  float: left
}

ul.post-share-buttons li { 
  float: left; 
  margin: 0 15px 0 0
}

ul.post-share-buttons li.social-question { width: auto}
ul.post-share-buttons li.twitter { width: 80px}
ul.post-share-buttons li.facebook { width: 125px}
ul.post-share-buttons li.google { width: 75px}
ul.post-share-buttons li.pinterest { width: 80px}
ul.post-share-buttons li.twitter iframe { margin:0}

@media (max-width:480px) {
  ul.post-share-buttons li {
    float: none;
    margin: 10px 0
  }
}

.entry-attachment img { width:100% }

.format-chat .entry-content > p {
  clear: both;
  font-size: 14px;
  line-height: 20px;
  padding: 6px 12px;
  margin-top: 10px;
  position: relative
}

.format-chat .entry-content > p:nth-child(2n+1) {
  background: none repeat scroll 0 0 #f6f6f6;
  border-radius: 0 12px 12px 12px;
  float: left;
  -webkit-box-shadow: inset 1px -1px rgba(0,0,0,.15);
  box-shadow: inset 1px -1px rgba(0,0,0,.15);
}

.format-chat .entry-content > p:nth-child(2n) {
  background: none repeat scroll 0 0 #e4f5e4;
  border-radius: 12px 0 12px 12px;
  float: right;
  -webkit-box-shadow: inset 0 -1px rgba(0,0,0,.15);
  box-shadow: inset 0 -1px rgba(0,0,0,.15);
}


/* AUTHOR BOX */
.author-bio {
	padding: 20px 24px 15px 100px;
	box-shadow: 0 1px 0 #ccc;
	margin-bottom: 40px;
	position: relative;
}

.author-bio .bio-avatar {
	float: left;
	height: auto;
	margin: 0 0 8px -80px;
	position: relative;
	width: 64px;
}

.author-bio .bio-avatar img {
  width: 100%;
}

.author-bio .bio-name {
	margin-top: 0
}

.author-socials {
	margin-bottom: 5px
}

ul.author-social-bar {
	display: inline-block;
	padding-left: 0px;
}

.author-social-bar-text {
  margin: 0 5px;
  margin-left: 0;
  font-size: 11px;
  text-transform: uppercase
}

ul.author-social-bar li {
  display: inline-block;
  margin: 0 1px
}

ul.author-social-bar li a {
  border-radius: 2px;
  color: #fff;
  display: inline-block;
  height: 20px;
  line-height: 18px;
  text-align: center;
  width: 20px;
  transition: all .5s ease 0s;
  -webkit-transition: all .5s ease 0s
}

ul.author-social-bar i {
	font-size: 13px;
}

ul.author-social-bar li a:hover { color: #fff }
.author-social-bar a.facebook { background-color: #3b5998 }
.author-social-bar .facebook:hover { background-color: #2d4373 }
.author-social-bar a.google_plus { background-color: #dd4b39 }
.author-social-bar a.google_plus:hover { background-color: #c23321 }
.author-social-bar a.twitter { background-color: #55acee }
.author-social-bar a.twitter:hover { background-color: #2795e9 }
.author-social-bar .linkedin { background-color: #007bb6 }
.author-social-bar a:hover { background-color: #005983 }

/* COMMENTS */
#comments { margin-top: 3em }
.comment-reply-title { margin-top: 2em }
.comments-header { margin-top: 1em }

.commentlist {
  list-style-type: none;
  margin-left: 0;
  padding-left: 0
}

.commentlist li .comment-body {
  background: #fff;
  font-size: 14px;
  overflow: hidden;
  padding: 25px 25px 15px;
  margin-bottom: 15px;
  margin-top: 1em;
  position: relative;
  border: 1px solid #e8e8e8;
  border-bottom: 1px solid #dadada;
  border-radius: 4px
}

.commentlist .children li { list-style:none }
.commentlist .children li.comment > div[id*=comment-] { background:#f7fcf7 }
#reviews #comments ol.commentlist li img,
.commentlist > li .photo {
  display: block;
  float: left;
  height: 64px;
  line-height: 0;
  margin-right: 15px;
  overflow: hidden;
  width: 64px
}

.commentlist > li .comment-author {
  font-size: 13px;
  font-weight: 700
}

.commentlist > li .comment-meta { font-size: 12px }
.commentlist > li .comment-meta a { color: #999 }
.commentlist > li .comment-meta a:hover { color: #644C80 }

.commentlist > li .reply {
  position: absolute;
  right: 0;
  bottom: 0
}

.commentlist > li .comment-reply-link {
  font-size: 10px;
  padding: 3px 7px;
  border-radius: 4px 0 4px;
  text-transform: uppercase
}

.commentlist > li .comment-meta .comment-edit-link {
  background-color: #f5f5f5;
  border: 1px solid #ddd;
  border-radius: 0 4px;
  color: #9da0a4;
  font-size: 10px;
  font-weight: 700;
  padding: 3px 7px;
  position: absolute;
  right: -1px;
  top: -1px
}

.commentlist > li .comment-meta a.comment-edit-link:hover {
  color: #222
}

.wpbs-textarea { margin-top: 15px }

.form-allowed-tags code {
  white-space: inherit;
  word-wrap: break-word
}

/* SIDEBAR */
#sidebar { border-radius: 3px }

.sidebar-padder ul {
  list-style: none;
  padding: 5px
}

.widget-area { padding: 20px }

@media screen and (max-width: 480px) {
  aside.widget-area {
    font-size: 7mm;
  }
}

.widget { margin-bottom: 20px }

#sidebar .widget_archive li:before,#sidebar .widget_categories li:before {
  content: '\f105';
  font-family: FontAwesome;
  color: #888;
  margin-right: 5px
}

#sidebar .widget_archive li a:hover,
#sidebar .widget_categories li a:hover {
  padding: 2px
}

.widget-title:before {
  border-bottom: 1px solid #b2afe8;
  bottom: -1px;
  content: "";
  position: absolute;
  width: 40px
}

.widget-title {
  border-bottom: 1px solid rgba(119,119,119,.1);
  padding: 10px 0;
  position: relative
}

.tagcloud { padding: 10px }

.cat-count-span {
  float: right;
  color: #777
}

/* FOOTER */
img.footer-logo {
  float: left;
  margin: 0 10px
}

.footer-wrapper {
  border-top: 3px solid #b2afe8;
  color: #aaa;
  padding: 20px;
  font-size: 13px
}

.footer-widgets { margin: 15px 0 }

.footer-widget-title:before {
  border-bottom: 1px solid #b2afe8;
  bottom: -1px;
  content: "";
  position: absolute;
  width: 40px
}

.footer-widget-title {
  font-size: 18px;
  font-family: inherit;
  font-weight: 300;
  border-bottom: 1px solid rgba(255,255,255,.2);
  padding: 10px 0;
  margin: 0 0 20px;
  position: relative;
  text-transform: uppercase
}

.footer-content .footer-widgets ul {
  list-style: none;
  padding-left: 5px
}

.footer-content .footer-widgets li:before {
  content: "\f105";
  font-family: FontAwesome;
  padding-right: 5px
}

#footer-socials {
  background: #222;
  margin: 0;
  padding: 0
}

.social-bar {
  padding: 10px;
  margin: 0 5px;
  text-align: left
}

.social-bar-text {
  color: #aaa;
  margin-right: 5px;
  text-transform: uppercase;
  font-size: 12px
}

.social-bar a {
  color: #aaa;
  border: 1px solid rgba(255,255,255,.07);
  border-radius: 50%;
  line-height: 26px;
  width: 28px;
  display: inline-block;
  font-size: 12px;
  text-align: center;
  margin-right: 3px;
  transition: all .9s ease 0s;
  -webkit-transition: all .9s ease 0s
}

.social-bar a:hover { color: #fff }
.social-bar .twitter:hover { background: #00acee }
.social-bar .facebook:hover { background: #3b559f }
.social-bar .google_plus:hover { background: #dd4c39 }
.social-bar .pinterest:hover { background: #cc2127 }
.social-bar .dribbble:hover { background: #00acee }
.social-bar .linkedin:hover { background: #007bb6 }
.social-bar .flickr:hover { background: #ff0084 }
.social-bar .vimeo:hover { background: #0CF }
.social-bar .rss:hover { background: #ffac3d }

.footer-bottom-wrapper {
  background: #111;
  font-size: 13px;
  padding: 10px 0;
  color: #777;
}

.footer-nav ul {
  padding-left: 0
}

.footer-nav { 
  text-align: right
}

.footer-nav li {
  display: inline-block;
  border-left: 1px solid #777;
  line-height: 10px;
  margin-left: 4px
}

.footer-nav li:first-child { border-left: none }

.footer-nav li a {
  padding-left: 8px;
  transition: all .4s ease 0s;
  -webkit-transition: all .2s ease 0s;
  color: #777
}

.footer-nav li a:hover, 
.footer-nav li a:active, 
.footer-nav li a:focus {
  color: #908dbd
}

@media (max-width: 767px) {
  .copyright-text, .footer-nav {
    text-align: center !important;
    padding: 5px 0
  }
}

/* TO TOP */
.to-top {
  display: none;
  border-radius: 10%;
  text-align: center;
  padding-top: 12px;
  position: fixed;
  bottom: 4rem;
  right: 2rem;
  width: 4.2rem;
  height: 4.2rem;
  color: #fff;
  background-color: rgba(0,0,0,.1);
  cursor: pointer
}

.to-top:hover {
  color: #fff!important;
  background-color: #111;
  text-decoration: none
}

/* ERROR 404 */
.error-404 {
  background: #fff;
  padding: 20px
}

.error-404-box {
  margin: 0 0 50px;
  padding: 0;
  text-align: center
}

.error-message {
  font-size: 40px;
  text-shadow: 1px 1px 0 rgba(0,0,0,.12);
  color: #999;
  margin: 20px 0;
  padding: 20px
}

.error-message:before {
  content: "\f05a";
  font-family: FontAwesome;
  margin-right: 15px;
  color: #999
}

@media (max-width: 767px) {
  .error-message {
    font-size: 30px
  }
}

/* SHORTCODES */
ul.list-arrow {
  padding-left: 20px
}

ul.list-arrow li:before {
  content: "\f00c";
  font-family: FontAwesome;
  margin-right: 5px;
  color: green
}
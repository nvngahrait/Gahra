<footer id="footer2" class="footer-home">
  <div class="container">
  <div class="footerMenu"><ul id="menu-footer-en" class="menu"><li id="menu-item-22538" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22538"><a href="webpolicy.html">Website Policies</a></li>
<li id="menu-item-22537" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22537"><a href="help.html">Help</a></li>
<li id="menu-item-2535" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2535"><a href="feedback.html">Feedback</a></li>
<li id="menu-item-22536" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22536"><a href="contact.html">Contact Us</a></li>
</ul></div>   <div class="copyRights">
     <div class="pd-bottom5 color-white ctnt-ownd-dis">Content Owned by Naveen Yadav</div>
      <div class="copyRightsText">
              <p>© Village Gahra , Developed and hosted by <a href="http://www.instagram.com/nvn.gahra" target="_blank">Naveen Yadav Gahra</a>,<br><a href="http://www.ducic.ac.in" target="_blank">B.Tech in Information Technology</a>, Villlager of Gahra, Haryana</p>
        <p>Last Updated: <b>August 18, 2020</b></p>      </div>
      
  </div>
  <a href="javascript:void(0)" class="cd-top" title="Go to Top"><i class="fas fa-arrow-up"></i></a>
</footer>

<script>
  jQuery(document).ready(function(jQuery){
  var isExternal = function(url) {
     return !(location.href.replace("http://", "").replace("https://", "").split("/")[0] === url.replace("http://", "").replace("https://", "").split("/")[0]);
  }
var comp = new RegExp(location.host);
jQuery('a').each(function(){
 if(!comp.test(jQuery(this).attr('href'))){
   var href = jQuery(this).attr('href');
     if(typeof href == 'undefined' ){
        jQuery(this).attr('href','javascript:void(0)');
        href = '#';
     }
     if(href.indexOf('://') > 0 || href.indexOf('//') === 0){
        if(href!='javascript:void(0);' &&  !href.match("/^\/[a-z0-9]+jQuery/i") && href!='#'  && href!='/' && href!='' && !jQuery(this).hasClass('fancybox.iframe') && !jQuery(this).hasClass('fancybox')){
        jQuery(this).prop('title', 'External site that opens in a new window');
         jQuery(this).prop('target', '_blank');
        }
     }
}
});
});
  </script>
          <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131929568-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-131929568-1');
        </script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/plugins/common_utility//js/common.js?ver=1.1'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/themes/district-theme-6/js/jquery.flexslider.js?ver=1.1'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/themes/district-theme-6/js/easyResponsiveTabs.js?ver=1.1'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/themes/district-theme-6/js/jquery.fancybox.js?ver=1.1'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/themes/district-theme-6/js/style.switcher.js?ver=1.1'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/themes/district-theme-6/js/menu.js?ver=1.1'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/themes/district-theme-6/js/table.min.js?ver=1.1'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/themes/district-theme-6/js/custom.js?ver=1.1'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/themes/district-theme-6/js/extra.js?ver=1.1'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-includes/js/wp-embed.min.js?ver=5.1.1'></script>
<!-- back to top start -->
<script type="text/javascript">
jQuery(document).ready(function(){
var offset = 300,
  offset_opacity = 1200,
  scroll_top_duration = 700,
  $back_to_top = jQuery('.cd-top');
jQuery(window).scroll(function(){
  ( jQuery(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
  if( jQuery(this).scrollTop() > offset_opacity ) {
    $back_to_top.addClass('cd-fade-out');
  }
});
//smooth scroll to top
$back_to_top.on('click', function(event){
  event.preventDefault();
  jQuery('body,html').animate({
    scrollTop: 0 ,
    }, scroll_top_duration
  );
});

});
</script>
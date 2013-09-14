(function ($) {
  jQuery(document).ready(function() {
    home = jQuery('.breadcrumb a:first').attr('href');
    title = jQuery('.breadcrumb a:first').html();
    jQuery('.page-node #zone-content').prepend("<div id=\"logo-link\"><a href=\"" + home + "\">" + title + "</a></div>");
});
})(jQuery);
<?php
/**
 * The template for displaying the footer.
 */
?>
</div> <!-- Close <div class="yui3-g">  from header.php -->
    
<div class="yui3-u-1">
    <div class="content">
        <a name="sponsors"></a>
        <h2><?php echo __("Commanditaires cette année"); ?></h2>
        <?php echo fetchSponsors( get_current_language() ); ?>
    </div>
</div>
<!-- move to sidebar? -->
<div class="footer yui3-u-1">
    <ul>
        <li><?php echo __('Construit avec');?></li>
        <li><a href="http://cakephp.org/">cakephp</a></li>
        <li><a href="http://wordpress.org/">wordpress</a></li>
        <li><a href="http://wpml.org/">multilingual wordpress</a></li>
    </ul>
</div>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

    wp_footer();
?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18624069-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>

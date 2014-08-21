<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="main-container contact">

    <div class="aside col-lg-3">
        <?php the_content(); ?>
    </div>
    <div class="col-lg-9 map-box">
        <script src="http://maps.googleapis.com/maps/api/js?sensor=true" type="text/javascript"></script>
        <div id="map_canvas" style="width: 705px; height: 530px;">&nbsp;</div>
        <script type="text/javascript">
            // <![CDATA[
            var myLatlng = new google.maps.LatLng(<?php echo get_post_meta($post->ID, 'map_locate', true) ?>);
            var mapOptions = {
                zoom: 18,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: "Zaicev"
            });
            // ]]>

        </script>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
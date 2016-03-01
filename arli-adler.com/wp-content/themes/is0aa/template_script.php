<?php
/*
Template Name: Скрипт
*/
?>
<?php get_header(); ?>

<div id="mid" class="mid" style="position:relative; padding-top:25px;">
<script src="https://wubook.net/js/wbbook.jgz"></script>

<div id="_wbord_">

  <a href="http://en.wubook.net/" style="display: block; margin-top: 5px; text-decoration:none;border:none">

    <img src="https://wubook.net/imgs/default/booking_by_wu.gif" alt="Online Booking System" title="Hotel and tourism technologies" style="border:none;text-decoration:none"/>

  </a>

</div>

<script>

  var WuBook= new _WuBook(1408442648);

  var wbparams= {

        lang: 'ru',

        layout: 'hm',

        width: 1000,

        height: 814,

        mobile: 1,

        mheight: 640

  };

  WuBook.design_iframe("_wbord_", wbparams);

</script>
</div>

<?php get_footer();?>
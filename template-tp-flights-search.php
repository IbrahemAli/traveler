<?php
/**
 * Template Name: TravelPayout Search Result
 */

get_header();
?>
<div class="st-main-content">
    <div class="st-tp-search-result">
        <?php
        $whitelabel_name = st()->get_option('tp_whitelabel', 'whitelabel.travelerwp.com');
        if(isset($_SERVER['HTTPS'])){
            if ($_SERVER['HTTPS'] != "on") {
                $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,strpos( $_SERVER["SERVER_PROTOCOL"],'/'))).'://';
            }else{
                $protocol = '//';
            }
        }else{
            $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,strpos( $_SERVER["SERVER_PROTOCOL"],'/'))).'://';
        }
        ?>
        <script data-optimize="0" data-no-optimize="1" charset="utf-8" type="text/javascript" src="<?php echo ($protocol.$whitelabel_name); ?>/iframe.js"></script>
    </div>
</div>
<?php
get_footer();
?>
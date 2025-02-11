<?php
$result_page = st()->get_option('rental_search_result_page');
$class = '';
$id = 'id="sticky-nav"';
if (isset($in_tab)) {
    $class = 'in_tab';
    $id = '';
}

?>
<div class="search-form <?php echo esc_attr($class); ?> st-border-radius">
    <form action="<?php echo esc_url(get_the_permalink($result_page)); ?>" class="form d-flex align-items-center" method="get">
        <?php
        echo stt_elementorv2()->loadView('services/rental/search-form/location', ['has_icon' => true]);
        echo stt_elementorv2()->loadView('services/rental/search-form/date');
        echo stt_elementorv2()->loadView('services/rental/search-form/guest', ['has_icon' => true]);
        ?>
        <div class="button-search-wrapper">
            <button class="btn btn-primary btn-search">
                <span class="stt-icon stt-icon-search-normal"></span>
                <?php echo esc_html__('Search', 'traveler'); ?>
            </button>
        </div>
    </form>
</div>

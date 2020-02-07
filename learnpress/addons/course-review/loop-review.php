<?php
/**
 * Template for displaying loop course review.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/addons/course-review/loop-review.php.
 *
 * @author ThimPress
 * @package LearnPress/Course-Review/Templates
 * version  3.0.1
 */

// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;
?>

<li class="comment">
    <div class="content-comment">
        <div class="author">
            <div class="author-infor">
                <h4 class="author-name">
                    <?php do_action( 'learn_press_before_review_username' ); ?>
                    <?php echo esc_html($review->display_name); ?>
                    <?php do_action( 'learn_press_after_review_username' ); ?>
                </h4>
                <span class="comment-extra-info">
                    <?php
                    printf( get_comment_date( get_option( 'date_format' ), $review->comment_id ) );
                    ?>

                </span>
            </div>
        </div>
        <div class="message">
            <div style="display: none;">
            <?php
            print_r($review);
            ?>
            </div>
            <div class="star">
                <?php
                    $num_ratings = 5;
                    $course_rate = $review->rate;
                    $non_star = 5 - intval($course_rate);
                ?>
                <?php for ( $i = 0; $i < intval( $review->rate ); $i ++ ) { ?>
                    <i class="fa fa-star"></i>
                <?php } ?>
                <?php for ( $j = 0; $j < intval( $non_star ); $j ++ ) { ?>
                    <i class="fa fa-star-o"></i>
                <?php } ?>
            </div>
            <p><strong><?php echo esc_html($review->title); ?></strong></p>
            <p>
                <?php do_action( 'learn_press_before_review_content' ); ?>
                <?php echo esc_html($review->content); ?>
                <?php do_action( 'learn_press_after_review_content' ); ?>
            </p>
        </div>
    </div>
</li>
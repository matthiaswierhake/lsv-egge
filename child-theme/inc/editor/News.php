<?php
require_once __DIR__ . '/Field.php';
require_once __DIR__ . '/Card.php';
require_once __DIR__ . '/Form.php';
require_once __DIR__ . '/Toolbar.php';

if (!defined('ABSPATH')) {
    exit;
}

class LSV_News
{

    public static function render()
    {

        ob_start();
        $action = $_GET['action'] ?? 'list';
        ?>

        <?php
        echo LSV_Toolbar::render(
            'Neuigkeiten',
            '?module=news&action=new'
        );
        ?>

        <?php if ($action === 'new') : ?>

        <p>
            <a href="?module=news">
                ← Zurück zur Liste
            </a>
        </p>

        <?php echo LSV_Form::begin('Neue Neuigkeit'); ?>

        <?php
        LSV_Form::text(
            'title',
            'Titel'
        ); ?>

        <?php echo LSV_Form::end(); ?>

    <?php else : ?>
        <?php

        $query = new WP_Query( array(
            'post_type'      => 'post',
            'posts_per_page' => 20,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ) );

        ?>

        <?php echo LSV_Card::begin( 'Vorhandene Neuigkeiten' ); ?>

        <?php if ( $query->have_posts() ) : ?>

            <ul class="lsv-news-list">

                <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                    <li>

                        <strong><?php the_title(); ?></strong><br>

                        <small><?php echo esc_html( get_the_date( 'd.m.Y' ) ); ?></small>

                    </li>

                <?php endwhile; ?>

            </ul>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>

            <p>Noch keine Neuigkeiten vorhanden.</p>

        <?php endif; ?>

        <?php echo LSV_Card::end(); ?>

    <?php endif; ?>


        <?php

        return ob_get_clean();

    }

}
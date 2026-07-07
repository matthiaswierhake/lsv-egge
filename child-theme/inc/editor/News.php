<?php
require_once __DIR__ . '/Field.php';
require_once __DIR__ . '/Card.php';
require_once __DIR__ . '/Form.php';

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class LSV_News {

    public static function render() {

        ob_start();
        ?>

        <?php echo LSV_Form::begin( 'Neue Neuigkeit' ); ?>

                <?php

                echo LSV_Field::text(
                    'title',
                    'Titel'
                );

                ?>

        <?php echo LSV_Form::end(); ?>

        <?php

        return ob_get_clean();

    }

}
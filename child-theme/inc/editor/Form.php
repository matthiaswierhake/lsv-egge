<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class LSV_Form {

    public static function begin( $title ) {

        ob_start();
        ?>

        <form class="lsv-form" method="post">

        <h3><?php echo esc_html( $title ); ?></h3>

        <?php

        return ob_get_clean();
    }

    public static function end( $button_text = 'Speichern' ) {

        ob_start();
        ?>

        <p class="lsv-form-actions">
            <button type="submit" class="button button-primary">
                <?php echo esc_html( $button_text ); ?>
            </button>
        </p>

        </form>

        <?php

        return ob_get_clean();
    }
}
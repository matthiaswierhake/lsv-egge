<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class LSV_Field {

    public static function text( $name, $label, $value = '' ) {

        ob_start();
        ?>

        <div class="lsv-field">

            <label for="<?php echo esc_attr( $name ); ?>">
                <?php echo esc_html( $label ); ?>
            </label>

            <input
                type="text"
                id="<?php echo esc_attr( $name ); ?>"
                name="<?php echo esc_attr( $name ); ?>"
                value="<?php echo esc_attr( $value ); ?>"
                class="lsv-input"
            >

        </div>

        <?php

        return ob_get_clean();

    }

}
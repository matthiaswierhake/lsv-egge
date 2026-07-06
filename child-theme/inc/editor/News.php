<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class LSV_News {

    public static function render() {

        ob_start();
        ?>

        <h2>📰 Neuigkeiten</h2>

        <p>
            Hier entsteht das News-Modul.
        </p>

        <div class="lsv-card">

            <p>

                Noch keine Neuigkeiten vorhanden.

            </p>

            <p>

                <button class="button button-primary">

                    ➕ Neue Neuigkeit

                </button>

            </p>

        </div>

        <?php

        return ob_get_clean();

    }

}
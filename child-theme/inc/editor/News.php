<?php
require_once __DIR__ . '/Field.php';

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

            <form>

                <?php

                echo LSV_Field::text(
                    'title',
                    'Titel'
                );

                ?>

                <p>

                    <button class="button button-primary">

                        Speichern

                    </button>

                </p>

            </form>

        </div>

        <?php

        return ob_get_clean();

    }

}
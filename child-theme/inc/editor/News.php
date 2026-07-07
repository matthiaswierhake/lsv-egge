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

        <?php echo LSV_Card::begin('Neuigkeiten'); ?>

        <p>
            Noch keine Neuigkeiten vorhanden.
        </p>

        <?php echo LSV_Card::end(); ?>

    <?php endif; ?>


        <?php

        return ob_get_clean();

    }

}
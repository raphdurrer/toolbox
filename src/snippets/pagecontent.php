<?php if ($layouts =  $data->layout()->toLayouts()) : ?>
    <?php foreach ($layouts as $layout) : ?>

        <?php
        $properties =  $layout->layoutProperties()->toObject();
        $layoutId = $properties->layoutid();
        $layoutClasses = $properties->layoutClasses();
        $grid = $layout->gridproperties()->toObject();
        ?>

        <section role="row" <?php e($layoutId->isNotEmpty(), "id='" . $layoutId . "'"); ?> class="layout <?php e($layoutClasses->isNotEmpty(),  str_replace(",", "", $layoutClasses)) ?>" style="--colCount:<?= $grid->colcount() ?>; --gridGap:<?= $grid->gridgap() ?>; --blockStart:<?= $properties->layoutBlockStart() ?>; --blockEnd:<?= $properties->layoutBlockEnd() ?>">
            <?php foreach ($layout->columns() as $column) : ?>
                <div class="column" style="--columns:<?= $column->span(12) ?>">
                    <?= $column->blocks() ?>
                </div>
            <?php endforeach; ?>
        </section>
    <?php endforeach; ?>
<?php endif; ?>
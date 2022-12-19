<?php if ($layouts =  $data->layout()->toLayouts()) : ?>
    <?php foreach ($layouts as $layout) : ?>

        <?php
        $properties =  $layout->layoutProperties()->toObject();
        $layoutId = $properties->layoutid();
        $layoutClasses = $properties->layoutClasses();
        ?>

        <section <?php e($layoutId->isNotEmpty(), "id='" . $layoutId . "'"); ?> <?php e($layoutClasses->isNotEmpty(), "class='" . str_replace(",", "", $layoutClasses) . "'") ?> style="--blockStart:<?= $properties->layoutBlockStart() ?>; --blockEnd:<?= $properties->layoutBlockEnd() ?>">
            <div class="row" role="row">
                <?php foreach ($layout->columns() as $column) : ?>
                    <div class="column" style="--columns:<?= $column->span(12) ?>">
                        <?= $column->blocks() ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>
<?php

use Kirby\Toolkit\Html;

 if ($logo = $data->contact()->toObject()->logo()->toFile()) : ?>
    <a href="<?= option('toolbox.siteUrl'); ?>" class="site-logo">
        <?php if ($logo->extension() == 'svg') : ?>
            <?= svg($logo) ?>
        <?php else : ?>
            <?= Html::img($logo->url()) ?>
        <?php endif; ?>
    </a>
<?php endif; ?>
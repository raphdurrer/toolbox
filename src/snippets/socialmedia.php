<div class="socialmedias">
    <?php

    use Kirby\Toolkit\Html;

    foreach ($data->socialmedias()->toStructure() as $social) : ?>
        <?= Html::link($social->platform() . '/' . $social->idslug(), $social->platform(), [
            'class' => 'socialmedia',
            'target' => '_blank',
            'rel' => 'noopener noreferrer'
        ]) ?>
    <?php endforeach; ?>
</div>
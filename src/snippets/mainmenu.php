<?php
$menu = $data->menu()->toStructure();

if ($menu->isNotEmpty()) : ?>
    <nav class="site-menu" role="navigation">
        <ul>
            <?php foreach ($menu as $item) : ?>
                <?php if ($mainMenuItem = $item->mainMenu()->toPage()) : ?>
                    <li>
                        <a href="<?= $mainMenuItem->url() ?>">
                            <?= $mainMenuItem->title() ?>
                        </a>

                        <?php $subMenu = $item->subMenu()->toPages(); ?>
                        <?php if ($item->hasSubmenu()->isTrue() && $subMenu->isNotEmpty()) : ?>
                            <ul class="submenu-list">
                                <?php foreach ($subMenu as $subItem) : ?>
                                    <li>
                                        <a href="<?= $subItem->url() ?>">
                                            <?= $subItem->title() ?>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        <?php endif ?>
                    </li>
                <?php endif ?>
            <?php endforeach ?>
        </ul>
    </nav>
<?php endif ?>
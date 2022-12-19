<?php

use Kirby\Toolkit\Html;

if ($contact = $data->contact()->toObject()) : ?>
    <address class="address" role="contentinfo">
        <span>
            <?php e($contact->name()->isNotEmpty(), $contact->name()) ?>
        </span>
        <span>
            <?php e($contact->address()->isNotEmpty(), $contact->address()) ?>
        </span>
        <span>
            <?php e($contact->plz()->isNotEmpty(), $contact->plz()) ?>
            <?php e($contact->place()->isNotEmpty(), $contact->place()) ?>
        </span>

        <?php e($contact->email()->isNotEmpty(), Html::email($contact->email())) ?>
        <?php e($contact->tel()->isNotEmpty(), Html::tel($contact->tel())) ?>
        <?php e($contact->website()->isNotEmpty(), Html::link($contact->website())) ?>
    </address>
<?php endif; ?>
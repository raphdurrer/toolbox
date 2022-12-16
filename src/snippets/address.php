<?php if ($contact = $data->contact()->toObject()) : ?>
    <address class="address" role="contentinfo">
        <?php e($contact->name(), $contact->name()) ?>
        <?php e($contact->address(), $contact->address()) ?>
        <?php e($contact->plz(), $contact->plz()) ?>
        <?php e($contact->place(), $contact->place()) ?>
        <?php e($contact->email(), $contact->email()) ?>
        <?php e($contact->tel(), $contact->tel()) ?>
        <?php e($contact->website(), $contact->website()) ?>
    </address>
<?php endif; ?>
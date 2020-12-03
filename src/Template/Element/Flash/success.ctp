<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!--<div class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div>;-->

<div class="alert alert-success" role="alert">
    <?= $message ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

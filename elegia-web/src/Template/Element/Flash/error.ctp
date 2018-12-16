<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="text-white message message-error" onclick="this.classList.add('hidden');"><i class="fas fa-skull-crossbones"></i> <?= $message ?> <i class="fas fa-times float-right"></i></div>

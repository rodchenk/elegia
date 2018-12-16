<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="text-white message message-success" onclick="this.classList.add('hidden')"><i class="fas fa-check"></i> <?= $message ?><i class="fas fa-times float-right"></i></div>

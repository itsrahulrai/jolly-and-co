<?php
/** Social icon row — driven by config.php. Include anywhere inside markup. */
$icons = [
    'facebook'  => ['fab fa-facebook-f', 'Facebook'],
    'twitter'   => ['fab fa-twitter', 'X'],
    'linkedin'  => ['fab fa-linkedin-in', 'LinkedIn'],
    'instagram' => ['fab fa-instagram', 'Instagram'],
    'youtube'   => ['fab fa-youtube', 'YouTube'],
];
?>
<div class="social-links">
    <?php foreach ($icons as $key => [$cls, $label]): if (empty($site['social'][$key])) continue; ?>
        <a href="<?= e($site['social'][$key]) ?>" target="_blank" rel="noopener" class="social-links__link social-links__link--<?= $key ?>" aria-label="<?= $label ?>">
            <span class="social-links__icon"><i class="<?= $cls ?>" aria-hidden="true"></i><span class="sr-only"><?= $label ?></span></span>
        </a>
    <?php endforeach; ?>
</div>

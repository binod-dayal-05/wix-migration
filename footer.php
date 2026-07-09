<?php
// Footer template
?>
<footer class="site-footer" style="background-color: var(--color-black); color: var(--color-white); padding: 40px 20px; text-align: center; font-family: var(--font-ui); font-size: 14px; border-top: 1px solid var(--color-dark-grey);">
    <div class="site-footer-container" style="max-width: var(--site-max-width); margin: 0 auto;">
        <p style="margin: 0;">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Wix-to-WordPress Migration.</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
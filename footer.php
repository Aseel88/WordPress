</div>
<footer class="footer bg-dark text-white">
    <div class="container">
        <div class="row1">
            <?php the_field('footer_contact_label', 'option'); ?>
        </div>
        <div class="row2">
            <?php the_field('footer_email', 'option'); ?></div>
        <div class="row3">
            <?php the_field('footer_copyright', 'option'); ?>
        </div>
        <div class="row4">
            <a href="<?php the_field('footer_github', 'option'); ?>"><i class="fab fa-github"></i></a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>
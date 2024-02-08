<!-- La div principale qui couvre toute la page et sert de fond obscurci -->
<div class="popup-overlay">
    <!-- La div interne qui contient le contenu de la modale -->
    <div class="popup-contact">
        <!-- Une image du formulaire de contact (un visuel) -->
        <img src="<?php echo get_template_directory_uri() . '/assets/images/Contact_header.webp'; ?>" alt="banner contact">
        
        <!-- Appel au formulaire de contact via l'extension Contact Form 7 avec l'ID du formulaire -->
        <?php
        echo do_shortcode('[contact-form-7 id="77f919c" title="NousContacter"]');
        ?>
    </div>
</div>
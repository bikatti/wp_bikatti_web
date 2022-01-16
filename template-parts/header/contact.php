<?php 
/* 
 * Contact (Modal)
 * 
 * 
 * @package    Bikatti
 * @since      Bikatti 0.0.1
 */

?>

<div class="modal micromodal-slide modal--contact" id="contact" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-contact-title">
            <div class="modal__content">
                <header class="modal__header">
                    <h3 class="modal__title" id="modal-contact-title">
                        Contactame
                    </h3>

                    <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                </header>

                <main class="modal__text" id="modal-contact-content">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'contact',
                            'menu_class'      => 'header__nav',
                            'container'       => 'ul'
                        )
                    ); 
                    ?>
                </main>
            </div>
        </div>
    </div>
</div>
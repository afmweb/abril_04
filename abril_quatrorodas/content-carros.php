<div class="container">            
    <footer>

        <section>
            <div class="row marginTop60">
                <?php
                $args = array('post_type' => 'carro', 'posts_per_page' => -1);
                $objCarros = new WP_Query($args);
                while ($objCarros->have_posts()): $objCarros->the_post();
                    ?>
                    <div class="col-md-3">
                        <figure>
                            <?php
                            // check if the post has a Post Thumbnail assigned to it.
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('carros', array('class' => 'img-responsive'));
                            }
                            ?>
    <!--                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/audi.png" alt="" class="img-responsive" />-->
                        </figure>
                        <H2><a href="<?php echo get_the_permalink() ?>" style="color: #000"><?php echo get_the_title() ?></a></H2>
                        <?php the_excerpt() ?>
                        <h3><a href="http://quatrorodas.abril.com.br/materia/troller-t4-x-jeep-renegade-890323" target="_blank">+ TROLLER T4 X JEEP RENEGADE</a></h3>
                    </div>
                <?php endwhile; ?>

            </div>
        </section>

        <div class="clearfix marginTop60"></div>
    </footer> 
</div>
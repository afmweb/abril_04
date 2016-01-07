<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Teste">
        <meta name="author" content="André Fauze Marcelino">
        <link rel="icon" href="http://a.quatrorodas.abrilm.com.br/assets/favicon-f2ed92b6f9166811d1d5898a14bb16bc.ico">

        <!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
<![endif]-->

        <title>
            <?php bloginfo('name'); ?>
            <?php if (is_home()): echo ' - ' . get_bloginfo('description'); ?>
            <?php else: wp_title('|', true); ?>
            <?php endif; ?>
        </title>
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <section>
                <div class="container img-banner hidden-xs">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/banner.png" alt="" />
                </div>
                <div class="container">
                    <a class="toggleMenu" href="#">Menu</a>
                    <ul class="nav nav1">
                        <li  class="banner-xs visible-xs">
                            <h2>
                                <a href="#">
                                    Quatro rodas
                                </a>                   
                            </h2>
                        </li>   
                        <li  class="test">   
                            <h1 class="jq-logo-home">
                                <a href="<?php echo home_url() ?>" class="jq-logo-home">
                                    Quatro Rodas
                                </a> 
                            </h1>  

                        </li>   
                        <li class="visible-xs">
                           <?php echo get_search_form()?>
                        </li>

                        <li>
                            <a href="#">CARROS</a>
                            <ul>
                                <li><a href="#">Link1</a></li>
                                <li><a href="#">Link_2</a></li>
                                <li><a href="#">Link_3</a></li>
                                <li><a href="#">Link_4</a></li>
                            </ul>
                        </li>

                        <li> <a href="#">TESTES</a>
                            <ul>
                                <li>
                                    <a href="#">Link_1</a>
                                    <ul>
                                        <li><a href="#">SubItem1</a></li>
                                        <li><a href="#">SubItem2</a></li>
                                        <li><a href="#">SubItem3</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Link_2</a>
                                    <ul>
                                        <li><a href="#">SubItem1</a></li>
                                        <li><a href="#">SubItem2</a></li>
                                        <li><a href="#">SubItem3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">NOTÍCIAS</a>
                            <ul>
                                <li>
                                    <a href="#">Link_1</a>
                                    <ul>
                                        <li><a href="#">SubItem1</a></li>
                                        <li><a href="#">SubItem2</a></li>
                                        <li><a href="#">SubItem3</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Link_2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">AUTO-SERVIÇO</a>
                        </li>
                        <li><a href="#">GUIA DE COMPRAS</a></li>
                        <li>
                            <a href="#">TABELA FIPE</a></li>
                        <li>
                            <a href="#">ASSINE</a>
                        </li>
                        <li class="hidden-xs">
                            <?php get_search_form(); ?>

                        </li>
                    </ul>
                    <ul class="nav bg-black hidden-xs">
                        <li class="bg-rosa img-mais"><img src="<?php echo get_template_directory_uri() ?>/assets/img/mais-acessados.png" alt=""  class="reset-padding"/></li>
                        <li><a href="#">SALÃO DO AUTOMÓVEL</a></li>
                        <li><a href="#">RENAGADE</a></li>
                        <li><a href="#" >NOVO SANDEIRO</a></li>
                        <li><a href="#" >NOVO FOX</a></li>
                        <li><a href="#" >NOVO KA</a></li>
                        <li><a href="#" >HB 20</a></li>
                        <li><a href="#" >DUSTER</a></li>
                        <li><a href="#" >GOLF</a></li>
                        <li><a href="#" >COROLLA</a></li>
                        <li><a href="#" >CIVIC</a></li>
                        <li><a href="#" >IA-ZI</a></li>
                    </ul>
                </div>                
            </section>
        </header>
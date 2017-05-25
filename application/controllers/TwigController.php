<?php

function getTwigInstance()
{
    $config = [
        'debug' => true,
        'paths' => ['../views/', VIEWPATH],
        'cache' => '../cache',
    ];
    $this->load->library('twig');
    $this->twig->getTwig()->addExtension(new Twig_Extension_Debug());
    return $this->twig;

}

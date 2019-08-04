<?php 
$context = array();
$context['message'] =  'Hello this is my first message from PHP file';


 Timber::render('index.twig', $context);
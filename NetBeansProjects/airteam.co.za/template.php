<?php

/**
 * @file
 * template.php
 */


function airteam_co_za_preprocess_page(&$vars)
{
   if(arg(0) == 'aircraft-sales')
   {
       // Aircraft Sales
       $vars['theme_hook_suggestions'][] = 'page__4';
   }
   else if(arg(1) == 1)
   {
       // Home Page
       $vars['theme_hook_suggestions'][] = 'page__2';
   }
   else if(arg(1) == 6)
   {
       // Contact Us Page
       $vars['theme_hook_suggestions'][] = 'page__3';
   }
   else
   {
       // Normal Page
       $vars['theme_hook_suggestions'][] = 'page';
   }
}

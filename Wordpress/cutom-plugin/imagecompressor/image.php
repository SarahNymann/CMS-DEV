<?php

/*
Plugin Name: Image Compressor
Plugin URI: http://example.com
Description: This is an image compressor plugin for WordPress
Author: Sarah Nymann Jensen
Version: 1.0
*/


add_filter('wp_handle_upload', 'compress_uploaded_image'); // Tilføjer et filter der kører når WordPress håndterer en upload

function compress_uploaded_image($upload)
{

    $file_path = $upload['file'];                           // Henter filens sti
    $file_type = wp_check_filetype($file_path);   // Tjekker hvilken type fil der er uploadet


    if ($file_type['type'] !== 'image/jpeg') {              // Hvis filen ikke er en JPEG, gøres ingenting
        return $upload;
    }



    $editor = wp_get_image_editor($file_path);       // Åbner billedet ved hjælp af WordPress' image editor

    if (is_wp_error($editor)) {                     // Hvis billedet ikke kan åbnes, stopper det her
        return $upload;
    }

    $editor->set_quality(60);                     // Sætter billedkvaliteten til 60 
    $editor->save($file_path);               // Gemmer billedet igen i samme fil og overskriver originalen

    return $upload;                                        // Returnerer upload-data tilbage til WordPress
}


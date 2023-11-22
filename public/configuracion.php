<?php 

    // ---- Determino si estoy en localhost de mi computador o en nube PRODUCCIÓN

    if ( $_SERVER['HTTP_HOST'] == 'ubepwa.000webhostapp.com' ) // ---------- Equipo Local
    {
        // ---------- BD Nube

        define( "SERVIDOR"  , "localhost" ) ;

        define( "BD_DATOS"  , "id21421658_ubepwa" ) ; 

        define( "USUARIO"   , "id21421658_ubeadmin" ); 

        define( "CLAVE"     , "Cesi@2022" );

    }
    else // ------------------------------------------------- Nube
    {
        // ---------- BD Local

        define( "SERVIDOR"  , "localhost" ) ;

        define( "BD_DATOS"  , "01_calif" ) ;

        define( "USUARIO"   , "root" );

        define( "CLAVE"     , "" );

        define( "SITIO"     , "http://localhost/01_calif/" );

    }



?>
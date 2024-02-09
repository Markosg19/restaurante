<?php

namespace App\Constants;

class TableConstants
{


    /*
         * ============================
         *        TABLA USUARIO
         * ============================
         * */
    const USER_TABLE_NAME = "usuarios";

    const USER_FIELDS = ['id', 'nombre', 'email'];


    const PASSWORD_DEFAULT = 1234;
    /*
         * ============================
         *        TABLA PLATOS
         * ============================
         * */

    const PLATOS_TABLE_NAME = "platos";

    const CATEGORIES_OF_PLATOS = ['vegano', 'sin_gluten', 'sin_lactosa', 'normal'];

    const PLATOS_FIELDS = ['id', 'nombre', 'precio', 'categoria'];
}

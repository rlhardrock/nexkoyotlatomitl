LARAVEL


usar composer directo

composer create-project laravel/laravel project  → nexkoyotlatomitl

php artisan serve

http://127.0.0.1:8000



php artisan make:

php artisan make:controller HiveController

configurar en .dev el SGBD

php artisan make:migration create_class_table   
//class es el nombre de la tabla, Laravel construye la estructura
//crear los campos de la tabla 

php artisan migrate
//sincroniza con el motor de BBDD

php artisan migrate:rollback  
//revertir hechos cumplidos por lotes (batch)

php artisan migrate:fresh 
//adicionar mas campos a las tablas existentes
//solo usar en construccion de la BBDD, nunca en produccion

php artisan make:migration add_fieldTable_to_nameTable_table
//adicionar un campo a una tabla sin comprometer la integridad de los datos
// en la migracion agregar   ->nullable()->after('fieldTable')

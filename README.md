## Instrucciones
Crear un archivo **.env** en la carpeta **includes** para colocar su base de datos y se utilizo los correos en una pagina 'Mailtrap' del siguiente link https://mailtrap.io/ para usar el SMB de correo, en el HOST **Ej. http://localhost:123456 ó https://www.prueba.com**, dentro del archivo se coloca esto:

    DB_HOST= Tu host
    DB_USER= El usuario de BD
    DB_PASS= El password de BD
    DB_NAME= El nombre de la BD
	
    EMAIL_HOST= El host del correo
    EMAIL_PORT= El PORT del correo
    EMAIL_USER= El usuario del correo
    EMAIL_PASS= El password del correo
	
	HOST= Tu localhost

## Modo de instalación
npm install
composer install

## Modo de ejecucion
npm run dev

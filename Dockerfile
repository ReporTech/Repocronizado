# Dockerfile
# Usa una imagen base de PHP con Apache
FROM php:8.2-apache

# Establece el directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Habilitar el módulo mod_expires de Apache
# Esto es necesario si tu .htaccess usa ExpiresActive o ExpiresByType
RUN a2enmod expires

# Copia TODOS tus archivos de proyecto desde la raíz de tu repositorio
COPY . .

# Opcional: Si tienes un archivo .htaccess para reescrituras de URLs y usas Apache
# (Si tu .htaccess usa mod_rewrite, asegúrate de que esté habilitado también)
# RUN a2enmod rewrite # Si tu .htaccess usa RewriteEngine, descomenta esta línea

# Exponer el puerto. Apache ya escucha en el 80 por defecto con esta imagen base.
EXPOSE 80

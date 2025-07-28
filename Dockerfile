# Dockerfile
# Usa una imagen base de PHP con Apache
FROM php:8.2-apache 

# Establece el directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Copia TODOS tus archivos de proyecto desde la raíz de tu repositorio
COPY . .

# Opcional: Si tienes un archivo .htaccess en la raíz para reescrituras de URLs y usas Apache
# RUN a2enmod rewrite

# Exponer el puerto. Apache ya escucha en el 80 por defecto con esta imagen base.
EXPOSE 80

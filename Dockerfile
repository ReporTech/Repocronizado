# Dockerfile
# Usa una imagen base de PHP con Apache
FROM php:8.2-apache # Puedes usar otra versión si lo necesitas, por ejemplo php:8.3-apache

# Establece el directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Copia TODOS tus archivos de proyecto desde la raíz de tu repositorio
# (incluyendo srv, css, js, img, index.html, etc.)
# Esto copia todo el contenido de la raíz de tu repositorio al /var/www/html del contenedor
COPY . .

# Opcional: Si tienes un archivo .htaccess en la raíz para reescrituras de URLs y usas Apache
# RUN a2enmod rewrite

# Exponer el puerto. Apache ya escucha en el 80 por defecto con esta imagen base.
EXPOSE 80

# El comando de inicio (entrypoint) para php:apache ya viene por defecto
# (inicia el servidor Apache). No necesitas añadir una línea CMD explícita.

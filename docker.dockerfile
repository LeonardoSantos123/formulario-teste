# Usando a imagem oficial do PHP com Apache
FROM php:8.0-apache

# Copiar todos os arquivos do seu repositório para o diretório do Apache
COPY . /var/www/html/

# Definir permissões para os arquivos
RUN chown -R www-data:www-data /var/www/html

# Expor a porta 80 (padrão para o Apache)
EXPOSE 80
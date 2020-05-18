# covid-19-notification

Aplicação para armazenar os dados de notificações obtidas por meio do formulário focado no enfrentamento à COVID-19 (coronavírus).

## Stack

PHP (>=7.2), Lumen (micro-framework PHP) e PostgreSQL.

## Preparação do ambiente sem docker

- Analisar seção de instalação manual de tecnologias
- Clonar/baixar repositório do projeto (https://github.com/diogomatheus/covid-19-diagnosis)
- Acessar diretório do projeto (covid-19-diagnosis)
- Configurar variáveis de ambiente (.env) com base no documento .env.example
- Instalar dependências do projeto: composer install
- Executar aplicação usando servidor embutido: php -S localhost:8000 -t public
- Acessar: http://localhost:8000

## Preparação do ambiente com docker

- Clonar/baixar repositório do projeto (https://github.com/diogomatheus/covid-19-diagnosis)
- Acessar diretório do projeto (covid-19-diagnosis)
- Executar aplicação usando docker: docker-compose up
- Acessar: http://localhost:8000

## Instalação manual de tecnologias (preparação do ambiente sem docker)

```
sudo apt-get install software-properties-common python-software-properties
sudo add-apt-repository -y ppa:ondrej/php
sudo apt-get update
sudo apt-get install php7.2 php7.2-cli php7.2-common
sudo apt-get install php7.2-curl php7.2-gd php7.2-json php7.2-mbstring php7.2-intl php7.2-mysql php7.2-xml php7.2-zip php7.2-pgsql
a2enmod php7.2
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e0012edf3e80b6978849f5eff0d4b4e4c79ff1609dd1e613307e16318854d24ae64f26d17af3ef0bf7cfb710ca74755a') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
```

## Script do banco de dados

- Versão inicial disponível em /database/script.sql
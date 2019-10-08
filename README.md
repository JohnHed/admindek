###Detalhes do pacote

### Admindex



###Instalação

1 - instalar o pacote via composer:

```
composer require johnhed/admindex

```
2 - Substituir as views

```
php artisan make:admindex

```

3 - Publique os recursos públicos selecionando o comando relativo ao pocote:

```
php artisan vendor:publish

```
4 - Adcionar helper no composer.json na raiz do projeto

```
 "autoload": {
        "psr-4": {
            "App\\": "app/",
        },
        ...
        "files": [
            ...
            "app/Helpers/admindex.php"
        ]
    },

```

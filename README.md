###Detalhes do pacote

### admindek



###Instalação

1 - instalar o pacote via composer:

```
composer require johnhed/admindek

```
2 - Substituir as views

```
php artisan make:admindek

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
            "app/Helpers/admindek.php"
        ]
    },

```

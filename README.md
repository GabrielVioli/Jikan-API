# Jikan Anime Search

Uma aplicação minimalista desenvolvida em Laravel que consome a API do Jikan (MyAnimeList) para buscar informações detalhadas sobre animes, exibindo título, quantidade de episódios, imagem de capa e sinopse traduzida automaticamente para o português.

## Funcionalidades

* Busca de animes por nome.
* Tradução automática da sinopse (Inglês -> Português).
* Otimização de requisições com sistema de Cache, garantindo respostas instantâneas para buscas repetidas.
* Interface limpa, responsiva e minimalista construída com Tailwind CSS.
* Arquitetura de código limpa, isolando a comunicação externa em Services.

## Tecnologias Utilizadas

* PHP
* Laravel
* Tailwind CSS
* Jikan API v4
* `stichoza/google-translate-php`

## Pré-requisitos

* PHP 8.1 ou superior
* Composer

## Instalação

1. Clone o repositório:
```bash
git clone [git@github.com:GabrielVioli/Jikan-API.git]
```

Acesse o diretório do projeto:

```Bash
cd seu-repositorio
```
Instale as dependências:


```Bash
composer install
```

Configure o arquivo de ambiente e gere a chave da aplicação:

```Bash
cp .env.example .env
php artisan key:generate
```

Adicione a variável da API no final do seu arquivo .env:

```Bash

JIKAN_API_URL=[https://api.jikan.moe/v4]
```

Certifique-se de ter a seguinte configuração no seu config/services.php:

```Bash

PHP
<?php

return [
    'jikan_api' => [
        'url' => env('JIKAN_API_URL', '[https://api.jikan.moe/v4](https://api.jikan.moe/v4)'),
    ],
];
```

Inicie o servidor:

```Bash
php artisan serve
```

Acesse a página de busca no seu navegador através de http://localhost:8000/anime/search.

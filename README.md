# Projeto 1

Exemplo de projeto em Laravel + Twiter Bootstrap

[![Build Status](https://travis-ci.org/dieisonborges/projeto1.svg?branch=master)](https://travis-ci.org/dieisonborges/projeto1)

[![Code Health](https://landscape.io/github/dieisonborges/projeto1/master/landscape.svg?style=flat)](https://landscape.io/github/dieisonborges/projeto1/master)

[![Maintainability](https://api.codeclimate.com/v1/badges/31a43bed14565486e996/maintainability)](https://codeclimate.com/github/dieisonborges/projeto1/maintainability)


## Como desenvolver

1. Clone o Repositório.

```console
git clone https://github.com/dieisonborges/projeto1.git projeto1
cd projeto1
```

## Como fazer o deploy

1. Crie uma instância no heroku.
2. Envie as configurações no heroku.
3. Define uma SECRET_KEY segura para a instância.
4. Defina DEBUG=False
5. Envie o código para o heroku.

```console
heroku create minhainstancia
heroku config:push
heroku config:set SECRET_KEY=`python contrib/secret_gen.py`
heroku config:set DEBUG=False
#configuro o email
git push heroku master --force
```


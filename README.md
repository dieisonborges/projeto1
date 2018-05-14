Projeto 1
==============================================

# Exemplo de projeto em Laravel + Twiter Bootstrap

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


# Lista de Contatos

### Tecnologias

- Lumen v8
- VueJS 2 + Bootstrap v5
- MySQL

## Instalação


Entre na pasta backend e execute o comando:
```sh
composer install
```

Após isso, crie uma cópia do arquivo .env.example e renomeie para .env
Dentro do mesmo edite as configurações do seu banco:
```DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
``` 

Após executar o comando acima, execute este:
```sh
php artisan migrate
```

Pronto, o backend está configurado.

Agora entre na pasta frontend e execute o comando:
```sh
npm install
```
Após executar o comando acima, execute:
```sh
npm run serve
```

E pronto, sistemas configurados.

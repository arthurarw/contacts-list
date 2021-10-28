# Lista de Contatos
Uma simples aplicação com Lumen v8 e VueJS.
Nesta aplicação, você adiciona pessoas e seus possíveis contatos, como WhatsApp, telefone e e-mail.

### Tecnologias

- Lumen v8
- VueJS 2 + Bootstrap v5
- MySQL

## Instalação


Entre na pasta backend e execute o comando:
```sh
composer install
```

Após isso, crie uma cópia do arquivo ```.env.example``` e renomeie para ```.env```
Dentro do mesmo edite as configurações do seu banco:
```sh
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
``` 

Após executar o comando acima, execute este:
```sh
php artisan migrate
```

E depois este:
```sh
php artisan db:seed --class=PersonSeeder
```
Pronto, o backend está configurado.

Agora entre na pasta frontend e execute o comando:
```sh
npm install
```

Após a instalação, encontre o arquivo: ```frontend/src/configs/index.js```.
Neste arquivo, altere a linha 1, para o teu endpoint do backend.
```
export const URI_BASE_API = 'http://SEUENDPOINT/';
```

Após fazer os passos acima, execute:
```sh
npm run serve
```

E pronto, sistemas configurados, só acessar a pagina: http://localhost:8080/

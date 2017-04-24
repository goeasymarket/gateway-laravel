
# gateway-laravel
==============

### Instalação

Coloque a dependência `goeasymarket/gateway-laravel` em seu composer.json no seu projeto Laravel:

```js
"goeasymarket/gateway-laravel": "dev-master"
```
    
Você não precisa adicionar nenhuma outra dependência, o `goeasymarket/gateway-laravel` carrega as outras dependências automaticamente.

Por final, execute o `composer update`.

Após instalação finalizada, adicione em seu `config/app.php` o seguinte ServiceProvider:

```php
'providers' => [
	....
	/*
	 * Braintree Service Provider
	 */
    'Goeasymarket\Laravel\BraintreeServiceProvider',
]
```

### Configuração

Para publicar o arquivo de configuração do pacote, execute:

```shell
php artisan vendor:publish
```

E depois abra `config/braintree.php` para configurar seu environment e chaves.

### Utilização

Conforme configurado, você pode usar as Braintree PHP classes conforme consta na [documentação](https://www.braintreepayments.com/docs/php/transactions/overview).


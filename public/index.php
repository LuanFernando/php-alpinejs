<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + Alpine.JS</title>

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="content">
    <div x-data="{ open: false }">
        <button @click="open = ! open">Alternar Menu</button>
        <div x-show="open" x-transition>
            Conteúdo do menu aberto!
        </div>
        <div x-show="open" x-transition.duration.800ms>
            Conteúdo do menu aberto! 800ms
        </div>
    </div>

    <div x-data="counter" class="counter">
        <span x-text="count" class="f-32"></span>
        <button type="button" @click="increment">INCREMENT</button>
        <button type="button" @click="decrement">DECREMENT</button>
    </div>

    <div x-data="users">
        Username: <strong x-text="username"></strong>
        Password: <strong x-text="password"></strong>

        <input type="text" x-model="username" x-bind:placeholder="placeholderUser">
        <input type="password" x-model="password" x-bind:placeholder="placeholderPassword">
    </div>

    <div x-data="users" x-init="getUsers">
        <span>Lista de Usuários - JSONPLACEHOLDER</span>
        <ul>
            <template x-for="user in listUsers" :key="user.id">
                <li x-text="user.name"></li>
            </template>
        </ul>
    </div>

    <div x-data="products" x-init="getProducts">
        <span>Lista de Produtos</span>
        <ul>
            <template x-for="product in listProducts" :key="product.id">
                <li x-text="product.product"></li>
            </template>
        </ul>
    </div>

    <div x-data="">
        <ul>
            <template x-for="i in 10">
                <li x-text="i"></li>
            </template>
        </ul>
    </div>

</div>

    <script src="./dist/bundle.js"></script>
</body>
</html>
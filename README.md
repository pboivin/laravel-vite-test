# laravel-vite-test

## Initial setup

```sh
laravel new site
cd site
php artisan serve
```

## Vite setup

```sh
npm i
npm run dev
```

Add to `<head>`:

```blade
@vite([
    'resources/css/app.css',
    'resources/js/app.js',
])
```

## Vue 3 setup

```sh
npm i --save-dev @vitejs/plugin-vue vue
```

Add `resources/js/components/App.vue` component:

```vue
<template>
    <div>Hello World</div>
</template>
```

Update `resources/js/app.js`:

```js
import "./bootstrap";
import { createApp } from "vue";
import App from "./components/App.vue";

const app = createApp(App).mount("#app");
```

Update `<body>`:

```blade
<body>
    <div id="app">Loading...</div>
</body>
```

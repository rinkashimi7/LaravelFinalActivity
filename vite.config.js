const mix = require('laravel-mix');
const laravelVitePlugin = require('laravel-vite-plugin');
const vuePlugin = require('@vitejs/plugin-vue');

mix.extend('vite', (webpackConfig, ...args) => {
  webpackConfig.plugins.push(
    laravelVitePlugin({
      input: [
        'resources/sass/app.scss',
        'resources/js/app.js',
      ],
      refresh: true,
    })
  );
  
  return webpackConfig;
});

mix.vite()
  .webpackConfig({
    resolve: {
      alias: {
        vue: 'vue/dist/vue.esm-bundler.js',
      },
    },
  })
  .version();
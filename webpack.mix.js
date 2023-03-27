const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .js("resources/src/js/app.js", "public/backend/js")
  .js("resources/src/js/ckeditor-classic.js", "public/backend/js")
  .js("resources/src/js/ckeditor-inline.js", "public/backend/js")
  .js("resources/src/js/ckeditor-balloon.js", "public/backend/js")
  .js("resources/src/js/ckeditor-balloon-block.js", "public/backend/js")
  .js("resources/src/js/ckeditor-document.js", "public/backend/js")
  .css("public/backend/css/_app.css", "public/backend/css/app.css")
  .options({
    processCssUrls: false,
  })
  .copyDirectory("resources/src/json", "public/backend/json")
  .copyDirectory("resources/src/fonts", "public/backend/fonts")
  .copyDirectory("resources/src/images", "public/backend/images");

const mix = require("laravel-mix");
const autoprefixer = require("autoprefixer");
const webpcss = require("webpcss").default();

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .options({
        postCss: [autoprefixer, webpcss],
    });

if (mix.inProduction()) {
    mix.version().disableNotifications();
}

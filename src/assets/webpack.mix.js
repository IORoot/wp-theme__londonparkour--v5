// webpack.mix.js
let mix = require('laravel-mix');

// Use the postcss.config.js (in this same folder)
mix.postCss('./css/tailwind.css', './css/style.css');

// Package all JS together
mix.combine([
        './js/lazysizes.min.js',
        './js/lazysizes_plugins/ls.bgset.min.js', 
        './js/lazysizes_plugins/ls.unveilhooks.min.js',
        './js/youtube-lite/lite-yt-embed.js',
    ], 
    './js/all_js.js',
    true
);
let mix = require('laravel-mix');

mix.postCss("src/css/main.css", "dist/main.css", [
    require("tailwindcss"),
])
.browserSync({
    proxy: "http://jackson-wp.test", // Change this to your local WP URL
    files: [
        "**/*.php",       // Watch all PHP files
        "dist/main.css"   // Watch the compiled Tailwind CSS
    ]
});

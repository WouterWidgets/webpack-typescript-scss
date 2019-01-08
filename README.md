# Webpack 4 + Typescript + SCSS + Bootstrap 4 + Materialdesignicons + jQuery + Lodash
Yes, the whole bunch.

It also copies `src/index.html` to `www/index.html`, but you can remove that part from the webpack config file in case you use PHP or whatever.

## Requirements
- NodeJS / NPM

## Installation
- Run `npm i`
- Run `npx webpack` or `npx webpack --watch`
- Serve `www/` using a web server (e.g. `php -S localhost:8000 -t www/`)

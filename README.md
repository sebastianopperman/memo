# WordPress Theme Boilerplate
![Deploy](https://github.com/magn3tic/is3/workflows/Deploy/badge.svg)
[![GitHub license](https://img.shields.io/github/license/codilation/wordpress-theme-boilerplate)](https://github.com/codiltion/wordpress-theme-boilerplate/blob/master/LICENSE)
![WordPress Plugin: Required WP Version](https://img.shields.io/wordpress/plugin/wp-version/gutenberg)

Memo is a WordPress & React assessment task. To access the WordPress, use the following login:

[WordPress Admin](http://178.62.107.86/wp-admin)<br />
Username: **memo**<br />
Password: **memo**

## How do I use it?

### Setting up WordPress

- Install [Docker](https://www.docker.com/products/docker-desktop).
- Run `yarn start` to set up WordPress locally.
- Run `yarn stop` to stop the WordPress containers.
- Access your WordPress at [localhost:8000](http://localhost:8000).
- Activate the theme from the *Themes* section in the Admin Panel.

### Developing the Theme
- Run `yarn install` to install dependancies
- Run `yarn dev` to start the development server & watcher
- Access your Dev server at [localhost:3000](http://localhost:3000).
- Run `yarn build` to build a production theme distribution

## What's in the box?

- Dockerized. No LAMP stack required on your development computer.
- Normalize.css
- PostCSS with the following plugins:
    - Autoprefixer
    - CSS partial import
    - SCSS-like nesting
    - [Automatic icon fonts](https://www.npmjs.com/package/iconfont-webpack-plugin)
- [BrowserSync](https://www.browsersync.io/)


## License

The code is available under the [MIT license](LICENSE.txt).

# Wordpress-template-boilerplate
![GitHub release (latest by date)](https://img.shields.io/github/v/release/deshiloh/wordpress-template-boilerplate?label=version)
[![semantic-release](https://img.shields.io/badge/%20%20%F0%9F%93%A6%F0%9F%9A%80-semantic--release-e10079.svg)](https://github.com/semantic-release/semantic-release)

Boilerplate template for Wordpress used by Hybride Conseil

## How to use

Run the following composer command to install the theme :

`composer create-project deshiloh/wordpress-template-boilerplate`

Install dependencies with :

`npm install`

## TODO before start coding

- Change the project name in `style.css`.
  
### Github
- Create a secret `TOKEN` in your repository settings under the **Secrets** section. The `TOKEN` is used for the semantic release of the project.

### Gitlab
- Create a secret `GL_TOKEN` in your repository settings variables. The `GL_TOKEN` is used for the semantic release of the project.

## Things to know

- For performance reasons Tailwindcss is installed and configured with `postcss` without a preprocessing tool like Sass, 
  Less, or Stylus, [more details here](https://tailwindcss.com/docs/using-with-preprocessors#using-sass-less-or-stylus).
- `postcss` is configured with the `postcss-nesting` plugin, that allow you to write css like scss. [Go to the repo for more informations](https://github.com/csstools/postcss-nesting).




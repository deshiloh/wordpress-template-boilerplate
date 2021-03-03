# Wordpress-template-boilerplate
Boilerplate template for Wordpress using by Hybride Conseil

## How to use

Run the following composer command to install the theme :

`composer create-project deshiloh/wordpress-template-boilerplate`

Install dependencies with :

`npm install`

## TODO before start coding
- Change the name's project in the `style.css`
- Create `TOKEN` secret in your repository's settings under 'Secrets' section. TOKEN is use for the semantic release 
of the project.
  
## Things to know
- For performance reasons Tailwindcss is installed and configured with postcss without a preprocessing tool like Sass, 
  Less, or Stylus. [Details here](https://tailwindcss.com/docs/using-with-preprocessors#using-sass-less-or-stylus)
- postcss is configured with the postcss-nesting plugin, that allow you to write css like scss. 
  [Look at the repo for more informations if needed](https://github.com/csstools/postcss-nesting)




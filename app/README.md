# Kalyber Website Front End

> Kalyber front end development modern workflow.

## Features / Use Cases
Current features:

- Compile CSS preprocessor code via Sass to CSS.
- Autoprefix and minify CSS and copy it the `dist\assets\css` directory and the `wp-content\themes\kalyber\assets\css` directory.
- Compile ES6+ to ES5, concatenate JS files and minify code using WebPack.
- Copy the resultant JavaScript files to the `dist\assets\js` directory and the `wp-content\themes\kalyber\assets\js` directory.
- Compile any vendor JavaScript files using WebPack in a single bundle.
- Copy the resultant JavaScript files to the `dist\assets\js\vendor` directory and the `wp-content\themes\kalyber\assets\js\vendor` directory.
- Import dependencies into the application with ES6 modules. Enables better ordering and access.
- Copy HTML files to the `dist` directory.
- Optionally optimize images and move them to the `dist\assets\images` directory. NOTE: Only when the build is in --prod.
- Run a local server for the site on port 3000.

## Requirements
This should be installed on your computer in order to get up and running:

- [Node.js](https://nodejs.org/en/) (Required node version is >= 12.16.3 - use the LTS version).
- [Gulp 4](https://gulpjs.com/).

## Dependencies
These [npm](https://www.npmjs.com/) packages are used:

- [@babel/core](https://www.npmjs.com/package/@babel/core).
- [@babel/preset-env](https://www.npmjs.com/package/@babel/preset-env).
- [@babel/register](https://www.npmjs.com/package/@babel/register).
- [bable/loader](https://www.npmjs.com/package/babel-loader).
- [beepbeep](https://www.npmjs.com/package/beepbeep).
- [browser-sync](https://www.npmjs.com/package/browser-sync).
- [del](https://www.npmjs.com/package/del).
- [gulp](https://www.npmjs.com/package/gulp).
- [gulp-autoprefixer](https://www.npmjs.com/package/gulp-autoprefixer).
- [gulp-babel](https://www.npmjs.com/package/gulp-babel).
- [gulp-clean-css](https://www.npmjs.com/package/gulp-clean-css).
- [gulp-concat](https://www.npmjs.com/package/gulp-concat).
- [gulp-if](https://www.npmjs.com/package/gulp-if).
- [gulp-imagemin](https://www.npmjs.com/package/gulp-imagemin).
- [gulp-line-ending-corrector](https://www.npmjs.com/package/gulp-line-ending-corrector).
- [gulp-notify](https://www.npmjs.com/package/gulp-notify).
- [gulp-plumber](https://www.npmjs.com/package/gulp-plumber).
- [gulp-postcss](https://www.npmjs.com/package/gulp-postcss).
- [gulp-sass](https://www.npmjs.com/package/gulp-sass).
- [gulp-sourcemaps](https://www.npmjs.com/package/gulp-sourcemaps).
- [webpack](https://www.npmjs.com/package/webpack).
- [webpack-stream](https://www.npmjs.com/package/webpack-stream).
- [yargs](https://www.npmjs.com/package/yargs).

For more information, take a look at the [package.json](package.json) file or visit the linked npm package sites.

## Getting Started
Ensure you have all of the necessary dependencies. Pull the latest code from the repository.

### `npm init`
The build process starts from the `public\app` directory. Open terminal or another tool to run commands. Navigate the to the correct directory. See the example:

``` bash
    cd Local\ Sites/medallia/app/public/app
```

Once you are in the proper directory you need to install the dependencies used by Gulp. Execute the following command:

``` bash
    npm init
```

## Usage / FAQ
### `run a build`
You need to run gulp to generate the CSS and JavaScript artifacts into the proper directories. This is simple as running the following:

``` bash
    gulp build
```

The terminal will display information on what is happening and setup a watch. The watch will observe for any changes to SCSS or JavaScript and automatically execute the corresponding build so you do not need to constantly run the build command. To exit the watch:

> ⌃ c (control + c)

### `run a production build`
A production build is slightly different than a normal build. With the JavaScript files, it minifies them further and uses a more efficient source map. It also does not generate a source map for CSS to be more efficient. The yargs module is used to set the build to production as follows:

``` bash
    gulp build --prod
```

### How can I load dependencies inside my application?
ES6 modules are supported which enables the use of import. Using import ensures that the order of the scripts will be correct.
Just install your dependencies and import them like so:

```js
import $ from 'jquery';
```

Importing custom scripts works in much the same way.

``` js
import slider from './components/slider';
```
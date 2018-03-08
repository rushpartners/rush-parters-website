const argv = require('yargs').argv
const command = require('node-cmd')
const mix = require('laravel-mix')
const OnBuild = require('on-build-webpack')
const Watch = require('webpack-watch')
const tailwind = require('tailwindcss')
const config = require('tailwindcss/defaultConfig')
const fs = require('fs')
var bin = require('./tasks/bin');

fs.writeFileSync('./tailwind.json', JSON.stringify(config()))

const env = argv.e || argv.env || 'local'
const plugins = [
    new OnBuild(() => {
        command.get(bin.path() + ' build ' + env, (error, stdout, stderr) => {
            if (error) {
                console.log(stderr)
                process.exit(1)
            }
            console.log(stdout)
        })
    }),
    new Watch({
        paths: ['source/**/*.md', 'source/**/*.php', '*.php', '*.js', '*.scss', '!source/_assets/**/*'],
        options: { ignoreInitial: true }
    }),
]

mix.webpackConfig({ plugins })
mix.setPublicPath('source')

mix.js('./source/_assets/js/app.js', 'source/js')
    .sass('./source/_assets/sass/main.scss', 'source/css')
    .options({
        processCssUrls: false,
        postCss: [
            tailwind('./tailwind.js'),
        ]
    })
    .version()
    .browserSync({
        proxy: false,
        server: {
            baseDir: "./build_local",
            index: 'index.html'
        },
        files: ['build_' + env + '/**/*']
    });
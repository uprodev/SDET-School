import * as nodePath from 'path';

const rootFolder = nodePath.basename(nodePath.resolve());

const buildFolder = '../assets',
    srcFolder = './src';

export const path = {
    build: {
        css: `${buildFolder}/css/`,
        js: `${buildFolder}/js/`,
        files: `${buildFolder}`
    },
    src: {
        scss: `${srcFolder}/scss/main.scss`,
        js: `${srcFolder}/js/main.js`,
        files: `${srcFolder}/**/*.*`,
    },
    watch: {
        files: `${srcFolder}/**/*.*`,
        php: '../**/*.php',
        js: `${srcFolder}/js/**/*.js`
    },
    clean: buildFolder,
    buildFolder: buildFolder,
    srcFolder: srcFolder,
    rootFolder: rootFolder,
}
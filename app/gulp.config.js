const
    assetsFolderName = 'assets/',
    cssFolder = 'css/',
    destFolder = './dist/',
    externalsJsFolder = 'externals/',
    externalsJsGlob = 'externals/**/*.js',
    htmlGlob = '**/*.html',
    imagesFolder = 'images/',
    imagesGlob = 'images/**/*.+(png|jpg|jpeg|gif|svg|ico)',
    jsFolder = 'js/',
    jsGlob = 'js/**/*.js',
    referenceJsGlob = 'reference-only/**/*.js', 
    scssGlob = 'scss/**/*.scss',
    srcFolder = './src/',
    vendorCssFolder = 'vendor/',
    vendorCssGlob = 'vendor/**/*.css',
    vendorJsFolder = 'vendor/',
    vendorJsGlob = 'vendor/**/*.js',
    wpFolder = '../wp-content/themes/kalyber/'

module.exports = {
    browserSync: {
        baseDirectory: 'dist'
    },
    css: {
        vendorFileName: 'vendor'
    },
    dest: {
        assetsFolder: destFolder + assetsFolderName,
        cssFolder: destFolder + assetsFolderName + cssFolder,
        externalsJsFolder: destFolder + assetsFolderName + jsFolder + externalsJsFolder,
        folder: destFolder,
        imagesFolder: destFolder + assetsFolderName + imagesFolder,
        jsFolder: destFolder + assetsFolderName + jsFolder,
        vendorCssFolder: destFolder + assetsFolderName + cssFolder + vendorCssFolder,
        vendorJsFolder: destFolder + assetsFolderName + jsFolder + vendorJsFolder
    },
    js: {
        customFileName: 'kalyber',
        externalsFileName: 'kalyber-externals',
        vendorFileName: 'vendor'
    },
    src: {
        assetsFolder: srcFolder + assetsFolderName,
        bundleJsFile: srcFolder + assetsFolderName + jsFolder + 'bundle.js',
        bundleVendorJsFile: srcFolder + assetsFolderName + jsFolder + vendorJsFolder + 'vendorBundle.js',
        externalsJsGlob: srcFolder + assetsFolderName + jsFolder + externalsJsGlob,
        folder: srcFolder,
        htmlGlob: srcFolder + htmlGlob,
        imagesGlob: srcFolder + assetsFolderName + imagesGlob,
        jsGlob: [srcFolder + assetsFolderName + jsGlob, 
                '!' + srcFolder + assetsFolderName + jsFolder + vendorJsGlob,
                '!' + srcFolder + assetsFolderName + jsFolder + externalsJsGlob,
                '!' + srcFolder + assetsFolderName + jsFolder + referenceJsGlob],
        scssGlob: srcFolder + assetsFolderName + scssGlob,
        vendorCssGlob: srcFolder + assetsFolderName + cssFolder + vendorCssGlob,
        vendorJsGlob: srcFolder + assetsFolderName + jsFolder + vendorJsGlob
    },
    wp: {
        assetsFolder: wpFolder + assetsFolderName,
        cssFolder: wpFolder + assetsFolderName + cssFolder,
        externalsJsFolder: wpFolder + assetsFolderName + jsFolder + externalsJsFolder,
        folder: wpFolder,
        jsFolder: wpFolder + assetsFolderName + jsFolder,
        vendorCssFolder: wpFolder + assetsFolderName + cssFolder + vendorCssFolder,
        vendorJsFolder: wpFolder + assetsFolderName + jsFolder + vendorJsFolder
    }
};
const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const devMode = process.env.NODE_ENV !== 'production'
const webpack = require('webpack'); 
var $ = require("jquery");


module.exports = {
    mode: 'production',
    entry: {
      vendor: ['jquery'],
      main : "./src/index",
      home : "./src/components/templates/home/index",
      single : "./src/components/templates/single/index",
      category : "./src/components/templates/category/index"      
    },
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: '[name].js'
    },

    module: {
        rules: [
          {
            test: /\.js$/,
            exclude: /(node_modules)/,
            use: 
            {
              loader: 'babel-loader',
              options: 
              {
              presets: ['env']
              }
            }
          }, 
          {
            test: /\.(sa|sc|c)ss$/,
            use: [
              devMode ? MiniCssExtractPlugin.loader : MiniCssExtractPlugin.loader,
              'css-loader',
              'sass-loader',
            ],
          },
          {
            test: /\.(png|svg|jpg|gif)$/,
            use: [
              'file-loader'
            ]
          }          
        ]
      },
      plugins: [
        new MiniCssExtractPlugin({
          // Options similar to the same options in webpackOptions.output
          // both options are optional
          filename: devMode ? '[name].css' : '[name].[hash].css',
          chunkFilename: devMode ? '[id].css' : '[id].[hash].css',
        }),
        new webpack.ProvidePlugin({
          $: "jquery",
          jQuery: "jquery"
         })        
      ],    
      optimization: {
        splitChunks: {
          cacheGroups: {
            vendors: {
              test: /[\\/]node_modules[\\/](jquery)[\\/]/,
              name: 'vendor',
              chunks: 'all',
            },
          }

        }
      }

}



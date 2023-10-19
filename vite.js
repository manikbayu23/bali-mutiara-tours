const { resolve } = require('path');

module.exports = {
  root: './resources',
  base: '/',
  build: {
    outDir: resolve(__dirname, 'public'),
    emptyOutDir: true,
  },
};
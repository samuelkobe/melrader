module.exports = {
  content: ["./**/*.php", "./**/*.css",],
  theme: {
    extend: {
      colors: {
        brand: {
          main: '#729F8F',
          alt: '#967553',
          black: '#231F20',
          gray: '#F7F7F7',
          darkgray: '#B9B9B9',
        }
      },
      borderWidth: {
        '3': '3px',
      },
      fontFamily: {
        sans: ["Proxima Nova", "sans-serif"],
        title: ["Bebas Neue", "sans-serif"]
      },
      minWidth: {
        '1/2': '50%',
        '1/3': '33.3334%',
      },
      minHeight: {
        '0': '0',
        '1/4': '25%',
        '1/2': '50%',
        '3/4': '75%',
        'full': '100%',
      },
      spacing: {
        '1/2': '50%',
        '1/3': '33.3334%',
        '1/4': '25%',
        '1/6': '16.6667%',
        '1/8': '12.5%',
        '1/12': '8.3333%',
        '1/24': '4.1667%',
        'video': '56.6667%',
      },
      transitionDuration: {
        '0': '0ms',
      },
      transitionDelay: {
        '0': '0ms',
      },
      transitionProperty: {
        'height': 'height',
        'transform-height': 'transform, height',
      },
      zIndex: {
        '1': '1',
      },
    },
  },
  plugins: [
    
  ],
};

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.{html, php}'],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        mainColor: '#050C2A',
        hoverColor: '#DE4A0B',
        textSecondary: '#969fa8'
      },
      boxShadow:{
        'dash': '27px 25px 2px -2px rgba(0, 0, 0, 0.56)' 
      },
      padding: {
        big: '50px'
      },
      width: {
        whead: '1600px',
        wlg: '1028px',
        wmd: '768px',
        wsm: '480px',
        wbook: '165px'
      },
      height: {
        hbook: '250px'
      },
      fontFamily: {
        Raleway: ['Raleway']
      },
      container: {
       
      },
      screens: {

        'sm': {'min': '640px', 'max': '768px'},
        // => @media (min-width: 640px and max-width: 767px) { ... }
  
        'md': {'min': '768px', 'max': '1023px'},
        // => @media (min-width: 768px and max-width: 1023px) { ... }
  
        'lg': {'min': '1024px', 'max': '1279px'},
        // => @media (min-width: 1024px and max-width: 1279px) { ... }
  
        'xl': {'min': '1280px', 'max': '1535px'},
        // => @media (min-width: 1280px and max-width: 1535px) { ... }
        '2xl': {'min': '1536px'},
        // => @media (min-width: 1536px) { ... }
      }
    },
  },
  plugins: [],
}



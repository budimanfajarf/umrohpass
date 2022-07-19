module.exports = {
  content: [
    './index.php',
    './app/**/*.php',
    './resources/**/*.{php,vue,js}',
  ],
  theme: {
    screens: {
      's': '375px',
      // => @media (min-width: 375px) { ... }

      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1440px',
      // => @media (min-width: 1440px) { ... }
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1.25rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6.25rem',
      },
    },
    extend: {
      colors: {
        primary: '#C8A251',
        brandblue: '#16215B',
        brandblack: '#211F25',
        brandgray: '#6E87A4',
      },
      fontFamily: {
        sans: ['Poppins', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
      },
      lineHeight: 1.5,
      fontSize: {
        xs: ['.75rem', {
          lineHeight: 1.5,
        }],
        xsp: ['.8125rem', {
          lineHeight: 1.5,
        }],
        sm: ['.875rem', {
          lineHeight: 1.5,
        }],
        base: ['1rem', {
          lineHeight: 1.5,
        }],
        lg: ['1.125rem', {
          lineHeight: 1.5,
        }],
        xl: ['1.25rem', {
          lineHeight: 1.5,
        }],
        xlp: ['1.375rem', {
          lineHeight: 1.5,
        }],
        '2xl': ['1.5rem', {
          lineHeight: 1.5,
        }],
        '3xl': ['1.875rem', {
          lineHeight: 1.5,
        }],
        '3xlp': ['2rem', {
          lineHeight: 1.5,
        }],
      },
      borderRadius: {
        'ten': '.625rem', // 10px
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
};

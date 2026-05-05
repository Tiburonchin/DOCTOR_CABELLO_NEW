/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./template-parts/**/*.php",
    "./page-templates/**/*.php",
    "./assets/js/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: 'rgb(var(--color-primary-600) / <alpha-value>)',
          hover: 'rgb(var(--color-primary-700) / <alpha-value>)',
          dark: 'rgb(var(--color-primary-800) / <alpha-value>)',
          light: 'rgb(var(--color-primary-500) / <alpha-value>)',
          50: 'rgb(var(--color-primary-50) / <alpha-value>)',
          100: 'rgb(var(--color-primary-100) / <alpha-value>)',
          500: 'rgb(var(--color-primary-500) / <alpha-value>)',
          600: 'rgb(var(--color-primary-600) / <alpha-value>)',
          700: 'rgb(var(--color-primary-700) / <alpha-value>)',
          800: 'rgb(var(--color-primary-800) / <alpha-value>)',
          900: 'rgb(var(--color-primary-900) / <alpha-value>)',
        },
        secondary: {
          DEFAULT: 'rgb(var(--color-secondary-500) / <alpha-value>)',
          hover: 'rgb(var(--color-secondary-600) / <alpha-value>)',
          dark: 'rgb(var(--color-secondary-700) / <alpha-value>)',
          light: 'rgb(var(--color-secondary-400) / <alpha-value>)',
          50: 'rgb(var(--color-secondary-50) / <alpha-value>)',
          100: 'rgb(var(--color-secondary-100) / <alpha-value>)',
          400: 'rgb(var(--color-secondary-400) / <alpha-value>)',
          500: 'rgb(var(--color-secondary-500) / <alpha-value>)',
          600: 'rgb(var(--color-secondary-600) / <alpha-value>)',
          700: 'rgb(var(--color-secondary-700) / <alpha-value>)',
        },
        step1: { bg: 'rgb(var(--color-step-1-bg))', icon: 'rgb(var(--color-step-1-icon))' },
        step2: { bg: 'rgb(var(--color-step-2-bg))', icon: 'rgb(var(--color-step-2-icon))' },
        step3: { bg: 'rgb(var(--color-step-3-bg))', icon: 'rgb(var(--color-step-3-icon))' },
        step4: { bg: 'rgb(var(--color-step-4-bg))', icon: 'rgb(var(--color-step-4-icon))' },
        gray: {
          100: 'rgb(var(--color-gray-100) / <alpha-value>)',
          200: 'rgb(var(--color-gray-200) / <alpha-value>)',
          300: 'rgb(var(--color-gray-300) / <alpha-value>)',
          400: 'rgb(var(--color-gray-400) / <alpha-value>)',
        },
        background: 'rgb(var(--bg-background) / <alpha-value>)',
        surface: 'rgb(var(--bg-surface) / <alpha-value>)',
        main: 'rgb(var(--text-main) / <alpha-value>)',
        muted: 'rgb(var(--text-muted) / <alpha-value>)',
        borderL: 'rgb(var(--border-light) / <alpha-value>)',
        borderB: 'rgb(var(--border-base) / <alpha-value>)',
      },
      zIndex: {
        elevate: 'var(--z-elevate)',
        dropdown: 'var(--z-dropdown)',
        header: 'var(--z-header)',
      },
      fontFamily: {
        sans: ['Poppins', 'sans-serif'],
        display: ['Outfit', 'sans-serif'],
      },
      animation: {
        'marquee-left': 'marquee-left 40s linear infinite',
        'marquee-right': 'marquee-right 40s linear infinite',
      },
      keyframes: {
        'marquee-left': {
          '0%': { transform: 'translateX(0)' },
          '100%': { transform: 'translateX(-50%)' },
        },
        'marquee-right': {
          '0%': { transform: 'translateX(-50%)' },
          '100%': { transform: 'translateX(0)' },
        }
      }
    },
  },
  plugins: [],
}

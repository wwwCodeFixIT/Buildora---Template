import '../scss/app.scss';

/**
 * Buildora frontend entry.
 * Keep JavaScript progressive-enhancement only.
 */
const init = () => {
  document.documentElement.classList.add('has-js');
};

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', init, { once: true });
} else {
  init();
}

(function() {

  console.log("\n %c Projectus vx.x | Projecte unificat | http://projectus.cat \n",
    "color: white; background: #171b27; padding:5px 0; border-bottom: solid 2px #dd6b20;")

  /**
   *  Variables
   */
  const android = /(android)/i.test(navigator.userAgent);
  const banner = document.querySelector('.banner');

  /**
   *  Listeners
   */
  window.addEventListener('scroll', function() {
    if (!android) {
      banner.style.backgroundPosition = '0 ' + (0.4 * window.scrollY) + 'px';
    }
  });

})();

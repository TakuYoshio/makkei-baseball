const ham = document.querySelector('#js-hamburger');
const nav = document.querySelector('#js-nav');

ham.addEventListener('click', function () {
  const isActive = ham.classList.toggle('active'); // ハンバーガーの状態をトグル
  nav.classList.toggle('active', isActive); // 同時にメニューの表示状態を制御
});

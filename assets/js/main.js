document.querySelector('.language-switch h3 a').addEventListener('click', function(e) {
  let list = document.querySelector('.language-switch');
  if (list.classList.contains('active')) {
    list.classList.remove('active');
  } else {
    list.classList.add('active');
  }
});
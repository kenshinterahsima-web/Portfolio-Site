document.addEventListener('DOMContentLoaded', function() {
  const popup = document.getElementById('popup');
  const popupContent = document.getElementById('popup-content');
  document.querySelectorAll('.popup-image').forEach(img => {
    img.addEventListener('click', function() {
      // 画像とコメントをセット
      popupContent.innerHTML =
        '<img src="' + this.dataset.img + '" alt="" style="max-width:100%;height:auto;display:block;margin:0 auto 1em auto;border-radius:0.4em;">'
        + '<div>' + this.dataset.comment + '</div>';
      popup.style.display = 'flex';
    });
  });
  popup.addEventListener('click', function(e) {
    if (e.target === popup) popup.style.display = 'none';
  });
});

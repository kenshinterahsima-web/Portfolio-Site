document.addEventListener('DOMContentLoaded', function () {
  var faqItems = document.querySelectorAll('.faq-item');
  
  faqItems.forEach(function (item) {
    var question = item.querySelector('.faq-question');
    
    question.addEventListener('click', function () {
      var isActive = item.classList.contains('active');
      
      // 全てのFAQアイテムからactiveクラスを削除
      faqItems.forEach(function (otherItem) {
        otherItem.classList.remove('active');
      });
      
      // クリックしたアイテムがアクティブでなかった場合、アクティブにする
      if (!isActive) {
        item.classList.add('active');
      }
    });
  });
});


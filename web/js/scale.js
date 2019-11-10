//файл scale.js
'use strict';

(function () {
  var product = document.querySelector('.product');
  var productVisible = function () {
      // позиции элемента
      var productPosition = {
              top: window.pageYOffset + product.getBoundingClientRect().top,
              bottom: window.pageYOffset + product.getBoundingClientRect().bottom
          },
          // позиции окна
          windowPosition = {
              top: window.pageYOffset,
              bottom: window.pageYOffset + document.documentElement.clientHeight
          };

      if (productPosition.bottom > windowPosition.top && productPosition.top < windowPosition.bottom) {
          product.style.transform = 'scale(1)';
      }
  };

  // Запускаем функцию при прокрутке страницы
  window.addEventListener('scroll', function () {
      productVisible(product);
  });

  // ***********************************************************************

  var element = document.querySelector('.element');
  var elementVisible = function () {
      // позиции элемента
      var elementPosition = {
              top: window.pageYOffset + element.getBoundingClientRect().top,
              bottom: window.pageYOffset + element.getBoundingClientRect().bottom
          },
          // позиции окна
          windowPosition = {
              top: window.pageYOffset,
              bottom: window.pageYOffset + document.documentElement.clientHeight
          };

      if (elementPosition.bottom > windowPosition.top && elementPosition.top < windowPosition.bottom) {
          element.style.transform = 'scale(1)';
      }
  };

  // Запускаем функцию при прокрутке страницы
  window.addEventListener('scroll', function () {
      elementVisible(element);
  });

})();

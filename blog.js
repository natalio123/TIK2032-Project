const articles = document.querySelectorAll('article');

articles.forEach(article => {
  article.addEventListener('mouseover', () => {
    article.style.transform = 'scale(1.1)';
    article.style.boxShadow = '0px 5px 10px rgba(0, 0, 0, 0.2)';
  });

  article.addEventListener('mouseout', () => {
    article.style.transform = 'scale(1)';
    article.style.boxShadow = 'none';
  });
});

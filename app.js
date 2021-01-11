function topFunction() {
  document.body.scrollTop = 0; // For Apples Safari
  document.documentElement.scrollTop = 0; // For Chrome and other browsers
}


function donateFunction() {
  window.scrollTo(0,document.body.scrollHeight);
}
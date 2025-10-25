// Simple placeholder JS for menu toggling (if needed)
document.addEventListener('DOMContentLoaded', function(){
  var toggles = document.querySelectorAll('.menu-toggle');
  toggles.forEach(function(btn){
    btn.addEventListener('click', function(){
      var nav = document.querySelector('.nav');
      if(nav.style.display === 'flex') nav.style.display = 'none'; else nav.style.display = 'flex';
    });
  });
});

document.addEventListener('DOMContentLoaded', function() {
    var point1 = document.querySelector('.point1');
    var point2 = document.querySelector('.point2');
    var point3 = document.querySelector('.point3');
    var page1cb = document.getElementById('page1cb');
    var page2cb = document.getElementById('page2cb');
    var page3cb = document.getElementById('page3cb');
    point1.style.backgroundColor = '#ea4c6f';
  
    point1.addEventListener('click', function() {
      page1cb.checked = true;
      page2cb.checked = false;
      page3cb.checked = false;
  
      if (page1cb.checked) {
        point1.style.backgroundColor = '#ea4c6f';
        point3.style.backgroundColor = 'transparent';
        point2.style.backgroundColor = 'transparent'
      } 
    });
  
    point2.addEventListener('click', function() {
      page1cb.checked = false;
      page2cb.checked = true;
      page3cb.checked = false;
  
      if (page2cb.checked) {
        point2.style.backgroundColor = '#ea4c6f';
        point1.style.backgroundColor = 'transparent';
        point3.style.backgroundColor = 'transparent'
      } 
    });
  
    point3.addEventListener('click', function() {
      page1cb.checked = false;
      page2cb.checked = false;
      page3cb.checked = true;
  
      if (page3cb.checked) {
        point3.style.backgroundColor = '#ea4c6f';
        point1.style.backgroundColor = 'transparent';
        point2.style.backgroundColor = 'transparent'
      }
    });
 

    
     


 
    // function notation etoiles 
    let note = 0;
    let etoiles = document.querySelectorAll('.etoile');
     
    etoiles.forEach((etoile, id) => {
      etoile.addEventListener('click', (elem) => {
        note = (id + 1);
        elem.target.classList.remove('black');
        elem.target.classList.add('gold');
      });
      etoile.addEventListener('mouseenter', (elem) => {
        let cible = elem.target.classList;
        cible.remove('grey');
        cible.remove('gold');
        cible.add('black');
         
        for (let i = 0; i < etoiles.length; i++) {
          let classes = etoiles[i].classList;
          if (i < id) {
            classes.add('gold');
            classes.remove('grey');
            classes.remove('black');
          }
          if (i > id) {
            classes.add('grey');
            classes.remove('black');
            classes.remove('gold');
          }
        }
      });
    });
  

    let rate = 0;
    let stars = document.querySelectorAll('.avis');
     
    stars.forEach((star, id) => {
      star.addEventListener('click', (elem) => {
        rate = (id + 1);
        elem.target.classList.remove('noir');
        elem.target.classList.add('or');
      });
      star.addEventListener('mouseenter', (elem) => {
        let cible = elem.target.classList;
        cible.remove('gris');
        cible.remove('or');
        cible.add('noir');
         
        for (let i = 0; i < stars.length; i++) {
          let classes = stars[i].classList;
          if (i < id) {
            classes.add('or');
            classes.remove('gris');
            classes.remove('noir');
          }
          if (i > id) {
            classes.add('gris');
            classes.remove('noir');
            classes.remove('or');
          }
        }
      });
    });

    
    let rate1 = 0;
    let stars1 = document.querySelectorAll('.avis1');
     
    stars1.forEach((star1, id) => {
      star1.addEventListener('click', (elem) => {
        rate1 = (id + 1);
        elem.target.classList.remove('dark');
        elem.target.classList.add('shine');
      });
      star1.addEventListener('mouseenter', (elem) => {
        let cible = elem.target.classList;
        cible.remove('cloud');
        cible.remove('shine');
        cible.add('dark');
         
        for (let i = 0; i < stars1.length; i++) {
          let classes = stars1[i].classList;
          if (i < id) {
            classes.add('shine');
            classes.remove('cloud');
            classes.remove('dark');
          }
          if (i > id) {
            classes.add('cloud');
            classes.remove('dark');
            classes.remove('shine');
          }
        }
      });
    });
  

 //  fonction defilemment carousel
 function moveToSelected(element) {
  
  if (element == "next") {
    var selected = $(".selected").next();
  } else if (element == "prev") {
    var selected = $(".selected").prev();
  } else {
    var selected = element;
  }
  
  var next = $(selected).next();
  var prev = $(selected).prev();
  var prevSecond = $(prev).prev();
  var nextSecond = $(next).next();
  
  $(selected).removeClass().addClass("selected");
  
  $(prev).removeClass().addClass("prev");
  $(next).removeClass().addClass("next");
  
  $(nextSecond).removeClass().addClass("nextRightSecond");
  $(prevSecond).removeClass().addClass("prevLeftSecond");
  
  $(nextSecond).nextAll().removeClass().addClass('hideRight');
  $(prevSecond).prevAll().removeClass().addClass('hideLeft');
  
  }
  
  // Eventos teclado
  $(document).keydown(function(e) {
    switch(e.which) {
        case 37: // left
        moveToSelected('prev');
        break;
  
        case 39: // right
        moveToSelected('next');
        break;
  
        default: return;
    }
    e.preventDefault();
  });
  
  $('#carousel div').click(function() {
  moveToSelected($(this));
  });
  
  $('#prev').click(function() {
  moveToSelected('prev');
  });
  
  $('#next').click(function() {
  moveToSelected('next');
  });
  



  });


  
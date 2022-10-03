// document.addEventListener('mousemove', e => {

//     let span = document.createElement('span');

//     let x = e.pageX;
//     let y = e.pageY;

//     span.style.left = x + "px";
//     span.style.top = y + "px";

//     let size = Math.random() * 10;

//     span.style.width = 1 + size + "px";
//     span.style.height = 1 + size + "px";
    
//     document.body.appendChild(span);

//     setTimeout(function() {
//         span.remove();
//     }, 1200);

// });
  

  


// ===========================================
// Fade animation
// ===========================================
function reveal() {
    let reveals = document.querySelectorAll(".reveal");

    for (let i = 0; i < reveals.length; i++) {
        let windowHeight = window.innerHeight;
        let elementTop = reveals[i].getBoundingClientRect().top;
        let elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
    }
}
  
window.addEventListener("scroll", reveal);

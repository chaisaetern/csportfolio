var currentX = '';
var currentY = '';
var movementConstant = .025; //值越大移動越大

$(document).mousemove(function(e) {
  if (currentX == '') currentX = e.pageX;
  var xdiff = e.pageX - currentX;
  currentX = e.pageX;
  if (currentY == '') currentY = e.pageY;
  var ydiff = e.pageY - currentY;
  currentY = e.pageY;

  $('.parallax:nth-child(2n)').each(function(i, el) {
    var movement = (i + 1) * (xdiff * movementConstant);
    var movementy = (i + 1) * (ydiff * movementConstant);
    var newX = $(el).position().left + movement;
    var newY = $(el).position().top + movementy;
    var cssObj = {
      'left': newX + 'px',
      'top': newY + 'px'
    };

    // $(el).css('left', newX + 'px');
    // $(el).css('top', newY + 'px');
    $(el).css({
      "transform": "translate(" + newX + "px," + newY + "px)"
    });
  });
});





$('.projects').on('click', function(e) {
	e.preventDefault()
})





// Pause/Play Video on Hover
var figure = $(".video").hover( hoverVideo, hideVideo );

function hoverVideo(e) {  
    $('video', this).get(0).play(); 
}

function hideVideo(e) {
    $('video', this).get(0).pause(); 
}







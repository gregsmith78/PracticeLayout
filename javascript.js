'use strict';
//import com.greensock.*;
//import com.greensock.easing.*;

function chunkArrayInGroups(arr, size) {
   var finalarr = [];
  var i = 0;
  while ( i < arr.length ) {
    finalarr.push(arr.slice( i, i += size));
    console.log(i);
    console.log(size);
    console.log(finalarr);
    //console.log(arr);
  }
  console.log(finalarr);
  return finalarr;
}

chunkArrayInGroups(["a", "b", "c", "d"], 2);

//var _dsaBox = document.getElementById(".dsaBox");

//function moveBox(element){
//TweenMax.to(".dsaBox", 2, {left: 200});
//}
////
//var numTxt = new SplitText(".numBox p", {type:"chars"}),
//	numBxChars = numTxt.chars.length,
//	tl = new TimelineMax({delay:0.5, repeat:-1});
//
//TweenLite.set(".numBox", {visibility:"visible"});
//tl.staggerTo(numTxt.chars, 0.8, {ease:Back.easeOut, cycle:{y:[100, -100], rotation:[-120, 120]}, opacity: 0,}, 0.03, "+=1");

//$(document).ready(function() {
//    $('.dsaBox').click(function() {
//        tween.('dasBox');
//  })
//});


(function _init(){
	moveBox(".dsaBox");
})();

function testClick(){
	document.getElementById('numBox').innerHTML('You jackass');
	
}

function _animateIn(){

switch(e) {
	case 'over':
		_over();
	break;
	case 'out':
		_out();
	break;

}
}

function _over(element){

}

function _out (element) {
	// body...
}
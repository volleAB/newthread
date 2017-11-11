window.onload=function (){
	// var oUl=document.getElementById('c-list');
	// var aLi=oUl.getElementsByTagName('li');
	// aLi[0].className='on';
	// for(var i=0;i<aLi.length;i++){
	// 	aLi[i].onclick=function (){
	// 		for(var i=0;i<aLi.length;i++){
	// 			aLi[i].className='';
	// 		}
	// 		this.className='on';
	// 		// console.log(this);
	// 		// return;
	// 	}
	// }






		//分組轮播
	function go2() {
	  if (document.getElementById('list2')) {
	    var list_style = document.getElementById('list2').style;
	    list_style.cssText = 'left:-1060px;';
	    $(function() {
	      var container = $('#group,.button');
	      var list = $('#list2');
	      var prev = $('#team_prev');
	      var next = $('#team_next');
	      var index = 1;
	      var len = 3;
	      var interval = 3000;
	      var timer;


  function animate2(offset) {
    var left = parseInt(list.css('left')) + offset;
    if (offset > 0) {
      offset = '+=' + offset;
    } else {
      offset = '-=' + Math.abs(offset);
    }
    list.animate({
      'left': offset
    }, 500, function() {
      if (left > -1060) {
        list.css('left', -1060 * len - 1060);
      }
      if (left < (-1060 * len - 1060)) {
        list.css('left', -1060);
      }
    });
  }

  function play2() {
    timer = setTimeout(function() {
      next.trigger('click');
      play2();
    }, interval);
  }

  function stop2() {
    clearTimeout(timer);
  }

  next.bind('click', function() {
    if (list.is(':animated')) {
      return;
    }
    animate2(-1060);
  });

  prev.bind('click', function() {
    if (list.is(':animated')) {
      return;
    }
    animate2(1060);
  });

  container.hover(stop2, play2);

  play2();

    });
  }
}
go2();
//分組轮播end


	}
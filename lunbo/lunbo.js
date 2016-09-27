//加载在文本读取之后的js语句 开始 =============================================================
  function fadeImg(obj,speed,interval){  //父级容器，淡出淡入速度，切换间隔
    $("."+obj).each(function(){
      var $box = $(this),
        $imgUl = $box.children(".imgList"),
        $imgLi = $imgUl.children("li"),
        $btnUl = $box.children(".btnList"),
        $btnLi = $btnUl.children("li"),
        $btnPreNex = $box.children(".pre-nex"),
        n = $imgLi.length,
        k = 0,
        Player = setInterval(function(){fade()},interval);
      $imgLi.eq(0).fadeIn(speed);             //第一张先淡入
      function fade(){                  //淡出淡入事件
        k += 1;
        if(k >= n){
          k = 0;
        }
        $btnLi.removeClass('cur').eq(k).addClass('cur');
        $imgLi.fadeOut(speed).eq(k).fadeIn(speed);  
      };
      $btnLi.click(function(){              //小圆点点击事件
        var index = $btnLi.index(this);
        $(this).addClass('cur').siblings('li').removeClass('cur');
        $imgLi.fadeOut(speed).eq(index).fadeIn(speed);
        k = index;
      });     
      $btnPreNex.click(function(){            //左右按钮点击事件              
        if(!$imgLi.is(":animated")){
          if($(this).hasClass('next')){
            k += 1;
            if(k >= n){
              k = 0;
            }
          }
          else{
            k += -1;
            if(k < 0){
              k = n-1;
            }
          }
          $btnLi.removeClass('cur').eq(k).addClass('cur');
          $imgLi.fadeOut(speed).eq(k).fadeIn(speed);
        }  
      });   
      $box.hover(                      //鼠标移入事件（不用toggle是为了兼容1.9+的JQ库）  
        function(){
          clearInterval(Player);
          $btnPreNex.addClass('show');
        },
        function(){
          Player = setInterval(function(){fade()},interval);
          $btnPreNex.removeClass('show');
        }
      );        
    });
  }  
  $(function () {              //读取轮播事件
    fadeImg("bannerCon",1000,3000);
  });
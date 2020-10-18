// JavaScript Document
$(function(){
	
	//新闻tab
	 /*var $tab_title=$(".news_tab_btn span");
	 var $tab_ul=$("div.news_cont ul");
	 $tab_title.mouseover(function(){
	  var $tab_i=$(this).index();
	  $tab_title.removeClass("current");    //先移除所有标题样式
	  $(this).addClass("current");
	  $tab_ul.eq($tab_i).show(); 
	  $tab_ul.eq($tab_i).siblings().hide();
	  });*/
	  
	  
	  
	
			var $tab_title = $('#news_btn li');
			var $tab_ul = $('#news_ul ul');
				
			
			$tab_title.mouseover(function(){
				var $this = $(this);
				var $t = $this.index();
				
				
				$tab_title.removeClass('current');
				$this.addClass('current');
				$tab_ul.css('display','none');
				$tab_ul.eq($t).css('display','block');
			})
		
	  
	  
	
	
	//导航
	$("div.nav ul li").mouseover(function(){
    $(this).addClass("current");
    $(this).children(".sub_nav").show();
    }).mouseout(function(){
     $(this).removeClass("current");
     $(this).children(".sub_nav").hide();
     });
	 
	 var $this_dd=$("div.sub_nav dl dd:last");
	 var core=$this_dd.index();
	 if(core<3){
		 $this_dd.parent("dl").addClass("wid");
		 $this_dd.parents(".sub_nav").css("left","-5px");
		 $this_dd.parents(".sub_nav").find(".sub_icon").css("left","49px")
		 }
	 
	 $("div.nav ul li:last,.news_tab_btn span:last,.bottom_list a:last").addClass("nobg");
	 
	 
	
	 
	
		
});
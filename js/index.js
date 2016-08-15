window.onload=function(){ 
	var count = 0;
	var box=jQuery("#count");  
	var timer=setInterval(function(){
		count++;
		box.text(count+'%');
		if(count>99){
			clearInterval(timer);
		} 
	},6); 

	var twoConTl=new TimelineMax();  
	jQuery(".firstCon").find("a").click(function(){
		jQuery(".firstCon").animate({opacity:0,zIndex:0});
		jQuery(".TwotCon").animate({opacity:1,zIndex:1}); 
		twoConTl.fromTo(jQuery(".TwotCon").find("h2"),0.8,{y:-90,autoAlpha:0},{y:0,autoAlpha:1})
		 		.fromTo(jQuery(".TwotCon").find("span"),0.8,{scale:0,z:100,autoAlpha:0},{scale:1,z:0,autoAlpha:1},"-=0.5");
	}); 

	jQuery(document).ready(function() {
	    jQuery('#fullpage').fullpage({  
	    	css3:true, 
	    	anchors: ['intro', 'platform', 'about-us', 'demo','contact-us'], 
	    	navigation: true,
			navigationPosition: 'right',
			afterLoad: function(anchorLink, index){
				if(index == 1){
					jQuery("#fp-nav").removeClass("purple"); 
				}else{
					jQuery("#fp-nav").addClass("purple");
				}  
				document.getElementById("seeDemoAnimateImg").classList.add("show");
	    		document.getElementById("seeDemoSvg").classList.add("hidde");
	    		
			}, 
			onleave:function(){
				document.getElementById("seeDemoAnimateImg").classList.remove("show");
	    		document.getElementById("seeDemoSvg").classList.remove("hidde");
			}
	    });
	});

	
}
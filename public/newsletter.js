$(document).ready(function(){
  
  // Construct the newsletter
  (function createPages(){
		if($("#newsletter").length){
			var pageList = $("#newsletter div.newsletterWrap > ul > li");
			var pages = 2;
			for(var i = 0; i < pageList.length; i+=pages) {
				pageList.slice(i, i+pages).wrapAll("<div class='page'></div>");
			}
			//add the page flip sound html
			$(`<audio id="pageFlipSound" style="display: none;">
						 <source src="public/page-flip.mp3" type="audio/mpeg">
				 </audio>`).appendTo("body");
		}
  })();

  var count = 1;
		var pageCount = 0;
  // Assign classes to pages
  $("#newsletter div.page").each(function(){
    if(count === 1){
      $(this).addClass("active")
    }
    $(this).children().eq(0).addClass("front");
    $(this).children().eq(1).addClass("back");
    count++;
			$(this).children().each(function(){
				pageCount++
				$("<div class='pageNum'><span>"+pageCount+"</span> <span>of</span> <span class='total'>"+$("div.page").children().length+"</span></div>")
					.appendTo($(this).children());
			});
  });
	
	
		$("#newsletter li.back #nextBtn a").each(function(){
			$(this).text("« prev");
			$(this).parent().parent().addClass("prev");
		});
// ---Events---
 $("#newsletter a.prev, #nextBtn.prev").on("click", function(){
   prevPage();
 });
  $("#newsletter a.next, #nextBtn:not(.prev)").on("click", function(){
   nextPage();
 });
	
	$("#endBtn").on("click", function(){
		$("div.page").each(function(){
			$(this).removeClass("flipped hidden remove active");
		});
		$("div.page:first-child").addClass("active");
	});
	
//$('.newsletterWrap').on('click', '.active', function(){
//  if(!$("#newsletter div.page:last-of-type").hasClass("flipped")){
//    nextPage();
//  }
//});
//$('.newsletterWrap').on('click', '.flipped', function(){
//    prevPage();
//});
// For Mobile
$('.newsletterWrap').on("swipeleft", nextPage);
$('.newsletterWrap').on("swiperight", prevPage);
	
	
	// Newsletter navigation
		$(".topNav").each(function(){
			$(this).hide();
		});
//			$("a.nav").click(function() {
//				$(this).siblings().last().slideToggle();
//			});
	
	// Moves the form at the bottom of the page
	// to the last page of the newsletter
	$(".secureform").appendTo("#newsletterFeedback");
	
	// Moves the banner on the page to the newsletter
	$("div.slider").appendTo("#newsletterBanner");
	
	// Adds the visible class last to delay
	setTimeout(function() {
		$("#newsletter").addClass("visible");
	}, 2500);


	(function changePages(){
		let newsletter = document.querySelector("#newsletter");
		let hover = false;
		let [mousePosDown, mousePosUp] = [0, 0];
		newsletter.addEventListener("mouseover", () => {
			hover = true;
		});
		newsletter.addEventListener("mouseout", () => {
			hover = false;
		});
		newsletter.addEventListener("mousedown", (e) => {
			if(!hover) return;
			mousePosDown = e.clientX;
		});
		newsletter.addEventListener("mouseup", (e) => {
			if(!hover) return;
			mousePosUp = e.clientX;
			let diff = mousePosDown - mousePosUp;
			if(diff < 0) diff = Math.abs(diff);
			if(diff < 200){
				document.querySelector("body").classList.remove("no-select");
			} else {
				document.querySelector("body").classList.add("no-select");
			}
			if(mousePosDown > mousePosUp && diff > 200) {
				nextPage();
			}
			if(mousePosUp > mousePosDown && diff > 200) {
				prevPage();
			} 
		});
	})();

});//doc ready

// Keyboard Accessibility
$(window).keydown(function(e){
   if (e.keyCode == 37) {
      prevPage();
   }
  if (e.keyCode == 39) {
      nextPage();
   }
});

// Prev and Next Functions
function prevPage() {
	$("#newsletter").removeClass("right").addClass("left");
	var length = parseInt($(".flipped").length);
	if (length === 1){
		$("div.page").removeClass("hidden");
	} else {
		$("div.page").eq(length-1).removeClass("hidden");
	}
  $('.flipped').last().removeClass('flipped').addClass('active')
    .siblings('.page').removeClass('active');
	var active = parseInt($(".active").index()+1);
	if($("div.remove").length === 1){
		$("div.page").eq(0).removeClass("remove");
	}
	if($("div.remove").length === 2){
		$("div.page").eq(1).removeClass("remove");
	}
	if($("#newsletter div.page:last-child").hasClass("active")){
				$("#newsletter div.page").eq(parseInt($(".page").length-2)).removeClass("remove");
		}
	$("div.page").eq($(".page.active").index()-1).removeClass("remove");
	setTimeout(function(){
		pageFlipSound() //page flip sound
		document.querySelector("body").classList.remove("no-select");
	}, 250);
}
function nextPage() {
		$("#newsletter").removeClass("left").addClass("right");
  $('.active').removeClass('active').addClass('flipped')
	.next('.page').addClass('active').siblings();
	pageFlipSound() //page flip sound
	setTimeout(function() {
		$(".flipped").addClass("hidden");
		var pageIndex = parseInt($("div.page.active").index()+1);
	if(pageIndex > 2){
		$("div.page").slice(0,pageIndex-2).addClass("remove");
	}
		var length = $("div.page").length;
	if($("div.page.active").index() === -1){
				$("div.page").slice(0,length-1).addClass("remove");
	}
	document.querySelector("body").classList.remove("no-select");
}, 750);
}

function pageFlipSound(){
	var audio = document.querySelector("#pageFlipSound");
	//reset to start time
	audio.currentTime = 0;
	audio.play();
}
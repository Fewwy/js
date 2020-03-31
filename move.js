$(function animate() {
    console.log("in function");
    $(".box").click(function(){
        respawn();
        }); 
    $(".box").animate({
        marginLeft: "90%"
        }, {
            duration: 10000,
            easing: "linear",
            complete: function () {
                gameover();
            }
        });
});

function gameover(){
	console.log("function complete");
      var idecko = $("monstr").attr("id");
     $("#monstr" + idecko).style = "display:none";
    console.log("GAME OVER!");
};
function getDuration(){
    var speed = Math.round(10000*Math.random());
    console.log("duration: " + speed);
    return speed;
}

function respawn(){
	console.log("stop animation");
    var idecko = $("monstr").attr("id");
     $("#monstr" + idecko).stop();
	var duration = getDuration();
	console.log("restart animate");
    $("#monstr" + idecko).css('margin-left 0px');
	 $("#monstr" + idecko).animate({
            marginLeft: "90%"
        }, {
            duration: duration,
            easing: "linear",
            complete: function () {
				// 
				gameover();
            }
        });
}



 

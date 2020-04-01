var currentScore = 0;
var state = 0;

function animateMonster(monster){
    console.log('animateMonster ', monster);
    $(monster).click(function(){
    killFunction(this.id);
        }); 
    $(monster).animate({
        marginLeft: "90%"
        }, {
            duration: getDuration(),
            easing: "linear",
            complete: function () {
                gameover();
            }
        });
}

const getDuration = function(){
    return Math.round(40000*Math.random()/(currentScore+1));
    console.log("duration: " + speed);
}


 const killFunction = function(monstr) {
    console.log("clicked "+ monstr.id);
    monstr.style.display = "none";
    console.log("stop animation " + monstr.id);
    $(monstr).css({marginLeft: "0px"});
    $(monstr).stop();
    currentScore += 1;
    $("#currentScore").html('<b>' + currentScore + '</b>');
    console.log("show monstr " + monstr.id);
    console.log("restart animation " + monstr.id);
    $(monstr).animate({marginLeft: "90%"}, 
        {duration: getDuration(),
        easing: "linear", 
        complete: function () {
         gameover();
            }});
     monstr.style.display = "block";
     state = 1;
}



const newGame = function() {
console.log("new game started" + state);
currentSkore = 0;
if (state == 1){
        stopMonsters();
    }
    state = 1;
    putMonstersToStart();
    animateMonsters();
};

function pauseResumeGame(){
    if (state == 1){
        stopMonsters();
        state = 2;
    }
    else if (state == 2){
        animateMonsters();
        state = 1;
    }
}

function animateMonsters(){
    var boxes = document.getElementsByClassName("box");
    for (i = 0; i < boxes.length; i++) {
        animateMonster(boxes[i]);
    }
}

const gameover = function (){
    console.log("GAME OVER!");
    stopMonsters();
    state = 0;

}

const  stopMonsters = function(){ 
    $(".box").stop();
    $(".box").off();
}

function putMonstersToStart(){
    var boxes = document.getElementsByClassName("box");
    for (i = 0; i < boxes.length; i++) {
        boxes[i].style.marginLeft = "0px";
    }
} 

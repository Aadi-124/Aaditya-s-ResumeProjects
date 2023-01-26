

let progressbar = document.getElementById("songprogress");
let playbtn = document.getElementById("playpause");
let audioelement = new Audio('/Music/Peaky Blinder.mp3');
let songindex = 0;
let volume = document.getElementById("volume");
let like = document.getElementById("like");
let dislike = document.getElementById("dislike");
let more = document.getElementById("more");
let mute = document.getElementById("muteunmute");
let songlist = Array.from(document.getElementsByClassName("song"));
let song = Array.from(document.getElementsByClassName("songItem"));



audioelement.addEventListener('timeupdate',()=>{
    let progress = parseInt((audioelement.currentTime/audioelement.duration)*100);
    progressbar.value = progress;
});

console.log( document.getElementById("songpic").src);
console.log(audioelement.src);

song.forEach((element)=>{
    element.addEventListener('click',(e) => {
    let songid = e.target.id;
    songindex = songid;
    audioelement.pause();
    playbtn.src = "/Images/playbtn.svg";
    audioelement.src = songs[songid].file;
    audioelement.play();
    playbtn.src = "/Images/pausebtn.svg";
    changesongpic();
    });
});


const songs = [
    {song: "Tota jo kabhi tara", file:"/Music/Tota jo kabhi tara.mp3",cover:"/Images/tootajokabhitara.jpg", Duration:"4:35"},
    {song: "ApnaBanale", file:"/Music/ApnaBanale.mp3",cover:"/Images/apna bana le.jpg", Duration:"4:50"},
    {song: "Peaky Blinder", file:"/Music/Peaky Blinder.mp3",cover:"/Images/peaky blinder.jpeg", Duration:"5:15"},
    {song: "Tum Mere", file:"/Music/Tum Mere.mp3",cover:"/Images/tum mere.jpg", Duration:"3:15"},
    {song: "Vaaste", file:"/Music/Vaaste.mp3",cover:"/Images/vaaste.jpg", Duration:"2:30"},
];


function changesongpic()
{
    document.getElementById("songpic").src = songs[songindex].cover;
    document.getElementById("mainpic").src = songs[songindex].cover;
    document.getElementById("songtitle").innerHTML = songs[songindex].song;
}


songlist.forEach((element,i) => {
    element.getElementsByTagName("img")[0].src = songs[i].cover;
    element.getElementsByClassName("songname")[0].innerHTML = songs[i].song;
    element.getElementsByTagName("span")[1].innerHTML = songs[i].Duration;
    changesongpic();
});



playbtn.addEventListener('click',()=>{
    
    if(audioelement.paused || audioelement.currentTime <= 0)
    {
        audioelement.play();
        playbtn.src="/Images/pausebtn.svg";
    }
    else
    {
        audioelement.pause();
        playbtn.src="/Images/playbtn.svg";
    }
});




progressbar.addEventListener("change",()=>{audioelement.currentTime = (progressbar.value * audioelement.duration)/100; });



volume.addEventListener('change',()=>{audioelement.volume = volume.value/1000;});


like.addEventListener('click',()=>{
    if(like.src == "http://127.0.0.1:5500/Images/transperentlike.svg")
    {
        like.src = "/Images/whitelike.svg";
        dislike.src = "/Images/transperentdislike.svg";
    }
    else
    {
        like.src = "/Images/transperentlike.svg";
    }


});

dislike.addEventListener('click',()=>{
    if(dislike.src == "http://127.0.0.1:5500/Images/transperentdislike.svg"){dislike.src = "/Images/whitedislike.svg";like.src = "/Images/transperentlike.svg";}
    else{dislike.src = "/Images/transperentdislike.svg";}
});


mute.addEventListener('click',()=>{
    if(audioelement.muted)
    {
        audioelement.muted = false;
        mute.src = "/Images/unmute.svg";
    }
    else
    {
        audioelement.muted = true;
        mute.src = "/Images/mute.svg";
    }

});








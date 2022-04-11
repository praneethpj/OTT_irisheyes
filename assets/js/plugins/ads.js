// Dependencies
//import videojs from "video.js";
//var videojs = require('./videojs-libs/video.js');
//import "videojs-contrib-ads";
//var videojs = require('./videojs-libs/videojs-contrib-ads.js');
//import "videojs-ima";
//var videojs = require('./videojs-libs/videojs-ima.js');

// Styles
//import "video.js/dist/video-js.min.css";
//import "videojs-contrib-ads/dist/videojs-contrib-ads.css";
//import "videojs-ima/src/css/videojs.ima.css";

// Video tag => Video.js object
var player = videojs("content_video");
document.getElementById('content_video').onclick = function () {
  document.getElementById('content_video').play();
};
var isclick = false;
let midadplaying = false;
player.on("timeupdate", function () {
  var currentTime = this.currentTime();

  var edittime = currentTime.toFixed(2) % 600; //600 = 10 min
  console.log(edittime.toString().substring(0, 3) + ":" + edittime);
	checkLogin();
  if (
    (edittime.toString().substring(0, 3) === "0.0" ||
      edittime.toString().substring(0, 3) === "0.1") &&
    !midadplaying
  ) {
    //Math.round(currentTime)%720)===0 = 12 minutes
    if (!player.paused()) {
      midadplaying = true;
      console.info("PlayMid");
      playMidAd();
      //currentTime=currentTime+1;
    }
  }
});

//player.bigPlayButton.on('click', function(){
// do the action
//	isclick=true;
// alert("here"+isclick);

//});

// VAST files only, VMAP is not available
// Bumper ad uses mediafiles from "postroll"

// Helpers
function playPreroll() {
  if (prerollAdTag !== "") {
    var element = document.getElementById("content_video");
    //console.log("PPSTY "+element.style);
    element.style.paddingTop = "0";
    console.log("playing preroll...");
    checkLogin();
    try {
      player.ima.changeAdTag(prerollAdTag);
      player.ima.requestAds();
    } catch (err) {
      console.log("error vast : " + err);
    }
  }
}

let playedBumper = false;
function playBumper() {
  if (false) {
    console.log("playing bumper...");

    player.ima.changeAdTag(bumperAdTag);
    player.ima.requestAds();
    playedBumper = true;
  }
}

function playMidAd() {
  if (prerollAdTag !== "") {
    //var player = videojs("content_video");
    console.log("playing midAdTag...");
    //var pausebutton =document.getElementsByClassName('vjs-play-control vjs-control vjs-button vjs-paused')[0];
    // if(pausebutton!==undefined){
    //	 pausebutton.click();
    // }
    // var m=midAdTag;
    // var element = document.getElementById("content_video");
    //console.log("PPSTY "+element.style);
    //element.style.paddingTop  = "0"; player.play();
    //player.ima.changeAdTag(m);
    var element = document.getElementById("content_video");
    //console.log("PPSTY "+element.style);
    element.style.paddingTop = "0";

    player.ads.reset();
    player.ima.changeAdTag(prerollAdTag);
    player.ima.requestAds();
    player.play();
  }
}
// Initializing IMA
player.ima({
  debug: false,
  id: "content_video",

  // Some unrelated(?) configs
  disableFlashAds: false,
  showCountdown: false,
  showControlsForJSAds: true,

  // Default VMAP adtag from the example
  // adTagUrl: `http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpremidpostpod%26deployment%3Dgmf-js&cmsid=496&vid=short_onecue&correlator=`

  adsManagerLoadedCallback: () => {
    // FIX: Content blink
    player.addClass("bumper-ad");

    // Subscribe to all ads events here

    // This will be called when the preroll ad finished
    // Can't use "COMPLETE" because preroll might include more
    // than 1 ad, which triggers the "COMPLETE" event multiple times
    player.ima.addEventListener(
      window.google.ima.AdEvent.Type.ALL_ADS_COMPLETED,
      () => {
        console.log("All ads have been played");
        var element = document.getElementById("content_video");
        element.style.paddingTop = "56.6%";
        // var playbutton =document.getElementsByClassName('vjs-play-control vjs-control vjs-button vjs-playing')[0];
        //if(playbutton!==undefined){
        // playbutton.click();
        // }
        if (player.paused()) {
          player.play();
        }
        player.removeClass("bumper-ad");
        midadplaying = false;
        // Prevent bumper from playing indefinitely
        if (!playedBumper) playBumper();
      }
    );
  },
});

// Trigger preroll on first play
player.one("play", playPreroll);

// REST OF THE EXAMPLE IS UNTOUCHED
// #
// #
// #
// Remove controls from the player on iPad to stop native controls from stealing
// our click
var contentPlayer = document.getElementById("content_video_html5_api");
if (
  (navigator.userAgent.match(/iPad/i) ||
    navigator.userAgent.match(/Android/i)) &&
  contentPlayer.hasAttribute("controls")
) {
  contentPlayer.removeAttribute("controls");
}

// Initialize the ad container when the video player is clicked, but only the
// first time it's clicked.
var initAdDisplayContainer = function () {
  player.ima.initializeAdDisplayContainer();
  wrapperDiv.removeEventListener(startEvent, initAdDisplayContainer);
};

var startEvent = "click";
if (
  navigator.userAgent.match(/iPhone/i) ||
  navigator.userAgent.match(/iPad/i) ||
  navigator.userAgent.match(/Android/i)
) {
  startEvent = "touchend";
}

var wrapperDiv = document.getElementById("content_video");
wrapperDiv.addEventListener(startEvent, initAdDisplayContainer);

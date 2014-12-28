jQuery(window).load(function(){
    
    $(".rslides").responsiveSlides({
        auto: true,             // Boolean: Animate automatically, true or false
        speed: 2000,            // Integer: Speed of the transition, in milliseconds
        timeout: 5000,          // Integer: Time between slide transitions, in milliseconds
        pager: true,           // Boolean: Show pager, true or false
        nav: true,             // Boolean: Show navigation, true or false
        random: false,          // Boolean: Randomize the order of the slides, true or false
        pause: true,           // Boolean: Pause on hover, true or false
        pauseControls: true,    // Boolean: Pause when hovering controls, true or false
        prevText: "<",   // String: Text for the "previous" button
        nextText: ">",       // String: Text for the "next" button
        maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
        navContainer: "#c-nav",       // Selector: Where controls should be appended to, default is after the 'ul'
        manualControls: "",     // Selector: Declare custom pager navigation
        namespace: "rslides",   // String: Change the default namespace used
        before: function(){},   // Function: Before callback
        after: function(){}     // Function: After callback
      });
      
      $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if(scroll > 0){
           $(".navbar").css("top","0");
           $("#logo-box").hide();
        }
        else if(scroll == 0){
           $(".navbar").animate({ top: 90 }, {duration: 300, easing: 'easeOutBounce'});
           $("#logo-box").show();
        }
        else{}
    // Do something
        });
       
        map_initialize();
});
function map_initialize()
{
    var mapProp = {
      center:new google.maps.LatLng(0,0),
      zoom:2,
      mapTypeId:google.maps.MapTypeId.ROADMAP
      };
    var map=new google.maps.Map(document.getElementById("sg-map")
      ,mapProp);
}

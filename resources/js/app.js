// require('./bootstrap');

$("#portfolioButton").click(() => {
    
        $(".botaoPortifolio").addClass("active");
        $("#portfolioDiv").fadeIn(() => {
            $("#portfolioDiv .logo").animate({"opacity": 1, "margin-top": "20px"}, 500);
            // li items one a one time animation 
            $(".portfolioMenu ul li").each(function(index, element) {
                $(element).delay(index * 200).animate({"opacity": 1, "margin-left": "0px"}, 500);
            });
        });
})

$(".botaoPortifolio").click(() => {
    if($(".botaoPortifolio").hasClass("active")){
        $(".botaoPortifolio").removeClass("active");
        $(".portfolioMenu ul li").each(function(index, element) {
            $(element).delay(index * 200).animate({"opacity": 0, "margin-left": "-100px"}, 500);
        });
        $("#portfolioDiv .logo").animate({"opacity": 0, "margin-top": "-40px"}, 500);
        setTimeout(() => {
            $("#portfolioDiv").fadeOut();
        }, 1200);
    }
});


$('.imagem-produtos-container').owlCarousel({
    items:1,
    margin:10,
    autoPlay:false,
    loop:true,
    autoPlayTimeout: 500,
    autoPlaySpeed: 5000,
    stopOnHover : false
});
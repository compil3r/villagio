// require('./bootstrap');

$("#portfolioButton").click(() => {
    if($("#portfolioButton").hasClass("active")){
        $("#portfolioButton").removeClass("active");
        $(".portfolioMenu ul li").each(function(index, element) {
            $(element).delay(index * 200).animate({"opacity": 0, "margin-left": "-100px"}, 500);
        });
        $("#portfolioDiv .logo").animate({"opacity": 0, "margin-top": "-40px"}, 500);
        setTimeout(() => {
            $("#portfolioDiv").fadeOut();
        }, 1200);
        
    } else {
        $("#portfolioButton").addClass("active");
        $("#portfolioDiv").fadeIn(() => {
            $("#portfolioDiv .logo").animate({"opacity": 1, "margin-top": "20px"}, 500);
            // li items one a one time animation 
            $(".portfolioMenu ul li").each(function(index, element) {
                $(element).delay(index * 200).animate({"opacity": 1, "margin-left": "0px"}, 500);
            });
        });
    }
})
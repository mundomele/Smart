var twitter = {
    
};

twitter.mostrarTweets = function () {
    
    $(".twitter-bubble").fadeOut(0);
    var tweets = $(".twitter-bubble").size();
    var i = 1;
    setInterval(function(){
        $(".twitter-bubble:nth-child("+i+")").fadeIn(5000).fadeOut(5000);
        if(i===tweets) i = 1;
        else i++;
    },10500);
        
    
    
}

twitter.updateCompliment = function () {
    
    var cuentas = config.twitter.cuentas;
    cuentas = cuentas.split(",");
    cuentas = cuentas.join("-")
    
    $.getJSON("././php/twitter/twitter.php?cuentas="+cuentas, function (data) {
        console.log(data);
        var option="";
        option+='';               
        $.each(data, function(i) {
            option+='<div class="twitter-bubble">'; 
            option+=data[i]; 
            option+=''; 
            option+=''; 
            option+=''; 
            option+=''; 
            option+=''; 
            option+='</div>'; 
        });
        $("#cajontwitter").html(option);
        
        twitter.mostrarTweets();
        
    });

}


twitter.init = function () {
    
    this.updateCompliment();

    /*this.intervalId = setInterval(function () {
            this.updateCompliment();
    }.bind(this), 3000);*/

}







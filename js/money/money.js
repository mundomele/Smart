var money = {
    valor: config.money.valor,
    updateInterval: 3000,
    intervalId: null
};

/**
 * Changes the compliment visible on the screen
 */
money.updateCompliment = function () {
    
    $(".money").html(config.money.valor + " €");
    
    $("#mostuncent td:nth-child(2)").html(config.money.monedas.uncent);
    $("#mostuncent td:nth-child(3)").html(parseFloat(config.money.monedas.uncent*0.01).toFixed(2));

    $("#mostdoscent td:nth-child(2)").html(config.money.monedas.doscent);
    $("#mostdoscent td:nth-child(3)").html(parseFloat(config.money.monedas.doscent*0.02).toFixed(2));

    $("#mostcincocent td:nth-child(2)").html(config.money.monedas.cincocent);
    $("#mostcincocent td:nth-child(3)").html(parseFloat(config.money.monedas.cincocent*0.05).toFixed(2));

    $("#mostdiezcent td:nth-child(2)").html(config.money.monedas.diezcent);
    $("#mostdiezcent td:nth-child(3)").html(parseFloat(config.money.monedas.diezcent*0.1).toFixed(2));

    $("#mostveintecent td:nth-child(2)").html(config.money.monedas.veintecent);
    $("#mostveintecent td:nth-child(3)").html(parseFloat(config.money.monedas.veintecent*0.2).toFixed(2));

    $("#mostcunccent td:nth-child(2)").html(config.money.monedas.cinccent);
    $("#mostcunccent td:nth-child(3)").html(parseFloat(config.money.monedas.cinccent*0.5).toFixed(2));

    $("#mostuneuro td:nth-child(2)").html(config.money.monedas.uneuro);
    $("#mostuneuro td:nth-child(3)").html(parseFloat(config.money.monedas.uneuro*1).toFixed(2));

    $("#mostdoseuro td:nth-child(2)").html(config.money.monedas.doseuro);
    $("#mostdoseuro td:nth-child(3)").html(parseFloat(config.money.monedas.doseuro*2).toFixed(2));

}

money.init = function () {

	this.updateCompliment();

	/*this.intervalId = setInterval(function () {
		this.updateCompliment();
	}.bind(this), this.updateInterval)*/

}







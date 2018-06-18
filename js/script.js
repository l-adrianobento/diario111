/**/

$( document ).ready(function() {

    var currentDate = new Date().getTime();
    //var travelDate = new Date(2018, 6, 30, 10, 33, 30, 0).getTime(); DATA DA VIAGEM

    var travelDate = new Date(2018, 5, 18, 0, 0, 0, 0).getTime();
    var diffTime = travelDate - currentDate;
    var duration = moment.duration(diffTime, 'milliseconds');
    var interval = 1000;

    setInterval(function(){
        var texto = "";

        if(duration.months() > 0){
            texto += duration.months();
            if(duration.months() > 1)
                texto += " meses ";
            else
                texto += " mês ";
        }

        if(duration.days() > 0){
            texto += duration.days() + " dia";
            if(duration.days() > 1)
                texto += "s ";
            else
                texto += " ";
        }

        var hours = duration.hours();
        if(duration.hours() < 10)
            hours = "0"+duration.hours();
            
        var minutes = duration.minutes();
        if(duration.minutes() < 10)
            minutes = "0"+duration.minutes();

        var seconds = duration.seconds();
        if(duration.seconds() < 10)
            seconds = "0"+duration.seconds();

        texto += hours + ":" + minutes + ":" + seconds;

        duration = moment.duration(duration - interval, 'milliseconds');
        $('#cronometro').text(texto);
    }, interval);
    
});
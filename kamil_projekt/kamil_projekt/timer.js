function count()
{
    var today = new Date();
    var day = today.getDate();
        if(day < 10) day = "0"+day;
    var month = today.getMonth()+1;
        if(month < 10) month = "0"+month;
    var year = today.getFullYear();

    var hour = today.getHours();
        if(hour<10) hour = "0" + hour;
    var minutes = today.getMinutes();
        if(minutes<10) minutes = "0" + minutes;
    var seconds = today.getSeconds();
        if(seconds<10) seconds = "0" + seconds;

    document.getElementById("clock").innerHTML = day+"/"+month+"/"+year+ " | " +hour+":"+minutes+":"+seconds;
    setTimeout("count()",1000);
}

function days() {

    var week = new Date();
    var weekday =  week.getDay();
    parseInt(weekday);

    if(weekday == 0){
        document.getElementById("current_day").innerHTML = "niedziela";
    }
    if(weekday == 1){
        document.getElementById("current_day").innerHTML = "poniedziałek";
    }
    if(weekday == 2){
        document.getElementById("current_day").innerHTML = "wtorek";
    }
    if(weekday == 3){
        document.getElementById("current_day").innerHTML = "środa";
    }
    if(weekday == 4){
        document.getElementById("current_day").innerHTML = "czwartek";
    }
    if(weekday == 5){
        document.getElementById("current_day").innerHTML = "piątek";
    }
    if(weekday == 6){
        document.getElementById("current_day").innerHTML = "sobota";
    }
}

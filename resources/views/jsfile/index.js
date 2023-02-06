if(typeof mock_time == 'defined')
{
    var access_time = mock_time.getHours();
}
else{
    var access_time = new Date();
    var hours = access_time.getHours();
}


if(hours >= 6 && hours < 11)
{
    document.getElementById("title").innerHTML = "早安~";
}
else if(hours >= 11 && hours < 18)
{
    document.getElementById("title").innerHTML = "午安~";
}
else if(hours >= 18 && hours < 22)
{
    document.getElementById("title").innerHTML = "晚安~";
}
else
{
    document.getElementById("title").innerHTML = "睡不著嗎?";
}
document.getElementById("now_time").innerHTML = hours;
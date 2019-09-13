function date1()
{
    let date = new Date;
    let annee = date.getFullYear();
    let moi = date.getMonth();
    let mois = ['Janvier', 'F&eacute;vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre'];
    let j = date.getDate();
    let jour = date.getDay();
    let jours = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
    let resultat = 'Nous sommes le '+jours[jour]+' '+j+' '+mois[moi]+' '+annee;
    if (document.getElementById){
        document.getElementById("time").innerHTML=resultat;
    }
    setTimeout("date1()", 1000)
}

function heure()
{
    let hour = new Date;
    let h = hour.getHours();
    if(h<10)
    {
        h = "0"+h;
    }
    let m = hour.getMinutes();
    if(m<10)
    {
        m = "0"+m;
    }
    let s = hour.getSeconds();
    if(s<10)
    {
        s = "0"+s;
    }
    let resultat = 'Il est '+h+':'+m+':'+s;
    if (document.getElementById){
        document.getElementById("hour").innerHTML=resultat;
    }
    setTimeout("heure()", 1000)
}


if(window.localStorage.nb != 2)
{
    window.localStorage.nb = 1;
}
nb = window.localStorage.nb;

function changecss(nb)
{
    document.getElementById("style").setAttribute("href", "css/about"+nb+".css");
}
function switchcss (nb)
{
    if (nb == 1) window.localStorage.nb = 2;
    else window.localStorage.nb = 1;
    return window.localStorage.nb;
}

window.onload = function() { heure(); date1(); changecss(nb); };
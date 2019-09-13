if(window.localStorage.nb != 2)
{
    window.localStorage.nb = 1;
}
nb = window.localStorage.nb;

function changecss(nb)
{
    document.getElementById("style").setAttribute("href", "css/index"+nb+".css");
}
function switchcss (nb)
{
    if (nb == 1) window.localStorage.nb = 2;
    else window.localStorage.nb = 1;
    return window.localStorage.nb;
}

window.onload = function() { changecss(nb);};
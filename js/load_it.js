// JavaScript Document
function getBrowserName()
{
	var lsBrowser = navigator.userAgent;
    if (lsBrowser.indexOf("MSIE") >= 0)
    {  
		lsBrowser = "MSIE";
    }
    else if (lsBrowser.indexOf("Firefox") >= 0)
    {
        lsBrowser = "Firefox";
    }
    else if (lsBrowser.indexOf("Opera") >= 0)
    {
        lsBrowser = "Opera";
    }
	else if (lsBrowser.indexOf("Chrome") >= 0)
    {
        lsBrowser = "Chrome";
    }
    else
    {
        lsBrowser = "UNKNOWN";
    }
    return lsBrowser;
}
function load_it()
{
	if(getBrowserName() == "Chrome" || getBrowserName() == "0pera")
	{
		window.document.getElementById("right_arrow").style.top = "5em";
		window.document.getElementById("left_arrow").style.top = "5em";	
	}
	for (var i=0;i<window.document.formradio.radio_type_child.length;i++)
	{
		window.document.formradio.radio_type_child[i].style.cursor = "pointer";
		window.document.formradio.radio_type_child[i].onclick=function()
		{
			clickradio();
		}	
	}
	window.document.getElementById("left_arrow").style.visibility="hidden";
	window.document.getElementById("left_arrow").style.cursor="none";
}
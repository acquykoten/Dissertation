// JavaScript Document
$(document).ready(function(){
		//Right arrow
		var canvas1 = $("#right_arrow").get(0);
		var context1= canvas1.getContext("2d");
		
		context1.strokeStyle="red";
		context1.lineWidth="2";
		
		context1.beginPath();
		context1.moveTo(0,0);
		context1.lineTo(20,20);
		context1.closePath();
		context1.stroke();
		
		context1.beginPath();
		context1.moveTo(0,40);
		context1.lineTo(20,18);
		context1.closePath();
		context1.stroke();
		
		//Left arrow
		var canvas2 = $("#left_arrow").get(0);
		var context2= canvas2.getContext("2d");
		
		context2.strokeStyle="red";
		context2.lineWidth="2";
		
		context2.restore();
		context2.beginPath();
		context2.moveTo(20,2);
		context2.lineTo(2,22);
		context2.closePath();
		context2.stroke();
		
		context2.beginPath();
		context2.moveTo(20,40);
		context2.lineTo(2,20);
		context2.closePath();
		context2.stroke();		
});
function left_right_arrow(x)
{		
	var hinh = window.document.getElementsByName("slider_image_is_used").item(0);
	for (var i=0;i<=window.document.formradio.radio_type_child.length-1;i++)
	{
		if(window.document.formradio.radio_type_child[i].checked)
		{				
			window.document.getElementById("left_arrow").style.visibility="visible";
			window.document.getElementById("left_arrow").style.cursor="pointer";
			window.document.getElementById("right_arrow").style.visibility="visible";
			window.document.getElementById("right_arrow").style.cursor="pointer";		
			window.document.formradio.radio_type_child[i + x].checked = true;
			hinh.src = "image/film/" + window.document.formradio.radio_type_child[i + x].value;
			if(i == 0)
			{
				if(x == -1)
				{
					hinh.src = "image/film/" + window.document.formradio.radio_type_child[0].value;
					window.document.formradio.radio_type_child[0].checked = true;
				}
			}
			if(i == window.document.formradio.radio_type_child.length-2)
			{
				if(x == 1)
				{
					window.document.getElementById("right_arrow").style.visibility="hidden";
					window.document.getElementById("right_arrow").style.cursor="none";
				}
			}
			if(i == 1)
			{
				if(x == -1)
				{
					window.document.getElementById("left_arrow").style.visibility="hidden";
					window.document.getElementById("left_arrow").style.cursor="none";
				}
			}
			if(i == window.document.formradio.radio_type_child.length-1)
			{
				if(x == 1)
				{
					hinh.src = "image/film/" + window.document.formradio.radio_type_child[window.document.formradio.radio_type_child.length-1].value;
					window.document.formradio.radio_type_child[window.document.formradio.radio_type_child.length-1].checked = true;	
				}
			}
			break;
		}
	}
}	
function clickradio()
{
	var hinh=window.document.getElementById('slider_image_is_used');
	for (var i=1;i<=window.document.formradio.radio_type_child.length-2;i++)
	{

		if (window.document.formradio.radio_type_child[i].checked)
		{
			hinh.src="image/film/" + window.document.formradio.radio_type_child[i].value;
			window.document.getElementById("right_arrow").style.visibility="visible";
			window.document.getElementById("right_arrow").style.cursor="pointer";
			window.document.getElementById("left_arrow").style.visibility="visible";
			window.document.getElementById("left_arrow").style.cursor="pointer";
		}
	}	
	if (window.document.formradio.radio_type_child[0].checked)
	{
		window.document.getElementById("left_arrow").style.visibility="hidden";
		window.document.getElementById("left_arrow").style.cursor="none";
		window.document.getElementById("right_arrow").style.visibility="visible";
		window.document.getElementById("right_arrow").style.cursor="pointer";
		hinh.src="image/film/" + window.document.formradio.radio_type_child[0].value;
	}
	if (window.document.formradio.radio_type_child[window.document.formradio.radio_type_child.length-1].checked)
	{
		window.document.getElementById("right_arrow").style.visibility="hidden";
		window.document.getElementById("right_arrow").style.cursor="none";
		window.document.getElementById("left_arrow").style.visibility="visible";
		window.document.getElementById("left_arrow").style.cursor="pointer";
		hinh.src="image/film/" + window.document.formradio.radio_type_child[window.document.formradio.radio_type_child.length-1].value;
	}
}
function calcuate_cost(){

	var city = document.registerform.city.value;
	var city2 = document.registerform.city2.value;

	var lat1 = 0;
	var lon1 = 0 ;
	var lat2 = 0;
	var lon2 = 0 ;
	console.log(city);
	var bil = 0;

	debugger;
	if (city != "Select City" || city2!= "Select City" ){


		var xhr =new XMLHttpRequest();

//		debugger;
		xhr.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200)
			{
				var mmyArr = JSON.parse(this.responseText);

	//		console.log(this.responseText);
			lat1 = mmyArr.latitude;
			lon1 =mmyArr.longitude;



						var xhrp =new XMLHttpRequest();


					xhrp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200)
						{
							var myArr = JSON.parse(this.responseText);

					//	console.log(this.responseText);
						lat2 = myArr.latitude;
						lon2 = myArr.longitude;
						console.log(lat2);
						console.log(lat1);
						console.log(lon2);
						console.log(lon1);
							 bil = (getDistanceFromLatLonInKm(lat1,lon1 ,lat2 ,lon2 )* 3) + 60;
							 bil = bil.toFixed(2);

							document.getElementById("bill").innerHTML ="Estimated cost "+  bil.toString() + " BDT";
							document.getElementById("bill").value = bil;
							document.getElementById("payable").value = bil;

							console.log(bil);

						}
					};
					xhrp.open("GET","../php/city_location.php?cid="+city2,true);
					xhrp.send();


			}
		};
		xhr.open("GET","../php/city_location.php?cid="+city,true);
		xhr.send();






	document.getElementById("bill").hidden = false;
	document.getElementById("bill").style["color"] = "white";

}
else {
	document.getElementById("bill").innerHTML = "Select Location First"
	document.getElementById("bill").hidden = false;
	document.getElementById("bill").style["color"] = "red";
}
}


/// reference https://stackoverflow.com/questions/27928/calculate-distance-between-two-latitude-longitude-points-haversine-formula
function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
  var R = 6371; // Radius of the earth in km
  var dLat = deg2rad(lat2-lat1);  // deg2rad below
  var dLon = deg2rad(lon2-lon1);
  var a =
    Math.sin(dLat/2) * Math.sin(dLat/2) +
    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
    Math.sin(dLon/2) * Math.sin(dLon/2)
    ;
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
  var d = R * c; // Distance in km
  return d;
}

function deg2rad(deg) {
  return deg * (Math.PI/180)
}
function validateform(){
	calcuate_cost();


var contains=document.registerform.contains.value;
var weight=document.registerform.weight.value;
var width = document.registerform.width.value;
var height = document.registerform.height.value;
var product_desc = document.registerform.product_desc.value;
var billing_method = document.registerform.billing_method.value;

var name=document.registerform.fullname.value;
var phone =document.registerform.phone_no.value;
var email = document.registerform.email.value;
var address = document.registerform.address.value;
var city = document.registerform.city.value;
var state = document.registerform.state.value;
var gender = document.registerform.gender.value;
var payable = document.registerform.payable.value;





var name2=document.registerform.fullname2.value;
var phone2 =document.registerform.phone_no2.value;
var email2 = document.registerform.email2.value;
var gender2 = document.registerform.gender2.value;
var address2 = document.registerform.address2.value;
var city2 = document.registerform.city2.value;
var state2 = document.registerform.state2.value;

var haserror = true ;

console.log("hello");

if (payable==null || payable==""){

	  document.getElementById("payable_error").innerHTML="Destination is required to calculate cost";
    document.getElementById("cost_calcualte").focus();
    document.getElementById("payable_error").style["color"] = "red";
  haserror = false;
}
else {
  document.getElementById("payable_error").innerHTML="";
}


if (billing_method==null || billing_method==""){

	  document.getElementById("billing_method_error").innerHTML="Select Any one billing methode.";
    document.getElementById("billing_method").focus();
    document.getElementById("billing_method_error").style["color"] = "red";
  haserror = false;
}
else {
  document.getElementById("billing_method_error").innerHTML="";
}


if (weight==null || weight==""){

	  document.getElementById("weight_error").innerHTML="Weight can't be blank";
    document.getElementById("weight").focus();
    document.getElementById("weight_error").style["color"] = "red";
  haserror = false;
}
else if (isNaN(weight))
{
	document.getElementById("weight_error").innerHTML="Weight must be neumeric.";
	document.getElementById("weight").focus();
	document.getElementById("weight_error").style["color"] = "red";
haserror = false;
}
else {
  document.getElementById("weight_error").innerHTML="";
}


if (width==null || width==""){

	  document.getElementById("width_error").innerHTML="Width can't be blank";
    document.getElementById("width").focus();
    document.getElementById("width_error").style["color"] = "red";
  haserror = false;
}
else if (isNaN(width))
{
	document.getElementById("width_error").innerHTML="Width must be neumeric.";
	document.getElementById("width").focus();
	document.getElementById("width_error").style["color"] = "red";
haserror = false;
}
else {
  document.getElementById("width_error").innerHTML="";
}


if (height==null || height==""){

	  document.getElementById("height_error").innerHTML="Height can't be blank";
    document.getElementById("height").focus();
    document.getElementById("height_error").style["color"] = "red";
  haserror = false;
}
else if (isNaN(height))
{
	document.getElementById("height_error").innerHTML="Height must be neumeric.";
	document.getElementById("height").focus();
	document.getElementById("height_error").style["color"] = "red";
haserror = false;
}
else {
  document.getElementById("height_error").innerHTML="";
}


if (product_desc==null || product_desc==""){

	  document.getElementById("product_desc_error").innerHTML="Content can't be blank";
    document.getElementById("product_desc").focus();
    document.getElementById("product_desc_error").style["color"] = "red";
  haserror = false;
}
else {
  document.getElementById("product_desc_error").innerHTML="";
}

if (contains==null || contains==""){

	  document.getElementById("contains_error").innerHTML="Content can't be blank";
    document.getElementById("contains").focus();
    document.getElementById("contains_error").style["color"] = "red";

  haserror = false;

}
else {
  document.getElementById("contains_error").innerHTML="";
}


if (address==null || address==""){

	  document.getElementById("address_error").innerHTML="Address can't be blank";
    document.getElementById("address_label").focus();
    document.getElementById("address_error").style["color"] = "red";

  haserror = false;

}
else {
  document.getElementById("address_error").innerHTML="";
}
debugger;
if (address2==null || address2==""){

	  document.getElementById("address_error2").innerHTML="Address can't be blank";
    document.getElementById("address_label2").focus();
    document.getElementById("address_error2").style["color"] = "red";

  haserror = false;

}
else {
  document.getElementById("address_error2").innerHTML="";
}


debugger;


if (city==null || city=="Select City"){

	  document.getElementById("city_error").innerHTML="City can't be blank";
    document.getElementById("city").focus();
     document.getElementById("city_error").style["color"] = "red";

  haserror = false;

}
else {
  document.getElementById("city_error").innerHTML="";
}

if (city2==null || city=="Select City"){

	  document.getElementById("city_error2").innerHTML="City can't be blank";
    document.getElementById("city2").focus();
     document.getElementById("city_error2").style["color"] = "red";

  haserror = false;

}
else {
  document.getElementById("city_error2").innerHTML="";
}



if (state==null || state=="Select State"){

	  document.getElementById("state_error").innerHTML="State can't be blank";
    document.getElementById("state").focus();
     document.getElementById("state_error").style["color"] = "red";

  haserror = false;

}
else {
  document.getElementById("state_error").innerHTML="";
}

if (state2==null || state2=="Select State"){

	  document.getElementById("state_error2").innerHTML="State can't be blank";
    document.getElementById("state2").focus();
     document.getElementById("state_error2").style["color"] = "red";

  haserror = false;

}
else {
  document.getElementById("state_error2").innerHTML="";
}




if (phone==null || phone==""){

	  document.getElementById("phone_error").innerHTML="Phone can't be blank";
    document.getElementById("phone_no").focus();
     document.getElementById("phone_error").style["color"] = "red";

  haserror = false;

}
else if (isNaN(phone))
{
	document.getElementById("phone_error").innerHTML="Phone must be neumeric ";
	document.getElementById("phone_no").focus();
	 document.getElementById("phone_error").style["color"] = "red";
haserror = false;
}
else {
  document.getElementById("phone_error").innerHTML="";
}
if (phone2==null || phone2==""){

	  document.getElementById("phone_error2").innerHTML="Phone can't be blank";
    document.getElementById("phone_no2").focus();
     document.getElementById("phone_error2").style["color"] = "red";

  haserror = false;

}
else if (isNaN(phone2))
{
	document.getElementById("phone_error2").innerHTML="Phone must be neumeric.";
	document.getElementById("phone_no2").focus();
	 document.getElementById("phone_error2").style["color"] = "red";
haserror = false;
}
else {
  document.getElementById("phone_error2").innerHTML="";
}



if (gender==null || gender==""){

	  document.getElementById("gender_error").innerHTML="Gender can't be blank";
    document.getElementById("gender").focus();
     document.getElementById("gender_error").style["color"] = "red";

  haserror = false;

}
else {
  document.getElementById("gender_error").innerHTML="";
}
if (gender2==null || gender2==""){

	  document.getElementById("gender_error2").innerHTML="Gender can't be blank";
    document.getElementById("gender2").focus();
     document.getElementById("gender_error2").style["color"] = "red";

  haserror = false;

}
else {
  document.getElementById("gender_error2").innerHTML="";
}





if (email2==null || email2==""){

	  document.getElementById("email_error2").innerHTML="Email can't be blank";
    document.getElementById("email2").focus();
     document.getElementById("email_error2").style["color"] = "red";
  haserror = false;
}
else {
  document.getElementById("email_error2").innerHTML="";
}

if (email==null || email==""){


	  document.getElementById("email_error").innerHTML="Email can't be blank";
    document.getElementById("email").focus();
     document.getElementById("email_error").style["color"] = "red";
  haserror = false;
}
else {
  document.getElementById("email_error").innerHTML="";
}




if (name==null || name==""){

	  document.getElementById("name_error").innerHTML="Name can't be blank";
    document.getElementById("fullname").focus();
     document.getElementById("name_error").style["color"] = "red";

  haserror = false;

}
else {
  document.getElementById("name_error").innerHTML="";
}
if (name2==null || name2==""){

	  document.getElementById("name_error2").innerHTML="Name can't be blank";
    document.getElementById("fullname2").focus();
     document.getElementById("name_error2").style["color"] = "red";

  haserror = false;

}
else {
  document.getElementById("name_error2").innerHTML="";
}




console.log(haserror);


return haserror;


}

function getquote(el){
	console.log("getting quote");
	var xhr = new XMLHttpRequest();
	xhr.open('GET', '/quote.php');
	xhr.onload = function() {
		if (xhr.status === 200) {
			// console.log(xhr.responseText);
			document.querySelector("#quote").innerHTML = xhr.responseText;
		}
		else {
			console.log('Request failed.  Returned status of ' + xhr.status);
		}
	};
	xhr.send();
}
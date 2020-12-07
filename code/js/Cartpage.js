function checkout(){
	console.log('here');
	var pardiv=document.getElementById('mainContainer');
	console.log(pardiv);
	var cartItems = JSON.parse(localStorage.getItem('itemsArray')) || [];
	/*if(cartItems.length==0){
		var newDiv=document.createElement("div");
		div.innerText="Cart is EMPTY !!";
	}
	else{
		var newDiv=document.createElement("div");
		newDiv.setAttribute("class","table-responsive");
		pardiv.appendChild(newDiv);
		var newTag=document.createElement("table");
		newDiv.appendChild(newTag);
		var oldTag=newTag;
		newTag.setAttribute("class","table");
		newTag=document.createElement("thead");
		oldTag.appendChild(newTag);
		var newTag2=document.createElement("tbody");
		oldTag.appendChild(newTag2);
		oldTag=newTag;
		newTag=document.createElement("tr");
		oldTag.appendChild(newTag);
		oldTag=newTag;
		newTag=document.createElement("th");
		oldTag.appendChild(newTag);
		newTag=document.createElement("th");
		newTag.innerText="Product";
		oldTag.appendChild(newTag);
		newTag=document.createElement("th");
		newTag.innerText="Price";
		oldTag.appendChild(newTag);
		newTag=document.createElement("th");
		newTag.innerText="Quantity";
		oldTag.appendChild(newTag);
		newTag=document.createElement("th");
		newTag.innerText="Total";
		oldTag.appendChild(newTag);
	}*/
}

function callme(){
	console.log('here');
	var pardiv=document.getElementById('mainContainer');
	console.log(pardiv);
	var cartItems = JSON.parse(localStorage.getItem('itemsArray')) || [];
	if(cartItems.length==0){
		var newDiv=document.createElement("div");
		newDiv.innerText="Cart is EMPTY !!";
	}
	else{
		var newDiv=document.createElement("div");
		newDiv.setAttribute("class","table-responsive");
		pardiv.appendChild(newDiv);
		var newTag=document.createElement("table");
		newDiv.appendChild(newTag);
		var oldTag=newTag;
		newTag.setAttribute("class","table");
		newTag=document.createElement("thead");
		oldTag.appendChild(newTag);
		var newTag2=document.createElement("tbody");
		oldTag.appendChild(newTag2);
		oldTag=newTag;
		newTag=document.createElement("tr");
		oldTag.appendChild(newTag);
		oldTag=newTag;
		newTag=document.createElement("th");
		newTag.innerText="Product";
		oldTag.appendChild(newTag);
		newTag=document.createElement("th");
		newTag.innerText="Price";
		oldTag.appendChild(newTag);
		newTag=document.createElement("th");
		newTag.innerText="Quantity";
		oldTag.appendChild(newTag);
		newTag=document.createElement("th");
		newTag.innerText="Total";
		oldTag.appendChild(newTag);
		console.log('there');
		var sum=0;
		let i;
		console.log(cartItems);
		for(i=0;i<cartItems.length;i++){
			console.log('there');
			oldTag=newTag2;
			newTag=document.createElement("tr");
			oldTag.appendChild(newTag);
			oldTag=newTag;
			newTag=document.createElement("td");
			newTag.innerText=cartItems[i]["product-name"];
			oldTag.appendChild(newTag);
			newTag=document.createElement("td");
			newTag.innerText=cartItems[i]["product-price"];
			oldTag.appendChild(newTag);
			newTag=document.createElement("td");
			newTag.innerText=cartItems[i]["product-quantity"];
			oldTag.appendChild(newTag);
			newTag=document.createElement("td");
			let temp=parseInt(cartItems[i]["product-price"],10)*cartItems[i]["product-quantity"]
			newTag.innerText=temp;
			sum+=temp;
			oldTag.appendChild(newTag);
		}
		var sum1=sum-240;
		if(sum1<0){
			sum1=0;
		}
		document.getElementById("subtot").innerText = "Rs. "+sum;
		document.getElementById("milesd").innerText = "Rs. "+"240";
		document.getElementById("tot").innerText = "Rs. "+sum1;
	}
}

function ending(){
	localStorage.clear();
}
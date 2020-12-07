function addtocart(nid,pid){
	console.log('here');
	var name = document.getElementById(nid);
	console.log(name.innerText);
	var price = document.getElementById(pid);
	console.log(price.innerText);
	var oldItems = JSON.parse(localStorage.getItem('itemsArray')) || [];
	let i=0;
	let flag=1;
	for(i=0;i<oldItems.length;i++){
		if(oldItems[i]["product-id"]==pid){
			//console.log(oldItems[i]["product-quantity"]);
			oldItems[i]["product-quantity"]=oldItems[i]["product-quantity"]+1;
			flag=0;
			break;
		}
	}
	if(flag){
	var newItem = {
		'product-id':pid,
		'product-name':name.innerText,	
		'product-price':price.innerText,
		'product-quantity':1
	}
	oldItems.push(newItem);
}
	localStorage.setItem('itemsArray',JSON.stringify(oldItems));
}
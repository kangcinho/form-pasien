function textOnly(word){
	var reg = /^[a-z'\s]+$/i;
	return reg.test(word)
}

function numberOnly(word){
	var reg = /^\d+$/;
	return reg.test(word)
}

function phoneNumber(word){
	var reg = /^[\+]?[(]?[0-9]{0,4}[)]?[\s]?[0-9]{4,11}$/im;
	return reg.test(word)
}

function email(word){
	var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return reg.test(String(word).toLowerCase());
}

function noIdentitas(word){
	var reg = /^[-\d]+$/;
	return reg.test(word)
}
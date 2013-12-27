function gDetail(wxaccountid) {
	location.href = "/index.php/G/Detail/index?wxaccountid=" + wxaccountid;
}

function gProduct(wxaccountid) {
	location.href = "/index.php/G/Product/index?wxaccountid=" + wxaccountid;
}

function gRecommand(wxaccountid) {
	location.href = "/index.php/G/Product/recommandProducts?wxaccountid="
			+ wxaccountid;
}

function gRoll(wxaccountid) {
	alert("努力开发中，敬请期待！");
}

function gOrderOnline(wxaccountid) {
	alert("努力开发中，敬请期待！");
}

function gActivity(wxaccountid) {
	alert("努力开发中，敬请期待！");
}

function gCoupons(wxaccountid) {
	alert("努力开发中，敬请期待！");
}

function gFeedBack(wxaccountid) {
	alert("努力开发中，敬请期待！");
}

function gContact(wxaccountid) {
	location.href = "/index.php/G/Contact/index?wxaccountid=" + wxaccountid;
}

function gProductOnClick(wxaccountid, gproductid) {
	location.href = "/index.php/G/Product/productInfo?wxaccountid="
			+ wxaccountid + "&gProductId=" + gproductid;
}
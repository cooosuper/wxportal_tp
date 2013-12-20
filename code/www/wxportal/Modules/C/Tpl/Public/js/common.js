var registerUrl = '/index.php/C/Register/handleRegister';
var loginUrl = '/index.php/C/Login/handleLogin';
var fillPersonInfo = '/index.php/C/Manage/fillPersonInfo';

$(document).ready(function() {
	$("#registerForm").submit(function() {
		register();
		return false;
	});
	
	$("#loginForm").submit(function() {
		login();
		return false;
	});
	
	$("#personInfoForm").submit(function() {
		addPersonInfo();
		return false;
	});
});

function register() {
	$("#tip").text("验证中...");

	var user = $("#logname").val();
	var pass = $("#logpassword").val();
	var email = $("#email").val();
	var verify = $("#verify").val();
	var confirm_pass = $("#confirm_password").val();

	if (user == "" | user == undefined) {
		$("#tip").text("请输入用户名");
		$("#logname").focus();
		return false;
	}

	if (user.length < 6) {
		$("#tip").text("用户名不能小于6位");
		$("#logname").focus();
		return false;
	}

	if (pass == "" | pass == undefined) {
		$("#tip").text("请输入密码");
		$("#logpassword").focus();
		return false;
	}
	if (pass.length < 8) {
		$("#tip").text("密码不能小于8位");
		$("#logpassword").focus();
		return false;
	}

	if (confirm_pass == "" | confirm_pass == undefined) {
		$("#tip").text("请再次输入密码");
		$("#confirm_password").focus();
		return false;
	}
	if (pass != confirm_pass) {
		$("#tip").text("两次输入的密码不一致");
		$("#confirm_password").focus();
		return false;
	}

	$.ajax({
		type : "POST",
		url : registerUrl,
		data : "logname=" + user + "&logpassword=" + pass + "&verify=" + verify
				+ "&email=" + email,
		beforeSend : function() {
			$("#tip").text("正在注册，请稍候......");
		},
		success : function(msg) {
			if (msg == "success") {
				$("#tip").text("注册成功，欢迎" + user + "加入！正在进入你的空间......");
				location.href = "/index.php/C/Index/index";
			} else if (msg == 'verify_failure') {
				$("#tip").text("验证码错误");
				$("#verify").focus();
			} else if (msg == 'add_fail') {
				$("#tip").text("加入数据库失败");
			} else {
				$("#tip").text("其他异常" + msg);
			}
		}
	});
}

function login() {
	$("#tip").text("验证中...");

	var user = $("#loginName").val();
	var pass = $("#loginPassword").val();
	var verify = $("#verify").val();

	if (user == "" | user == undefined) {
		$("#tip").text("请输入用户名");
		$("#loginName").focus();
		return false;
	}

	if (user.length < 6) {
		$("#tip").text("用户名不存在");
		$("#loginName").focus();
		return false;
	}

	if (pass == "" | pass == undefined) {
		$("#tip").text("请输入密码");
		$("#loginPassword").focus();
		return false;
	}
	if (pass.length < 8) {
		$("#tip").text("用户名或密码错误");
		$("#loginPassword").focus();
		return false;
	}

	$.ajax({
		type : "POST",
		url : loginUrl,
		data : "loginName=" + user + "&loginPassword=" + pass + "&verify=" + verify,
		beforeSend : function() {
			$("#tip").text("正在登录，请稍候......");
		},
		success : function(msg) {
			if (msg == "success") {
				$("#tip").text("登录成功，欢迎" + user + "加入！正在进入你的空间......");
				location.href = "/index.php/C/Index/index";
			} else if (msg == 'verify_failure') {
				$("#tip").text("验证码错误");
				$("#verify").focus();
			} else if (msg == 'login_fail') {
				$("#tip").text("用户名或密码错误");
			} else {
				$("#tip").text("其他异常:" + msg);
			}
		}
	});
}

function addPersonInfo() {
	$("#tip").text("验证中...");

	var name = $("#name").val();
	var creditcard = $("#creditcard").val();
	var phonenumber = $("#phonenumber").val();
	var address = $("#address").val();

	if (name == "" | name == undefined) {
		$("#tip").text("请输入姓名");
		$("#name").focus();
		return false;
	}

	if (creditcard == "" | creditcard == undefined) {
		$("#tip").text("请输入身份证");
		$("#creditcard").focus();
		return false;
	}
	
	if (phonenumber == "" | phonenumber == undefined) {
		$("#tip").text("请输入手机号码");
		$("#phonenumber").focus();
		return false;
	}
	
	if (address == "" | address == undefined) {
		$("#tip").text("请输入地址");
		$("#address").focus();
		return false;
	}

	$.ajax({
		type : "POST",
		url : fillPersonInfo,
		data : "name=" + name + "&creditcard=" + creditcard + "&phonenumber=" + phonenumber + "&address=" + address,
		beforeSend : function() {
			$("#tip").text("正在提交，请稍候......");
		},
		success : function(msg) {
			if (msg == "success") {
				$("#tip").text("提交成功");
				location.href = "/index.php/C/Manage/index";
			}else if (msg == 'submit_fail') {
				$("#tip").text("提交失败");
			} else {
				$("#tip").text("其他异常:" + msg);
			}
		}
	});
}
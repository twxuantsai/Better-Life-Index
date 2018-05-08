  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      //document.getElementById('status').innerHTML = 'Please log ' +
        //'into this app.';
	  location.href="index.php";
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }
  
  
			
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '324635984585359',
    cookie     : true,  
    xfbml      : true, 
    version    : 'v2.9'
  });

 FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    console.log(response.authResponse.accessToken);
  }
});

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/zh_TW/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me?fields=id,name,posts.until(2017/04/30).since(2016/05/01)', function(response) {
      console.log('Successful login for: ' + response.id);
	  var fbpid=response.id;
	  var fbname=response.name;
	  for (element in response.posts.data){
            post = response.posts.data[element]
			var nwords=nwords+" "+post.message;
			var ndate=ndate+" "+post.created_time;
      }
	  var words = nwords.replace(/\undefined/g,"").replace(/[，’'()。！!？：?+/=&.~\|\\\*^%$#@\-]/g,"").replace(/\r\n|\n/g,"").replace(/\r\n/g,"").replace(/\n/g,"");
	  var date = ndate.replace(/\undefined/g,"");
	  
	  var pid = document.getElementById("f1");
	  pid.value=fbpid;
	  var pname = document.getElementById("f2");
	  pname.value=fbname;
	  var pmessage = document.getElementById("f3");
	  pmessage.value=words;
	  var pdate = document.getElementById("f4");
	  pdate.value=date;
	  document.getElementById('ask').style.display = "inline";
	  document.getElementById('step1').style.display = "inline";
	  //document.getElementById('open').innerHTML = "OK"; 
    });
  }
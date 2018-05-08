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
      document.getElementById('rr').innerHTML = 'Please log ' +
        'into this app.';
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

  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
	document.getElementById('loading').style.display = "inline";
    FB.api('/me/posts?fields=message&limit=50', function(response) {
		for (element in response.data){
            post = response.data[element]
			var nwords=nwords+post.message;
          }
		var words = nwords.replace(/\undefined/g,"").replace(/[，’'()。！!？：?+/=&.~\|\\\*^%$#@\-]/g,"").replace(/\r\n|\n/g,"");
	    jieba(words);
    });
  }
  
  function fb_login()
{
    FB.login(function(response)
    {
        statusChangeCallback(response);
        console.log(response);
    }, {scope: 'user_posts'});
	
}

function jieba(words)
{
	var text1 = words;
	var a = [];
	var result = [];
	var count=0;
	call_jieba_cut(text1, function (a) {
			var b = a.filter(function (value) {
				return value!=" ";
			});
			for(var i =0; i<b.length ;i++)
			{
				var key = b[i];
				if(!result[key])
				{
					result[key]=1;
				}
				else{
					result[key]++;
				}
				//console.log(b[i]);
			}
			var max = -1;
			var max_key = [];
			var key;
			for(key in result)
			{
				if(max<result[key])
				{
					max=result[key];
					max_key = key;
				}
			}
			
			document.getElementById('step2').style.display = "inline";
			var div = document.getElementById("myresult"); 
			div.innerHTML = "<span id='resulttext'>The most often used words →</span>"+max_key+"<br><span id='resulttext'>The number of occurrences →</span>"+max;
			document.getElementById('loading').style.display = "none";
			//console.log(max_key+max);
	});
}
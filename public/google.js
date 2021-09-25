// Render Google Sign-in button
function renderButton() {
    gapi.signin2.render('gSignIn', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
    });
}

// Sign-in success callback
function onSuccess(googleUser) {
    // Get the Google profile data (basic)
    //var profile = googleUser.getBasicProfile();
    
    // Retrieve the Google account data
    gapi.client.load('oauth2', 'v2', function () {
        var request = gapi.client.oauth2.userinfo.get({
            'userId': 'me'
        });
        request.execute(function (resp) {
            // Display the user details
            
           
            saveUserData(resp);
        });
    });
    
    console.log(gapi);
}

// Sign-in failure callback
function onFailure(error) {
console.log(error);
}

// Sign out the user
function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
    auth2.disconnect();
        
    });
    
    
    
    auth2.disconnect();
    
}






function saveUserData(userData){
    var base_url = window.location.origin;
    $.ajax({
        url: base_url+"/Google/googleAdd",
        type: "post",
        data:{'oauth_provider':'google','userData': JSON.stringify(userData)},
        success: function (response) {
          window.location.href = base_url+"/Home"
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
    
}


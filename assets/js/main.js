// Complaints button event
document.querySelector("#complaints-btn").onclick = function() {
  document.querySelector(".replies").style.display = "none";
  document.querySelector(".complaints-section").style.display = "block";
  document.querySelector(".posts").style.display = "none";
  document.querySelector(".your-posts").style.display = "none";
  document.querySelector(".announcements").style.display = "none";

  document.getElementById("complaints-a").classList.remove("active");
  document.getElementById("feedback-a").classList.remove("active");
  document.getElementById("ann-a").classList.remove("active");
  document.getElementById("posts-a").classList.remove("active");
  document.getElementById("your-posts-a").classList.remove("active");

}

// Feeback button event
document.querySelector("#feedback-btn").onclick = function() {
  document.querySelector(".replies").style.display = "block";
  document.querySelector(".posts").style.display = "none";
  document.querySelector(".your-posts").style.display = "none";
  document.querySelector(".announcements").style.display = "none";
  document.querySelector(".complaints-section").style.display = "none";

  document.getElementById("complaints-a").classList.remove("active");
  document.getElementById("feedback-a").classList.add("active");
  document.getElementById("ann-a").classList.remove("active");
  document.getElementById("posts-a").classList.remove("active");
  document.getElementById("your-posts-a").classList.remove("active");

  getReplies();

}

// Announcements button event
document.querySelector("#announcements-btn").onclick = function() {
  document.querySelector(".your-posts").style.display = "none";
  document.querySelector(".posts").style.display = "none";
  document.querySelector(".replies").style.display = "none";
  document.querySelector(".announcements").style.display = "block";
  document.querySelector(".complaints-section").style.display = "none";

  document.getElementById("complaints-a").classList.remove("active");
  document.getElementById("feedback-a").classList.remove("active");
  document.getElementById("ann-a").classList.add("active");
  document.getElementById("posts-a").classList.remove("active");
  document.getElementById("your-posts-a").classList.remove("active");

  // Create an XMLHttpRequest object
  const xhttp = new XMLHttpRequest();

  xhttp.open("POST", "modules/announcements-list.php", true);

  // Define a callback function
  xhttp.onload = function() {
    // Here you can use the Data
    if(xhttp.readyState === XMLHttpRequest.DONE){
      
      if(xhttp.status === 200){
        
        let data = xhttp.response;

        document.querySelector("#announcements-list").innerHTML = data;

      }
    }
  }

  // Send a request
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();

}

// Posts button event
document.querySelector("#posts-btn").onclick = function() {
  document.querySelector(".posts").style.display = "block";
  document.querySelector(".your-posts").style.display = "none";
  document.querySelector(".replies").style.display = "none";
  document.querySelector(".announcements").style.display = "none";
  document.querySelector(".complaints-section").style.display = "none";

  document.getElementById("complaints-a").classList.remove("active");
  document.getElementById("feedback-a").classList.remove("active");
  document.getElementById("ann-a").classList.remove("active");
  document.getElementById("your-posts-a").classList.remove("active");
  document.getElementById("posts-a").classList.add("active");

  getPosts();

}

// Posts button event
document.querySelector("#your-posts-btn").onclick = function() {
  document.querySelector(".posts").style.display = "none";
  document.querySelector(".your-posts").style.display = "block";
  document.querySelector(".replies").style.display = "none";
  document.querySelector(".announcements").style.display = "none";
  document.querySelector(".complaints-section").style.display = "none";

  document.getElementById("complaints-a").classList.remove("active");
  document.getElementById("feedback-a").classList.remove("active");
  document.getElementById("ann-a").classList.remove("active");
  document.getElementById("your-posts-a").classList.add("active");
  document.getElementById("posts-a").classList.remove("active");

  getYourPosts();

}

// Latest Complaint
document.querySelector("#latest-complaint").onclick = function() {
  
  // Create an XMLHttpRequest object
  const xhttp = new XMLHttpRequest();
  
  xhttp.open("POST", "modules/get-announcements.php", true);

  // Define a callback function
  xhttp.onload = function() {
    // Here you can use the Data
    if(xhttp.readyState === XMLHttpRequest.DONE){
      
      if(xhttp.status === 200){
        
        let data = xhttp.response;

        document.querySelector("#announcements-list").innerHTML = data;

      }
    }
  }

  // Send a request
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();
  
}

// Latest Announcement
document.querySelector("#latest-announcement").onclick = function() {
  document.querySelector(".posts").style.display = "none";
  document.querySelector(".notify").style.display = "none";
  document.querySelector(".announcements").style.display = "block";
  document.querySelector(".complaints-section").style.display = "none";
}

// Latest Post
document.querySelector("#latest-post").onclick = function() {
  document.querySelector(".posts").style.display = "block";
  document.querySelector(".complaints-section").style.display = "none";

  getPosts();
  
}

// Function to retrieve all the notifications
function getReplies() {

  // Create an XMLHttpRequest object
  const xhttp = new XMLHttpRequest();

  xhttp.open("POST", "modules/reply-list.php", true);

  // Define a callback function
  xhttp.onload = function() {
    // Here you can use the Data
    if(xhttp.readyState === XMLHttpRequest.DONE){
      
      if(xhttp.status === 200){
        
        let data = xhttp.response;

        document.querySelector("#feedback-list").innerHTML = data;

      }
    }
  }

  // Send a request
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();

}

// // Function to retrieve all replies from both.
// function getAllReplies() {
//   // Create an XMLHttpRequest object
//   const xhttp = new XMLHttpRequest();
//   xhttp.open("POST", "modules/replies-list.php", true);
//   // Define a callback function
//   xhttp.onload = function() {
//     // Here you can use the Data
//     if(xhttp.readyState === XMLHttpRequest.DONE){
//       if(xhttp.status === 200){
//         let data = xhttp.response;
//         document.querySelector("#moreReplies").innerHTML = data;
//       }
//     }
//   }

//   // Send a request
//   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//   xhttp.send();

// }

// Function to retrieve all the notifications
// function getNotifications() {

//   // Create an XMLHttpRequest object
//   const xhttp = new XMLHttpRequest();

//   xhttp.open("POST", "modules/notifications-list.php", true);

//   // Define a callback function
//   xhttp.onload = function() {
//     // Here you can use the Data
//     if(xhttp.readyState === XMLHttpRequest.DONE){
      
//       if(xhttp.status === 200){
        
//         let data = xhttp.response;

//         document.querySelector("#notifications-list").innerHTML = data;
//         document.querySelector("#bell-notifications-list").innerHTML = data;

//       }
//     }
//   }

//   // Send a request
//   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//   xhttp.send();

// }

// Function to retrieve all the posts
function getPosts() {
  // Create an XMLHttpRequest object
  const xhttp = new XMLHttpRequest();

  xhttp.open("POST", "modules/posts-list.php", true);

  // Define a callback function
  xhttp.onload = function() {
    // Here you can use the Data
    if(xhttp.readyState === XMLHttpRequest.DONE){
      
      if(xhttp.status === 200){
        
        let data = xhttp.response;

        document.querySelector("#posts-list").innerHTML = data;

      }
    }
  }

  // Send a request
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();

}

// Function to retrieve your posts
function getYourPosts() {
  // Create an XMLHttpRequest object
  const xhttp = new XMLHttpRequest();

  xhttp.open("POST", "modules/your-posts-list.php", true);

  // Define a callback function
  xhttp.onload = function() {
    // Here you can use the Data
    if(xhttp.readyState === XMLHttpRequest.DONE){
      
      if(xhttp.status === 200){
        
        let data = xhttp.response;

        document.querySelector("#your-posts-list").innerHTML = data;

      }
    }
  }

  // Send a request
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();

}

// Function to retrieve the complaints
function getComplaints() {

  // Create an XMLHttpRequest object
  const xhttp = new XMLHttpRequest();

  xhttp.open("POST", "modules/complaints-list.php", true);

  // Define a callback function
  xhttp.onload = function() {
    // Here you can use the Data
    if(xhttp.readyState === XMLHttpRequest.DONE){
      
      if(xhttp.status === 200){
        
        let data = xhttp.response;

        document.querySelector("#complaints-list").innerHTML = data;

      }
    }
  }

  // Send a request
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();  

}

// Function to retrieve the latest feedback
function getLatestFeedback () {
   // Create an XMLHttpRequest object for posts
   const xhttp = new XMLHttpRequest();

   xhttp.open("POST", "modules/get-latest-feedback.php", true);
 
   // Define a callback function
   xhttp.onload = function() {
     // Here you can use the Data
     if(xhttp.readyState === XMLHttpRequest.DONE){
       
       if(xhttp.status === 200){
         
         let data = xhttp.response;
 
         document.querySelector("#latest-complaint").innerHTML = data;
 
       }
     }
   }
 
   // Send a request
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xhttp.send();

}

// Function to retrieve the latest announcements,
function getLatestAnnouncement () {

  // Create an XMLHttpRequest object for posts
  const xhttp = new XMLHttpRequest();

  xhttp.open("POST", "modules/get-latest-announcement.php", true);

  // Define a callback function
  xhttp.onload = function() {
    // Here you can use the Data
    if(xhttp.readyState === XMLHttpRequest.DONE){
      
      if(xhttp.status === 200){
        
        let data = xhttp.response;

        document.querySelector("#latest-announcement").innerHTML = data;

      }
    }
  }

  // Send a request
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();

}

// Function to retrieve the latest posts
function getLatestPost() {

  // Create an XMLHttpRequest object for posts
  const xhttp = new XMLHttpRequest();

  xhttp.open("POST", "modules/get-latest-post.php", true);

  // Define a callback function
  xhttp.onload = function() {
    // Here you can use the Data
    if(xhttp.readyState === XMLHttpRequest.DONE){
      
      if(xhttp.status === 200){
        
        let data = xhttp.response;

        document.querySelector("#latest-post").innerHTML = data;

      }
    }
  }

  // Send a request
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();

}

// Function to retrieve the latest posts, announcements, feedback on page reload
window.onload = function(){  

  getComplaints();
 
  getLatestPost();

  getLatestAnnouncement();

  getLatestFeedback();

}

// Function to 
function verifyPassword() {
	var password = document.getElementById("password").value;
	var confirm_password = document.getElementById("confirm_password").value;

	//minimum password length validation  
	if (password.length < 5 || confirm_password.length < 5) {
		document.getElementById("error_message").innerText = "**Password is too short ";
		return false;
	}

	if (password !== confirm_password) {
		document.getElementById("error_message").innerText= "**Password mismatch ";
		return false;
	}

}

// Complaints button event
document.querySelector("#complaints-btn").onclick = function() {
  document.querySelector(".replies").style.display = "none";
  document.querySelector(".your-replies").style.display = "none";
  document.querySelector(".your-posts").style.display = "none";
  document.querySelector(".complaints-section").style.display = "block";
  document.querySelector(".posts").style.display = "none";
  document.querySelector(".announcements").style.display = "none";
  document.querySelector(".your-announcements").style.display = "none";

  document.getElementById("complaints-a").classList.remove("active");
  document.getElementById("new-feedback-a").classList.remove("active");
  document.getElementById("your-feedback-a").classList.remove("active");
  document.getElementById("ann-a").classList.remove("active");
  document.getElementById("your-ann-a").classList.remove("active");
  document.getElementById("posts-a").classList.remove("active");
  document.getElementById("your-posts-a").classList.remove("active");

  getComplaints();

}

// Feeback button event
document.querySelector("#feedback-btn").onclick = function() {
  document.getElementById("complaints-a").classList.remove("active");
  document.getElementById("new-feedback-a").classList.add("active");
  document.getElementById("your-feedback-a").classList.remove("active");
  document.getElementById("ann-a").classList.remove("active");
  document.getElementById("your-ann-a").classList.remove("active");
  document.getElementById("posts-a").classList.remove("active");
  document.getElementById("your-posts-a").classList.remove("active");
  
  document.querySelector(".replies").style.display = "block";
  document.querySelector(".your-replies").style.display = "none";
  document.querySelector(".posts").style.display = "none";
  document.querySelector(".your-posts").style.display = "none";
  document.querySelector(".announcements").style.display = "none";
  document.querySelector(".your-announcements").style.display = "none";
  document.querySelector(".complaints-section").style.display = "none";

  getReplies();

}

// Feeback button event
document.querySelector("#your-feedback-btn").onclick = function() {
  document.getElementById("complaints-a").classList.remove("active");
  document.getElementById("new-feedback-a").classList.remove("active");
  document.getElementById("your-feedback-a").classList.add("active");
  document.getElementById("ann-a").classList.remove("active");
  document.getElementById("your-ann-a").classList.remove("active");
  document.getElementById("posts-a").classList.remove("active");
  document.getElementById("your-posts-a").classList.remove("active");

  document.querySelector(".replies").style.display = "none";
  document.querySelector(".your-replies").style.display = "block";
  document.querySelector(".posts").style.display = "none";
  document.querySelector(".your-posts").style.display = "none";
  document.querySelector(".announcements").style.display = "none";
  document.querySelector(".your-announcements").style.display = "none";
  document.querySelector(".complaints-section").style.display = "none";

  getYourReplies();

}

// Announcements button event
document.querySelector("#announcements-btn").onclick = function() {
  document.querySelector(".posts").style.display = "none";
  document.querySelector(".your-posts").style.display = "none";
  document.querySelector(".announcements").style.display = "block";
  document.querySelector(".your-announcements").style.display = "none";
  document.querySelector(".replies").style.display = "none";
  document.querySelector(".your-replies").style.display = "none";
  document.querySelector(".complaints-section").style.display = "none";

  document.getElementById("complaints-a").classList.remove("active");
  document.getElementById("new-feedback-a").classList.remove("active");
  document.getElementById("your-feedback-a").classList.remove("active");
  document.getElementById("ann-a").classList.add("active");
  document.getElementById("your-ann-a").classList.remove("active");
  document.getElementById("posts-a").classList.remove("active");
  document.getElementById("your-posts-a").classList.remove("active");  

  getAnnouncements();

}

// Announcements button event
document.querySelector("#your-announcements-btn").onclick = function() {
  document.querySelector(".posts").style.display = "none";
  document.querySelector(".your-posts").style.display = "none";
  document.querySelector(".announcements").style.display = "none";
  document.querySelector(".your-announcements").style.display = "block";
  document.querySelector(".replies").style.display = "none";
  document.querySelector(".your-replies").style.display = "none";
  document.querySelector(".complaints-section").style.display = "none";

  document.getElementById("complaints-a").classList.remove("active");
  document.getElementById("new-feedback-a").classList.remove("active");
  document.getElementById("your-feedback-a").classList.remove("active");
  document.getElementById("ann-a").classList.remove("active");
  document.getElementById("your-ann-a").classList.add("active");
  document.getElementById("posts-a").classList.remove("active");
  document.getElementById("your-posts-a").classList.remove("active");

  getYourAnnouncements();

}

// Posts button event
document.querySelector("#posts-btn").onclick = function() {
  document.querySelector(".replies").style.display = "none";
  document.querySelector(".your-replies").style.display = "none";
  document.querySelector(".posts").style.display = "block";
  document.querySelector(".your-posts").style.display = "none";
  document.querySelector(".announcements").style.display = "none";
  document.querySelector(".your-announcements").style.display = "none";
  document.querySelector(".complaints-section").style.display = "none";

  document.getElementById("complaints-a").classList.remove("active");
  document.getElementById("new-feedback-a").classList.remove("active");
  document.getElementById("your-feedback-a").classList.remove("active");
  document.getElementById("ann-a").classList.remove("active");
  document.getElementById("your-ann-a").classList.remove("active");
  document.getElementById("posts-a").classList.add("active");
  document.getElementById("your-posts-a").classList.remove("active");
  
  getPosts();

}

// Your Posts button event
document.querySelector("#your-posts-btn").onclick = function() {
  document.querySelector(".replies").style.display = "none";
  document.querySelector(".your-replies").style.display = "none";
  document.querySelector(".your-posts").style.display = "block";
  document.querySelector(".announcements").style.display = "none";
  document.querySelector(".your-announcements").style.display = "none";
  document.querySelector(".complaints-section").style.display = "none";

  document.getElementById("complaints-a").classList.remove("active");
  document.getElementById("new-feedback-a").classList.remove("active");
  document.getElementById("your-feedback-a").classList.remove("active");
  document.getElementById("ann-a").classList.remove("active");
  document.getElementById("your-ann-a").classList.remove("active");
  document.getElementById("posts-a").classList.remove("active");
  document.getElementById("your-posts-a").classList.add("active");

  getYourPosts();

}

// Latest Announcement
document.querySelector("#latest-announcement").onclick = function() {
  document.querySelector(".replies").style.display = "none";
  document.querySelector(".posts").style.display = "none";
  document.querySelector(".announcements").style.display = "block";
  document.querySelector(".complaints-section").style.display = "none";
  
  getAnnouncements();

}

// Latest Post
document.querySelector("#latest-post").onclick = function() {
  document.querySelector(".posts").style.display = "block";
  document.querySelector(".complaints-section").style.display = "none";

  getPosts();
  
}

// Latest Reply
document.querySelector("#latest-reply").onclick = function() {
  document.querySelector(".replies").style.display = "block";
  document.querySelector(".complaints-section").style.display = "none";

  getLatestFeedback();
  
}

// Function to retrieve all the announcements
function getAnnouncements() {

  // Create an XMLHttpRequest object
  const xhttp = new XMLHttpRequest();
  
  xhttp.open("POST", "modules/lecturer-announcements-list.php", true);

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

// Function to retrieve all the announcements
function getYourAnnouncements() {

  // Create an XMLHttpRequest object
  const xhttp = new XMLHttpRequest();
  
  xhttp.open("POST", "modules/lecturer-your-announcements-list.php", true);

  // Define a callback function
  xhttp.onload = function() {
    // Here you can use the Data
    if(xhttp.readyState === XMLHttpRequest.DONE){
      
      if(xhttp.status === 200){
        
        let data = xhttp.response;

        document.querySelector("#your-announcements-list").innerHTML = data;

      }
    }
  }

  // Send a request
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();
}

// // Function to retrieve all the notifications
// function getNotifications() {

//   // Create an XMLHttpRequest object
//   const xhttp = new XMLHttpRequest();

//   xhttp.open("POST", "modules/lecturer-notifications-list.php", true);

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

  xhttp.open("POST", "modules/lecturer-posts-list.php", true);

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

// Function to retrieve all the your posts
function getYourPosts() {
  // Create an XMLHttpRequest object
  const xhttp = new XMLHttpRequest();

  xhttp.open("POST", "modules/lecturer-your-posts-list.php", true);

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

  xhttp.open("POST", "modules/lecturer-complaints-list.php", true);

  // Define a callback function
  xhttp.onload = function() {
    // Here you can use the Data
    if(xhttp.readyState === XMLHttpRequest.DONE){
      
      if(xhttp.status === 200){
        
        let data = xhttp.response;

        document.querySelector("#lecturer-complaints-list").innerHTML = data;

      }
    }
  }

  // Send a request
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();

}

// Function to retrieve all the replies to replies
function getReplies() {
   
  // Create an XMLHttpRequest object for replies
  const xhttp = new XMLHttpRequest();

  xhttp.open("POST", "modules/lecturer-reply-list.php", true);

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

// Function to retrieve all the replies to your Replies
function getYourReplies() {
   
  // Create an XMLHttpRequest object for replies
  const xhttp = new XMLHttpRequest();

  xhttp.open("POST", "modules/lecturer-your-reply-list.php", true);

  // Define a callback function
  xhttp.onload = function() {
    // Here you can use the Data
    if(xhttp.readyState === XMLHttpRequest.DONE){
      
      if(xhttp.status === 200){
        
        let data = xhttp.response;

        document.querySelector("#your-feedback-list").innerHTML = data;

      }
    }
  }

  // Send a request
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();

}

// Function to retrieve the latest feedback
function getLatestFeedback () {
  // Create an XMLHttpRequest object for the latest feedback
  const xhttp = new XMLHttpRequest();

  xhttp.open("POST", "modules/lecturer-get-latest-feedback.php", true);

  // Define a callback function
  xhttp.onload = function() {
    // Here you can use the Data
    if(xhttp.readyState === XMLHttpRequest.DONE){
      
      if(xhttp.status === 200){
        
        let data = xhttp.response;

        document.querySelector("#latest-reply").innerHTML = data;

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

  xhttp.open("POST", "modules/lecturer-get-latest-announcement.php", true);

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

  xhttp.open("POST", "modules/lecturer-get-latest-post.php", true);

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


// Function to retrieve the latest complaint count
function getLatestComplaint () {
  // Create an XMLHttpRequest object for the latest feedback
  const xhttp = new XMLHttpRequest();

  xhttp.open("POST", "modules/lecturer-get-latest-complaint.php", true);

  // Define a callback function
  xhttp.onload = function() {
    // Here you can use the Data
    if(xhttp.readyState === XMLHttpRequest.DONE){
      
      if(xhttp.status === 200){
        
        let data = xhttp.response;

        document.querySelector(".noti").innerText = data;


      }
    }
  }

  // Send a request
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();

}

getLatestComplaint();

// Function to retrieve the latest new replies count
function getNewReplies () {
  // Create an XMLHttpRequest object for the latest feedback
  const xhttp = new XMLHttpRequest();

  xhttp.open("POST", "modules/lecturer-get-new-replies.php", true);

  // Define a callback function
  xhttp.onload = function() {
    // Here you can use the Data
    if(xhttp.readyState === XMLHttpRequest.DONE){
      
      if(xhttp.status === 200){
        
        let data = xhttp.response;

        document.querySelector(".replied").innerText = data;


      }
    }
  }

  // Send a request
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();

}

getNewReplies();

// Function to retrieve the latest new announcements count
function getNewAnnouncements () {
  // Create an XMLHttpRequest object for the latest feedback
  const xhttp = new XMLHttpRequest();

  xhttp.open("POST", "modules/lecturer-get-new-ann.php", true);

  // Define a callback function
  xhttp.onload = function() {
    // Here you can use the Data
    if(xhttp.readyState === XMLHttpRequest.DONE){
      
      if(xhttp.status === 200){
        
        let data = xhttp.response;

        document.querySelector(".ann-noti").innerText = data;


      }
    }
  }

  // Send a request
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();

}

getNewAnnouncements();

// Function to retrieve the latest new posts count
function getNewPosts () {
  // Create an XMLHttpRequest object for the latest feedback
  const xhttp = new XMLHttpRequest();

  xhttp.open("POST", "modules/lecturer-get-new-post.php", true);

  // Define a callback function
  xhttp.onload = function() {
    // Here you can use the Data
    if(xhttp.readyState === XMLHttpRequest.DONE){
      
      if(xhttp.status === 200){
        
        let data = xhttp.response;

        document.querySelector(".post-noti").innerText = data;


      }
    }
  }

  // Send a request
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();

}

getNewPosts();

// Function to retrieve the latest posts, announcements, feedback on page reload
window.onload = function(){  

  getComplaints();

  getLatestPost();

  getLatestAnnouncement();

  getLatestFeedback();

}
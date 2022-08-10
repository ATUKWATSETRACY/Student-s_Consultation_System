
// ^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$

function validate() {
    
    /*validating email with strong regular expression(regex)*/
    //var str = document.querySelector("#uni-email").value;

    var str = "2018@gmail.com";

    let pattern = /std.must.ac.ug/i;

    if (str === pattern) {
        
    } else {
        
    }



    // console.log(str);

    // var filter = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/i

    // if (!filter.test(str)) {
    
    //     alert("Please enter a valid email address!");
        
    // } else {
    //     console.log("worked");
    // }

}

validate();
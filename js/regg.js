function validation(event) {

    // event.preventDefault();          এইটা ওপেন থাকলে ফরম সাবমিট হবে না                  
    console.log("Validation function executed");

    var name = document.getElementById('name').value;
    var mobile = document.getElementById('mobile').value;
    var pemail = document.getElementById('pemail').value;
    var aemail = document.getElementById('aemail').value;
    var pass = document.getElementById('pass').value;
    var cpass = document.getElementById('cpass').value;
    var sid = document.getElementById('sid').value;
    var session = document.getElementById('session').value;
    var department = document.getElementById('department').value;


 
        if(name == ""){
            document.getElementById('namee').innerHTML = "*write your name*";
            return false;
        }

            if(name.length<2){
                document.getElementById('namee').innerHTML = "*more than 1 character*";                                   
                return false;
            }
            if(!isNaN(name)){
                document.getElementById('namee').innerHTML = "*only alphabet*";                                              
                return false;
            }
            else{
                document.getElementById('namee').innerHTML = "";                                                            
            }

        if(mobile == ""){
            document.getElementById('mobilee').innerHTML = "*write mobile number*";                      
            return false;
        }
            if(isNaN(mobile)){
                document.getElementById('mobilee').innerHTML = "*only digits*";                          
                return false;
            }
            else{
                document.getElementById('mobilee').innerHTML = "";                                                           
            }


        if(pemail == ""){
            document.getElementById('pemaill').innerHTML = "*write personal email*";                               
            return false;
        }
            if(pemail.indexOf('@')<=0){
                document.getElementById('pemaill').innerHTML = "**Invalid position of @ **";                                  
                return false;
            }
            if(pemail.charAt(pemail.length-4)!== '.' && pemail.charAt(pemail.length-3) !== '.'){
                document.getElementById('pemaill').innerHTML = "**Invalid position of dot(.) **";                             
                return false;
            }
            else{
                document.getElementById('pemaill').innerHTML = "";                                                             
            }


        if(aemail == ""){
            document.getElementById('aemaill').innerHTML = "*write academic email*";                               
            return false;
        }
            if(aemail.indexOf('@')<=0){
                document.getElementById('aemaill').innerHTML = "**Invalid position of @ **";                                   
                return false;
            }
            if (!/^[a-zA-Z0-9._-]+@student\.just\.edu\.bd$/.test(aemail)) {
                document.getElementById('aemaill').innerHTML = "**Must be a justian email**";
                return false;
            } 
            else{
                document.getElementById('aemaill').innerHTML = "";                                                            
            }

     
        if(pass == ""){
            document.getElementById('passs').innerHTML = "*fill password*";                               
            return false;
        }
            if(pass.length<8){
                document.getElementById('passs').innerHTML = "*At leat 8 character*";                            
                return false;
            }
            if(pass.search(/[0-9]/) == -1){
                document.getElementById('passs').innerHTML = "*At leat 1 numeric number*";                       
                return false;
            }
            if(pass.search(/[a-z]/) == -1){
                document.getElementById('passs').innerHTML = "**At leat 1 lower case character*";                 
                return false;
            }
            if(pass.search(/[A-Z]/) == -1){
                document.getElementById('passs').innerHTML = "*At leat 1 upper case character*";                 
                return false;
            }
            if(pass.search(/[!\@\#\$\%\%\^\&\*\(\)\_\-\+\<\>\,\?]/) == -1){
                document.getElementById('passs').innerHTML = "*At leat 1 special symbol*";                       
                return false;
            }
            else{
                document.getElementById('passs').innerHTML = "";                                                             
            }

        if(cpass == ""){
            document.getElementById('cpasss').innerHTML = "*confirm password*";                        
            return false;
        }
             if(cpass != pass){
                document.getElementById('cpasss').innerHTML = "*Password not matched*";                        
                return false;
            }
            else{
                document.getElementById('cpasss').innerHTML = "";                                                          
            }

        if(sid == ""){
            document.getElementById('sidd').innerHTML = "*Example: 190126*";                       
            return false;
        }
            if(isNaN(sid)){
                document.getElementById('sidd').innerHTML = "*Only Numbers*";                          
                return false;
            }
            else{
                document.getElementById('sidd').innerHTML = "";                                                           
            }

        if(session == ""){
            document.getElementById('sessionn').innerHTML = "*write your session*";                       
            return false;
        }
 
            else{
                document.getElementById('sessionn').innerHTML = "";                                                           
            }

        if(department == ""){
            document.getElementById('departmentt').innerHTML = "*select your department*";                       
            return false;
        }
            else{
                document.getElementById('departmentt').innerHTML = "";                                                           
            }

    console.log("Validation passed");
    return true; // Allow form submission
}

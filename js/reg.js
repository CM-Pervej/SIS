function validation(event) {
    event.preventDefault();                                                                                                  /* Prevent the default form submission behavior */

    var name = document.getElementById('name').value;
    var fname = document.getElementById('fname').value;
    var mname = document.getElementById('mname').value;
    var birth = document.getElementById('birth').value;
    var religion = document.getElementById('religion').value;
    var height = document.getElementById('height').value;
    var nationality = document.getElementById('nationality').value;
    var padd = document.getElementById('padd').value;

    var mobile = document.getElementById('mobile').value;
    // var mobilef = document.getElementById('mobileff').value;
    // var mobilem = document.getElementById('mobilemm').value;
    var pemail = document.getElementById('pemail').value;
    var aemail = document.getElementById('aemail').value;
    var pass = document.getElementById('pass').value;
    var cpass = document.getElementById('cpass').value;

    var sid = document.getElementById('sid').value;
    var session = document.getElementById('session').value;
    var department = document.getElementById('department').value;
    // var faculty = document.getElementById('faculty').value;
    // var university = document.getElementById('university').value;


    /***** Personal Information *****/
    /* Your Name */
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


    /*Father's Name*/
        if(fname == ""){
            document.getElementById('fnamee').innerHTML = "*write father's name*";                                          
            return false;
        }

            if(fname.length<2){
                document.getElementById('fnamee').innerHTML = "*more than 1 character*";                                 
                return false;
            }
            if(!isNaN(fname)){
                document.getElementById('fnamee').innerHTML = "*only alphabet*";                                            
                return false;
            }
            else{
                document.getElementById('fnamee').innerHTML = "";                                                            
            }


    /*Mother's Name*/
        if(mname == ""){
            document.getElementById('mnamee').innerHTML = "*write mother's name*";                                          
            return false;
        }

            if(mname.length<2){
                document.getElementById('mnamee').innerHTML = "*more than 1 character*";                                  
                return false;
            }
            if(!isNaN(mname)){
                document.getElementById('mnamee').innerHTML = "*only alphabet*";                                           
                return false;
            }
            else{
                document.getElementById('mnamee').innerHTML = "";                                                            
            }


        /*Date of birth*/
        if(birth == ""){
            document.getElementById('birthh').innerHTML = "*Select your birth date*";                                          
            return false;
        }

            else{
                document.getElementById('birth').innerHTML = "";                                                            
            }
            
    /*Religion*/
        if(religion == ""){
            document.getElementById('religionn').innerHTML = "*Select your religion*";                                          
            return false;
        }

            else{
                document.getElementById('religionn').innerHTML = "";                                                            
            }


    /*Height*/
        if(height == ""){
            document.getElementById('heightt').innerHTML = "*write your height*";                                             
            return false;
        }
            if(!/^[0-9'"]+$/.test(height)){
                document.getElementById('heightt').innerHTML = "*Example: 5'7\"*";                         
                return false;
            }

            else{
                document.getElementById('heightt').innerHTML = "";                                                            
            }


    /*Nationality*/
        if(nationality == ""){
            document.getElementById('nationalityy').innerHTML = "*write your Nationality*";                                          
            return false;
        }

            else{
                document.getElementById('nationalityy').innerHTML = "";                                                            
            }

        
    /*Permanent Address*/
        if(padd == ""){
            document.getElementById('paddd').innerHTML = "*Formate: Village, P.O., Thana, District*";                                          
            return false;
        }

            else{
                document.getElementById('paddd').innerHTML = "";                                                            
            }




    /***** Contact Information *****/
    /* Mobile */
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



    /* Personal Email */
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


    // /* Academic Email */
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


    /* Academic email's password */      
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

    /* Confirm academic password */
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

        

    /* Academic Information */
    /* Student id */
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
            if (!/^[0-9-]$/.test(session)){
                document.getElementById('sessionn').innerHTML = "Example: 2019-20*";                          
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
}





function submitAllForms() {
    document.getElementById("form1").submit();
    document.getElementById("form2").submit();
    document.getElementById("form3").submit();
    document.getElementById("form4").submit();
}

function resetAllForms() {
    document.getElementById("form1").reset();
    document.getElementById("form2").reset();
    document.getElementById("form3").reset();
    document.getElementById("form4").reset();
}
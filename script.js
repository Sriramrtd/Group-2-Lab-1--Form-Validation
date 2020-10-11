
function validate()
{

   firstname=f1.firstName.value;
   
   lastname=f1.lastName.value;
   
   phonenumber=f1.phoneNumber.value;


   age=f1.age.value;
    
    address=f1.address.value;

   city=f1.city.value;

   state=f1.state.value;

   pincode=f1.pinCode.value; 
    
    height=f1.height.value;

   weight=f1.weight.value;

   bmi=f1.bmi.value;


  

  regname=/^[a-zA-Z ]{4,30}$/;

  regphone=/^[0-9]{10}$/;

  regage=/^[0-9]{2}$/;

     regpin=/^[0-9]{6}$/;
    regaddress=/^[a-zA-Z0-9\s,.'-]{3,}$/;
 regheight=/^[0-9]{2,3}$/
  

  if(!regname.test(firstname))
  {
     
      alert("first name contains min 4 character and max 30 characters");

      return false;
  }

  if(!regname.test(lastname))
  {
     
      alert("last name contains min 4 characters and max 30 characters");

      return false;
  }

  if(!regphone.test(phonenumber))
  {
     
      alert("contains exactly 10 characters");

      return false;
  }

  if(!regheight.test(height))
  {
     
      alert("Plz enter the valid height");

      return false;
  }

  if(!regheight.test(weight))
  {
     
      alert("Plz enter the valid weight");

      return false;
  }
  
  if(!regheight.test(bmi))
  {
     
      alert("Plz enter the valid bmi");

      return false;
  }
  
  
  

  return true;




}

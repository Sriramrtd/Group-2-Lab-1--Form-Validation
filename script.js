
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

  

  regname=/^[a-zA-Z ]{4,30}$/;

  regphone=/^[0-9]{10}$/;

  regage=/^[0-9]{2}$/;

     regpin=/^[0-9]{6}$/;
    regaddress=/^[a-zA-Z0-9\s,.'-]{3,}$/;

  

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
    
    if(!regname.test(city))
  {
     
      alert("Plz enter the valid city");

      return false;
  }

  if(!regname.test(state))
  {
     
      alert("Plz enter the valid state");

      return false;
  }

  if(!regaddress.test(address))
  {
     
      alert("Plz enter the valid address");

      return false;
  }

  if(!regpin.test(pincode))
  {
     
      alert("Plz enter the valid pincode");

      return false;
  }

  
  

  return true;




}

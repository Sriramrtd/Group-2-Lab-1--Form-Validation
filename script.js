
function validate()
{

   firstname=f1.firstName.value;
   
   lastname=f1.lastName.value;
   
   phonenumber=f1.phoneNumber.value;


   age=f1.age.value;

  

  regname=/^[a-zA-Z ]{4,30}$/;

  regphone=/^[0-9]{10}$/;

  regage=/^[0-9]{2}$/;

  

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

  
  

  return true;




}
